    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Daftar Seminar</li>
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
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah">Create</button>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Mahasiswa/i</th>
                    <th>Seminar</th>
                    <th>Waktu</th>
                    <th>Ruangan</th>
                    <th>Peserta</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($daftar_seminar as $row):?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $row->nim?></td>
                      <td><?= $row->nama?></td>
                      <td><?= $row->nama_seminar?></td>
                      <td><?= $row->jam_seminar."  ".date('d-m-Y',strtotime($row->tgl_seminar))?></td>
                      <td><?= $row->ruang?></td>
                      <td>
                        <a href="<?= site_url('df_seminar/viewPerserta/'.$row->id_df_seminar)?>" class="btn btn-sm btn-warning ml-1">
                          <i class="fas fa-eye"></i>&nbsp;  <span>View</span>
                          <span class="badge badge-md badge-circle badge-floating badge-danger border-white"><?= $this->db->get_where('tb_peserta_seminar',['id_seminar' => $row->id_df_seminar])->num_rows();?></span>
                        </a>
                      </td>
                      <td>
                          <button type="button" class="btn btn-sm btn-success ml-1" data-toggle="modal" data-target="#edit" onclick="showDataEdit(<?= $row->id_df_seminar?>)"><i class="ni ni-ruler-pencil"></i>&nbsp; Edit</button>
                          <button type="button" class="btn btn-sm btn-danger ml-1" onclick="deleteSeminar(<?= $row->id_df_seminar?>)"><i class="fas fa-trash"></i>&nbsp; Delete</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Form Daftar Seminar Tugas Akhir</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <div class="card">
                <div class="card-body">
                  <form method="POST" action="<?= base_url('df_seminar/create')?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">NIM</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="nim" placeholder="NIM" type="text">
                              </div>
                            </div>
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
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Judul Tugas Akhir</label>
                              <div class="input-group input-group-merge">
                                <textarea class="form-control" name="judul_ta" placeholder="Judul Tugas Akhir" name="" id="" cols="30" rows="6"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
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
                          <div class="col-md-6">
                            <div class="form-group">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Seminar</label>
                              <div class="input-group input-group-merge">
                                <select name="seminar_id" class="form-control" >
                                  <option disabled selected> --- Pilih Seminar --- </option>
                                  <?php foreach($seminar as $row):?>
                                    <option value="<?=$row->id_seminar?>"><?= $row->nama_seminar?></option>
                                  <?php endforeach;?>
                                </select>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Tanggal Seminar</label>
                              <div class="input-group input-group-merge">
                              <input class="form-control" name="tgl_seminar" placeholder="Nama" type="date">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Pembimbing</label>
                              <div class="input-group input-group-merge">
                                <select name="pembimbing" class="form-control" >
                                  <option disabled selected> --- Pilih Pembimbing --- </option>
                                  <?php foreach($dosen as $row):?>
                                    <option value="<?=$row->id_dosen?>"><?= $row->nama_dosen?></option>
                                  <?php endforeach;?>
                                </select>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Jam Seminar</label>
                              <div class="input-group input-group-merge">
                              <input class="form-control" name="jam_seminar" placeholder="Nama" type="time">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Penguji 1</label>
                              <div class="input-group input-group-merge">
                                <select class="form-control" name="penguji1" >
                                <option disabled selected> --- Pilih Penguji 1 --- </option>
                                  <?php foreach($dosen as $row):?>
                                    <option value="<?=$row->id_dosen?>"><?= $row->nama_dosen?></option>
                                  <?php endforeach;?>
                                </select>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Ruangan</label>
                              <div class="input-group input-group-merge">
                              <input class="form-control" name="ruang" placeholder="Ruangan" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Penguji 2</label>
                              <div class="input-group input-group-merge">
                                <select class="form-control" name="penguji2" >
                                  <option disabled selected> --- Pilih Penguji 2 --- </option>
                                  <?php foreach($dosen as $row):?>
                                    <option value="<?=$row->id_dosen?>"><?= $row->nama_dosen?></option>
                                  <?php endforeach;?>
                                </select>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
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
            <h5 class="modal-title" id="exampleModalLabel">Form Edit Daftar Seminar Tugas Akhir</h5>
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


    