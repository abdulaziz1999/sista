
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title><?= $title;?></title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard/index.html" />
  <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
  <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
  <meta property="og:site_name" content="Creative Tim" />
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url()?>assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= base_url()?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="<?= base_url()?>assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendor/sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendor/quill/dist/quill.core.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendor/animate.css/animate.min.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url()?>assets/css/argon.min9f1e.css?v=1.1.0" type="text/css">

</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="dashboard.html">
          <img src="<?= base_url()?>assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?= $this->uri->segment(1) == 'dashboard' ? 'active' : ''?>" href="<?= base_url('dashboard')?>" >
                <i class="ni ni-shop text-warning"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $this->uri->segment(1) == 'dosen' || $this->uri->segment(1) == 'prodi' || $this->uri->segment(1) == 'mahasiswa' ? 'active' : ''?>" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-folder-17 text-blue"></i>
                <span class="nav-link-text">Master Data</span>
              </a>
              <div class="collapse <?= $this->uri->segment(1) == 'dosen' || $this->uri->segment(1) == 'prodi' || $this->uri->segment(1) == 'mahasiswa' ? 'show' : ''?>"" id="navbar-tables">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?= base_url('dosen')?>" class="nav-link <?= $this->uri->segment(1) == 'dosen' ? 'active' : ''?>">Dosen</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('mahasiswa')?>" class="nav-link <?= $this->uri->segment(1) == 'mahasiswa' ? 'active' : ''?>">Mahasiswa</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('prodi')?>" class="nav-link <?= $this->uri->segment(1) == 'prodi' ? 'active' : ''?>">Prodi</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $this->uri->segment(1) == 'df_seminar' ? 'active' : ''?>" href="<?= base_url('df_seminar')?>">
                <i class="ni ni-archive-2 text-green"></i>
                <span class="nav-link-text">Daftar Seminar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $this->uri->segment(1) == 'user' ? 'active' : ''?>" href="<?= base_url('user')?>">
                <i class="ni ni-single-02 text-info"></i>
                <span class="nav-link-text">User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $this->uri->segment(1) == 'berita_adm' ? 'active' : ''?>" href="<?= base_url('berita_adm')?>">
                <i class="ni ni-single-copy-04 text-yellow"></i>
                <span class="nav-link-text">Berita</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('login/logout')?>">
                <i class="ni ni-user-run text-red"></i>
                <span class="nav-link-text">Keluar</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <marquee behavior="alternate" direction="right"><h1 class="display-4 text-white font-weight-bold">Sistem Informasi Seminar Tugas Akhir</h1></marquee>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>       
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?= base_url()?>assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?= $this->session->userdata('nama')?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="<?= base_url('profile')?>" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Profile</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url('login/logout')?>" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <?= $contents?>
    
  </div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url()?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url()?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?= base_url()?>assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="<?= base_url()?>assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url()?>assets/js/argon.min9f1e.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?= base_url()?>assets/js/demo.min.js"></script>

    <?php if($this->uri->segment(1) == 'df_seminar'):?>
      <script>
        function showDataEdit(id){
                    $.ajax({
                        url: "<?=site_url('df_seminar/dataEdit');?>",
                        type: "POST",
                        data: {id: id},
                        dataType: "html",
                        beforeSend:function(){
                        $('#data_edit').html("<img style='margin-left:240px' src='<?=base_url()?>assets/img/icons/loader.gif'>");
                  },
                        success: function (response) {
                            $('#data_edit').empty();
                            $('#data_edit').append(response);
                        }
                    });
                }
          function deleteSeminar(id){
                      r = confirm("Anda Yakin Ingin Menghapus");
                      if (r == true) {
                        window.location="<?=site_url('df_seminar/delete/')?>"+id;
                      } else {
                        return false;
                      }
                      
                }

          function dataEditPeserta(id) 
                {
                    $.ajax({
                        url: "<?=site_url('df_seminar/dataEditPeserta');?>",
                        type: "POST",
                        data: {id: id},
                        dataType: "html",
                        beforeSend:function(){
                        $('#data_edit').html("<img style='margin-left:240px' src='<?=base_url()?>assets/img/icons/loader.gif'>");
                  },
                        success: function (response) {
                            $('#data_edit').empty();
                            $('#data_edit').append(response);
                        }
                    });
                }
          function deletePeserta(id){
                      r = confirm("Anda Yakin Ingin Menghapus");
                      if (r == true) {
                        window.location="<?=site_url('df_seminar/deletePeserta/')?>"+id;
                      } else {
                        return false;
                      }
                      
                }
      </script>
    <?php endif;?>

    <?php if($this->uri->segment(1) == 'berita_adm'):?>
      <script>
        function showBeritaEdit(id){
                    $.ajax({
                        url: "<?=site_url('berita_adm/dataEdit');?>",
                        type: "POST",
                        data: {id: id},
                        dataType: "html",
                        beforeSend:function(){
                        $('#data_edit').html("<img style='margin-left:240px' src='<?=base_url()?>assets/img/icons/loader.gif'>");
                  },
                        success: function (response) {
                            $('#data_edit').empty();
                            $('#data_edit').append(response);
                        }
                    });
                }
          function deleteBerita(id){
                      r = confirm("Anda Yakin Ingin Menghapus");
                      if (r == true) {
                        window.location="<?=site_url('berita_adm/delete/')?>"+id;
                      } else {
                        return false;
                      }
                      
                }
      </script>
    <?php endif;?>

    <?php if($this->uri->segment(1) == 'dosen'):?>
      <script>
        function showDosenEdit(id){
                    $.ajax({
                        url: "<?=site_url('dosen/dataEdit');?>",
                        type: "POST",
                        data: {id: id},
                        dataType: "html",
                        beforeSend:function(){
                        $('#data_edit').html("<img style='margin-left:240px' src='<?=base_url()?>assets/img/icons/loader.gif'>");
                  },
                        success: function (response) {
                            $('#data_edit').empty();
                            $('#data_edit').append(response);
                        }
                    });
                }
          function deleteDosen(id){
                      r = confirm("Anda Yakin Ingin Menghapus");
                      if (r == true) {
                        window.location="<?=site_url('dosen/delete/')?>"+id;
                      } else {
                        return false;
                      }
                      
                }
      </script>
    <?php endif;?>

    <?php if($this->uri->segment(1) == 'prodi'):?>
      <script>
        function showProdiEdit(id){
                    $.ajax({
                        url: "<?=site_url('prodi/dataEdit');?>",
                        type: "POST",
                        data: {id: id},
                        dataType: "html",
                        beforeSend:function(){
                        $('#data_edit').html("<img style='margin-left:240px' src='<?=base_url()?>assets/img/icons/loader.gif'>");
                  },
                        success: function (response) {
                            $('#data_edit').empty();
                            $('#data_edit').append(response);
                        }
                    });
                }
          function deleteProdi(id){
                      r = confirm("Anda Yakin Ingin Menghapus");
                      if (r == true) {
                        window.location="<?=site_url('prodi/delete/')?>"+id;
                        $.notify("<i class='ni ni-notification-70'></i> Data Berhasil dihapus",{ type: "danger"});
                      } else {
                        return false;
                      }
                      
                }
      </script>
    <?php endif;?>

    <?php if($this->uri->segment(1) == 'mahasiswa'):?>
      <script>
        function showMahasiswaEdit(id){
                    $.ajax({
                        url: "<?=site_url('mahasiswa/dataEdit');?>",
                        type: "POST",
                        data: {id: id},
                        dataType: "html",
                        beforeSend:function(){
                        $('#data_edit').html("<img style='margin-left:240px' src='<?=base_url()?>assets/img/icons/loader.gif'>");
                  },
                        success: function (response) {
                            $('#data_edit').empty();
                            $('#data_edit').append(response);
                        }
                    });
                }
          function deleteMahasiswa(id){
                      r = confirm("Anda Yakin Ingin Menghapus");
                      if (r == true) {
                        window.location="<?=site_url('mahasiswa/delete/')?>"+id;
                      } else {
                        return false;
                      }
                      
                }
      </script>
    <?php endif;?>

    <?php if($this->uri->segment(1) == 'user'):?>
      <script>
        function showUserEdit(id){
                    $.ajax({
                        url: "<?=site_url('user/dataEdit');?>",
                        type: "POST",
                        data: {id: id},
                        dataType: "html",
                        beforeSend:function(){
                        $('#data_edit').html("<img style='margin-left:240px' src='<?=base_url()?>assets/img/icons/loader.gif'>");
                  },
                        success: function (response) {
                            $('#data_edit').empty();
                            $('#data_edit').append(response);
                        }
                    });
                }
          function deleteUser(id){
                      r = confirm("Anda Yakin Ingin Menghapus");
                      if (r == true) {
                        window.location="<?=site_url('user/delete/')?>"+id;
                      } else {
                        return false;
                      }
                      
                }
      </script>
    <?php endif;?>
    
    <script>
    <?php 
    $sukses = $this->session->flashdata('sukses'); 
    $hapus  = $this->session->flashdata('hapus'); 
    $update = $this->session->flashdata('update'); 
    if($sukses):?>
      $.notify("<i class='ni ni-notification-70'></i> Data Berhasil Ditambahkan",{ type: "success"});
    <?php elseif($hapus):?>
      $.notify("<i class='ni ni-notification-70'></i> Data Berhasil Dihapus",{ type: "danger"});
    <?php elseif($update):?>
      $.notify("<i class='ni ni-notification-70'></i> Data Berhasil Update",{ type: "info"});
    <?php endif;?>
    </script>

</body>

</html>