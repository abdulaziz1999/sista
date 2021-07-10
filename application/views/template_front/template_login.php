<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
 <!DOCTYPE html>
<html>

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title><?= $title?></title>
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
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url()?>assets/css/argon.min9f1e.css?v=1.1.0" type="text/css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendor/animate.css/animate.min.css">

</head>

<body class="bg-default">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('home')?>">
        <img src="<?= base_url()?>assets/img/brand/white.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="<?= base_url('home')?>">
                <img src="<?= base_url()?>assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="<?= base_url()?>" class="nav-link">
              <span class="nav-link-inner--text">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('jadwal')?>" class="nav-link">
              <span class="nav-link-inner--text">Jadwal</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('seminar')?>" class="nav-link">
              <span class="nav-link-inner--text">Daftar Seminar</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('berita')?>" class="nav-link">
              <span class="nav-link-inner--text">Berita</span>
            </a>
          </li>
            </ul>
            <hr class="d-lg-none" />
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item d-none d-lg-block ml-lg-4">
                <a href="<?= site_url('login')?>" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                </span>
                <span class="nav-link-inner--text">Login</span>
                </a>
            </li>
            </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <?= $contents?>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; <?= date('Y')?> <a href="https://www.creative-tim.com/" class="font-weight-bold ml-1" target="_blank">SISTA</a>
          </div>
        </div>
        <div class="col-xl-6">
          
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url()?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url()?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url()?>assets/js/argon.min9f1e.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?= base_url()?>assets/js/demo.min.js"></script>
  <script>
  $(document).ready(function(){		
        $('.custom-control-input').click(function(){
          if($(this).is(':checked')){
            $('#pas').attr('type','text');
          }else{
            $('#pas').attr('type','password');
          }
        });
      });
  </script>
    <script>
    <?php 
    $sukses     = $this->session->flashdata('sukses'); 
    $login      = $this->session->flashdata('logindulu'); 
    $erorlogin  = $this->session->flashdata('gagallogin'); 
    $blmactive  = $this->session->flashdata('blmactive'); 
    if($sukses):?>
      $.notify("<i class='ni ni-notification-70'></i> Registrasi berhasil tunggu verifikasi admin",{ type: "success"});
    <?php elseif($login):?>
      $.notify("<i class='ni ni-notification-70'></i> Silahkan login terlebih dahulu ",{ type: "warning"});
    <?php elseif($erorlogin):?>
      $.notify("<i class='ni ni-notification-70'></i> Username dan Password Tidak Sesuai, Coba Lagi ",{ type: "warning"});
    <?php elseif($blmactive):?>
      $.notify("<i class='ni ni-notification-70'></i> Akun Anda belum diverifikasi admin",{ type: "warning"});
    <?php endif;?>
    </script>
</body>

</html>