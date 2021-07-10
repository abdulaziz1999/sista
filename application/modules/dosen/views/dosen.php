<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?= site_url('dashboard')?>"><i class="fas fa-home"></i> Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dosen</li>
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
                    <th>Nama Dosen</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($dosen as $row):?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $row->nama_dosen?></td>
                      <td>
                          <button type="button" class="btn btn-sm btn-success ml-1" data-toggle="modal" data-target="#edit" onclick="showDosenEdit(<?= $row->id_dosen?>)"><i class="ni ni-ruler-pencil"></i>&nbsp; Edit</button>
                          <button type="button" class="btn btn-sm btn-danger ml-1" onclick="deleteDosen(<?= $row->id_dosen?>)"><i class="fas fa-trash"></i>&nbsp; Delete</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Form </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <div class="card">
                <div class="card-body">
                  <form method="POST" action="<?= base_url('dosen/create')?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Nama Dosen</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="nama_dosen" placeholder="Nama Dosen" type="text" required autocomplete="off">
                              </div>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Tambah</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Form Edit </h5>
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


    