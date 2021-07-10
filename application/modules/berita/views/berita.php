<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary pt-5 pb-5">
      <div class="container">
        <div class="header-body">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <div class="pr-5">
              <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-sm-9">
                      <h2 class="display-4 text-white font-weight-bold">Sistem Informasi Seminar Tugas Akhir</h2>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                      <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item "><a href="<?= base_url()?>" ><i class="fas fa-home"></i> Home</a></li>
                          <li class="breadcrumb-item active text-green" aria-current="page">Berita</li>
                        </ol>
                      </nav>
                    </div>
                  </div>
                  <section class="section section-lg pt-lg-7 mt--3">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-lg-12">
                          <div class="row">
                          <?php $no=1; foreach($berita as $row):?>
                            <div class="col-lg-4">
                              <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-5">
                                  <div class="icon icon-shape bg-gradient-primary text-white rounded-circle mb-4">
                                    <i class="ni ni-check-bold"></i>
                                  </div><strong> BERITA SISTA</strong>
                                  <h4 class="h3 text-primary text-uppercase"><?= $row->jd_berita?></h4>
                                  <p class="description mt-3"><?= substr($row->isi_berita,0,80)?>........</p>
                                  <div class="text-right">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"onclick="showDataEdit(<?= $row->id_berita?>)" data-target="#edit">detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php endforeach;?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
   
  </div>

  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail berita </h5>
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