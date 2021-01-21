<?php 
    $this->db->join('tb_seminar sm','sm.id_seminar = s.seminar_id');
    $this->db->join('tb_prodi p','p.id_prodi = s.prodi_id');
    $daftar_seminar = $this->db->get_where('tb_daftar_seminar s',['id_df_seminar' => $this->uri->segment(3)])->row();?>

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?= site_url('dashboard')?>"><i class="fas fa-home"></i> Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="<?= site_url('df_seminar')?>">Daftar Seminar</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?= $daftar_seminar->nama?></li>
                </ol>
              </nav>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  <div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <table class="table-flush table-sm" >
                    <tbody class="text-center">
                        <tr> 
                            <td scope="col" class="text-left pr-0"><h4 class="mb-0">Mahasiswa Seminar</h4></td>
                            <td scope="col" width="1px">:</td>
                            <th scope="col" class="text-left pl-0"><h4 class="mb-0"><strong><?= $daftar_seminar->nama." (".$daftar_seminar->nim.")"." - ".$daftar_seminar->nama_prodi?></strong></h4></th>
                        </tr>
                        <tr>
                            <td scope="col" class="text-left pr-0"><h4 class="mb-0">Judul Tugas Akhir</h4></td>
                            <td scope="col">:</td>
                            <th scope="col" class="text-left pl-0"><h4 class="mb-0"><strong><?= $daftar_seminar->judul_ta?></strong></h4></th>
                        </tr>
                        <tr>
                            <td scope="col" class="text-left pr-0"><h4 class="mb-0">Waktu Seminar</h4></td>
                            <td scope="col">:</td>
                            <th scope="col" class="text-left pl-0"><h4 class="mb-0"><strong><?= longdate_indo($daftar_seminar->tgl_seminar).", Jam : ".$daftar_seminar->jam_seminar?></strong></h4></th>
                        </tr>
                    </tbody>
                </table>
                <hr class="my-3">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Create</button>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Mahasiswa/i</th>
                    <th>Prodi</th>
                    <th>Waktu</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($peserta as $row): ?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $row->nim?></td>
                      <td><?= $row->nama?></td>
                      <td><?= $row->nama_prodi?></td>
                      <td><?= $row->program?></td>
                      <td><?= $row->status?></td>
                      <td>
                          <button type="button" class="btn btn-sm btn-success ml-1" data-toggle="modal" data-target="#edit" onclick="dataEditPeserta(<?= $row->id_peserta?>)"><i class="ni ni-ruler-pencil"></i>&nbsp; Edit</button>
                          <button type="button" class="btn btn-sm btn-danger ml-1" onclick="deletePeserta(<?= $row->id_peserta?>)"><i class="fas fa-trash"></i>&nbsp; Delete</button>
                      </td>
                    </tr>
                    
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>

        <!-- Modal Tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Peserta Seminar Tugas Akhir</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <div class="card">
                <div class="card-body">
                  <form method="POST" action="<?= base_url('df_seminar/createPeserta')?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">NIM</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="nim" placeholder="NIM" type="text">
                              </div>
                            </div>
                            
                          </div> 
                          <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="exampleDatepicker">Nama</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input class="form-control" name="nama" placeholder="Nama" type="text">
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Prodi</label>
                              <div class="input-group input-group-merge">
                                <select name="prodi_id" class="form-control">
                                  <option disabled selected> --- Pilih Prodi --- </option>
                                  <?php foreach($prodi as $row):?>
                                    <option value="<?=$row->id_prodi?>"><?= $row->nama_prodi?></option>
                                  <?php endforeach;?>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="program" value="D3" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">D3</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="program" value="S1 Reguler" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">S1 Reguler</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline3" name="program" value="S1 Fast Trackt" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline3">S1 Fast Trackt</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline4" name="program" value="S1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline4">S2</label>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Status</label>
                              <div class="input-group input-group-merge">
                                <select name="status" class="form-control">
                                  <option disabled selected> --- Pilih Status --- </option>
                                  <option value="Diterima">Diterima</option>
                                  <option value="Ditolak">Ditolak</option>
                                  <option value="Menunggu Vefifikasi">Menunggu Vefifikasi</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <input type="hidden" name="id_seminar" value="<?= $this->uri->segment(3)?>">
                        
                        <button type="submit" class="btn btn-primary btn-md">Daftar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                </div>
             </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <!-- Modal edit -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Peserta Seminar Tugas Akhir</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                  <div id="data_edit"></div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>