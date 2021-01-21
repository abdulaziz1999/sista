<?php 
    $this->db->join('tb_seminar sm','sm.id_seminar = s.seminar_id');
    $this->db->join('tb_prodi p','p.id_prodi = s.prodi_id');
    $this->db->join('tb_dosen d','d.id_dosen = s.pembimbing');
    $daftar_seminar = $this->db->get_where('tb_daftar_seminar s',['id_df_seminar' => $this->uri->segment(3)])->row();?>
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary pt-5 pb-7">
      <div class="container">
        <div class="header-body">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <div class="">
                  <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-sm-10">
                      <h2 class="display-4 text-white font-weight-bold">Sistem Informasi Seminar Tugas Akhir</h2>
                    </div>
                    <div class="col-lg-6 col-sm-2 text-right">
                      <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?= base_url()?>"><i class="fas fa-home"></i> Home</a></li>
                          <li class="breadcrumb-item"><a href="<?= base_url('jadwal/detail/'.$this->uri->segment(3))?>">Detail Jadwal</a></li>
                          <li class="breadcrumb-item active text-green" aria-current="page">Daftar Peserta</li>
                        </ol>
                      </nav>
                    </div>
                  </div>
                  <div class="card">
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
                    </div>
                    <div class="table-responsive py-4 ">
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
                                        <label class="form-control-label" for="exampleDatepicker">Program</label><br>
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
                                    <input type="hidden" name="id_seminar" value="<?= $this->uri->segment(3)?>">
                                    
                                    <button type="submit" class="btn btn-primary btn-md">Daftar</button>
                            </form>
                            </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
   
  </div>