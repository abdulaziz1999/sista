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
                          <!-- <li class="breadcrumb-item"><a href="#">jadwal</a></li> -->
                          <li class="breadcrumb-item active text-green" aria-current="page">Jadwal</li>
                        </ol>
                      </nav>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h3 class="mb-0">Jadwal Seminar Tugas Akhir</h3>
                    </div>
                    <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-basic">
                      <thead class="thead-light">
                        <tr>
                          <th>No</th>
                          <th>NIM</th>
                          <th>Mahasiswa/i</th>
                          <th>Seminar</th>
                          <th>Waktu</th>
                          <th>Ruangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; foreach($daftar_seminar as $row):?>
                          <tr>
                            <td><?= $no++?></td>
                            <td><?= $row->nim?></td>
                            <td><a href="<?= site_url('jadwal/detail/'.$row->id_df_seminar)?>"><?= $row->nama?></a></td>
                            <td><?= $row->nama_seminar?></td>
                            <td><?= $row->jam_seminar."  ".date('d-m-Y',strtotime($row->tgl_seminar))?></td>
                            <td><?= $row->ruang?></td>
                          </tr>
                          
                        <?php endforeach;?>
                      </tbody>
                    </table>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
   
  </div>