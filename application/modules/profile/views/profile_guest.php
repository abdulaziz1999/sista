<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary pt-5 pb-5">
      <div class="container">
        <div class="header-body">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <div class="pr-">
              <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-10">
                      <h2 class="display-4 text-white font-weight-bold">Sistem Informasi Seminar Tugas Akhir</h2>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                      <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?= base_url()?>"><i class="fas fa-home"></i> Home</a></li>
                          <li class="breadcrumb-item active text-green" aria-current="page">Profile</li>
                        </ol>
                      </nav>
                    </div>
                  </div>
                    <div class="container-fluid ">
                        <div class="row">
                          <div class="col-xl-4 order-xl-2">
                            <div class="card card-profile">
                              <img src="<?= base_url()?>assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                              <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                  <div class="card-profile-image">
                                    <a href="#">
                                      <img src="<?= base_url()?>assets/img/theme/team-4.jpg" class="rounded-circle">
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                                <div class="d-flex justify-content-between">
                                  
                                </div>
                              </div>
                              <div class="card-body pt-0">
                                <div class="row">
                                  <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center">
                                      
                                    </div>
                                  </div>
                                </div>
                                <div class="text-center">
                                  <h5 class="h3">
                                    <?= @$user->nama?><span class="font-weight-light"></span>
                                  </h5>
                                  <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i><?= @$user->tmp_lahir.", ".date('d M Y',strtotime(@$user->tgl_lahir))?>
                                  </div>
                                  <div class="h5 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i>Jurusan - <?= @$user->nama_prodi?> 
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-8 order-xl-1">
                            
                            <div class="card">
                              <div class="card-header">
                                <div class="row align-items-center">
                                  <div class="col-6">
                                    <h3 class="mb-0">Profile <?= @$user->nama?> </h3>
                                  </div>
                                  <div class="col-6 text-right">
                                    
                                  </div>
                                </div>
                              </div>
                              <div class="card-body">
                                <form method="POST" action="<?= base_url('profile/update/'.@$user->id_user.'/'.@$user->id_mhs)?>">
                                  <h6 class="heading-small text-muted mb-4">User information</h6>
                                  <div class="pl-lg-4">
                                    <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-username">NIM</label>
                                          <input type="text" id="input-username" name="nim" class="form-control" placeholder="NIM" value="<?= @$user->nim?>">
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-username">Nama</label>
                                          <input type="text" id="input-username" name="nama" class="form-control" placeholder="Nama" value="<?= @$user->nama?>">
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-email">Email</label>
                                          <input type="email" id="input-email" name="email" class="form-control" placeholder="Email" value="<?= @$user->email?>">
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-username">Jurusan</label>
                                          <select name="prodi_id" class="form-control">
                                            <option disabled selected> --- Pilih Prodi --- </option>
                                            <?php foreach($prodi as $row):?>
                                              <option <?= @$user->prodi_id == $row->id_prodi ? 'selected' : ''?> value="<?=$row->id_prodi?>"><?= $row->nama_prodi?></option>
                                            <?php endforeach;?>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-username">Agama</label>
                                          <select name="agama" class="form-control">
                                            <option disabled selected> --- Pilih Agama --- </option>
                                            <?php if(@$user->agama == 'islam'):?>
                                              <option value="islam" selected>Islam</option>
                                              <option value="kristen">Kristen</option>
                                              <option value="katolik">Katolik</option>
                                            <?php elseif(@$user->agama == 'kristen'):?>
                                              <option value="islam">Islam</option>
                                              <option value="kristen" selected>Kristen</option>
                                              <option value="katolik">Katolik</option>
                                            <?php elseif(@$user->agama == 'katolik'):?>
                                              <option value="islam">Islam</option>
                                              <option value="kristen">Kristen</option>
                                              <option value="katolik" selected>Katolik</option>
                                            <?php else:?>
                                              <option value="islam">Islam</option>
                                              <option value="kristen">Kristen</option>
                                              <option value="katolik">Katolik</option>
                                            <?php endif;?>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-username">Jenis Kelamin</label>
                                          <select name="jk" class="form-control">
                                            <option disabled selected> --- Pilih Jenis Kelamin --- </option>
                                            <?php if(@$user->jk == 'L'):?>
                                              <option value="L" selected>Laki-laki</option>
                                              <option value="P">Perempuan</option>
                                            <?php elseif(@$user->jk == 'P'):?>
                                              <option value="L">Laki-laki</option>
                                              <option value="P" selected>Perempuan</option>
                                            <?php else:?>
                                              <option value="L">Laki-laki</option>
                                              <option value="P">Perempuan</option>
                                            <?php endif;?>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-first-name">Tempat Lahir</label>
                                          <input type="text" id="input-first-name" name="tmp_lahir" class="form-control" placeholder="First name" value="<?= @$user->tmp_lahir?>">
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-last-name">Tanggal Lahir</label>
                                          <input type="date" id="input-last-name" name="tgl_lahir" class="form-control" placeholder="Last name" value="<?= @$user->tgl_lahir?>">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <hr class="my-4" />
                                  <!-- Address -->
                                  <h6 class="heading-small text-muted mb-4">Contact information</h6>
                                  <div class="pl-lg-4">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-address">Alamat</label>
                                          <input id="input-address" name="alamat" class="form-control" placeholder="Home Address" value="<?= @$user->alamat?>" type="text">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <hr class="my-4" />
                                  <button type="submit" class="btn btn-md btn-primary">Save Change</button>
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
   
  </div>