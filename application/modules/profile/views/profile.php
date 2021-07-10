<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?= base_url()?>assets/img/brand/white.png); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-primary opacity-9"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-12 col-md-10">
            <h1 class="display-2 text-white">Hello <?= $this->session->userdata('nama')?></h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--9">
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
                    <?= $user->nama?><span class="font-weight-light"></span>
                  </h5>
                  <div class="h5 font-weight-300">
                    <i class="ni location_pin mr-2"></i><?= $user->level?>
                  </div>
                  <div class="h5 mt-4">
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
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <div class="col-6 text-right">
                  <!-- <a href="#!" class="btn btn-sm btn-primary">Detail event</a> -->
                </div>
              </div>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('profile/update/'.$user->id_user)?>">
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                    <div class="row">

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Nama</label>
                          <input type="text" id="input-username" name="nama" class="form-control" placeholder="Nama" value="<?= $user->nama?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Email</label>
                          <input type="email" id="input-email" name="email" class="form-control" placeholder="Email" value="<?= $user->email?>">
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

      <!-- Modal Tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <div class="card">
                <div class="card-body">
                  <form method="POST" action="<?= base_url('user/create')?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Nama</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="nama" placeholder="Nama" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Email</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="email" placeholder="Email" type="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Level</label>
                              <div class="input-group input-group-merge">
                                <select name="level" class="form-control">
                                  <option disabled selected> --- Pilih Level --- </option>
                                    <option value="mahasiswa">Mahasiswa</option>
                                    <option value="admin">Admin</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Status</label>
                              <div class="input-group input-group-merge">
                                <select name="status" class="form-control">
                                  <option disabled selected> --- Pilih Status --- </option>
                                    <option value="N">inactive</option>
                                    <option value="Y">active</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Password</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="password" placeholder="Password" type="password">
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
            <h5 class="modal-title" id="exampleModalLabel">Form Edit User</h5>
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

    
    