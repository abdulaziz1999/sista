<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary pt-5 pb-5">
      <div class="container">
        <div class="header-body">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <div class="pr-5">
              <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-10">
                      <h2 class="display-4 text-white font-weight-bold">Sistem Informasi Seminar Tugas Akhir</h2>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                      <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?= base_url()?>"><i class="fas fa-home"></i> Home</a></li>
                          <li class="breadcrumb-item active text-green" aria-current="page">Daftar Seminar</li>
                        </ol>
                      </nav>
                    </div>
                  </div>
                  <p class="text-white"><strong>Pendaftaran seminar berlaku untuk mahasiswa yang telah mendapat persetujuan dari pembimbing TA</strong></p>
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Form Daftar Seminar Tugas Akhir</h3>
                    </div>
                    <!-- Card body -->
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
                                    <input class="form-control" name="nim" placeholder="NIM" type="text" autocomplete="off" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                <label class="form-control-label" for="exampleDatepicker">Nama</label>
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input class="form-control" name="nama" placeholder="Nama" type="text" autocomplete="off" required>
                                  </div>
                                </div>
                              </div> 
                              <div class="col-md-6">
                                <div class="form-group">
                                <label class="form-control-label" for="exampleDatepicker">Judul Tugas Akhir</label>
                                  <div class="input-group input-group-merge">
                                    <textarea class="form-control" autocomplete="off" required name="judul_ta" placeholder="Judul Tugas Akhir" name="" id="" cols="30" rows="6"></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-control-label" for="exampleDatepicker">Prodi</label>
                                  <div class="input-group input-group-merge">
                                    <select name="prodi_id" class="form-control" autocomplete="off" required>
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
                                    <select name="seminar_id" class="form-control" autocomplete="off" required>
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
                                  <input class="form-control" name="tgl_seminar" placeholder="Nama" type="date" autocomplete="off" required>
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
                                  <input class="form-control" name="jam_seminar" placeholder="Nama" type="time" autocomplete="off" required> 
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <div class="form-group">
                                  <label class="form-control-label" for="exampleDatepicker">Penguji 1</label>
                                  <div class="input-group input-group-merge">
                                    <select class="form-control" name="penguji1" autocomplete="off" required>
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