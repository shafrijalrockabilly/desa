 
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

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Dashboard | Admin</title>
  <!-- Favicon -->
  <link rel="icon" href=" <?= base_url('assets/img/brand/favicon.png') ?>" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/nucleo/css/nucleo.css') ?>" type="text/css">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') ?>" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href=" <?= base_url('assets/css/argon.css?v=1.1.0') ?>" type="text/css">
</head>



<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" >
          <!-- PNG -->
          <img src="assets/img/panembahan.png" >
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
              <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
              <div class="collapse show" id="navbar-dashboards">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?= base_url('dashboards')?>" class="nav-link">Dashboard</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Beranda</span>
              </a>
              <div class="collapse" id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?= base_url('home')?>" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('sejarah')?>" class="nav-link">Sejarah</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('visimisi')?>" class="nav-link">Visi Misi</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('struktur_desa')?>" class="nav-link">Struktur Desa</a>
                  </li>
                  <li class="nav-item">
                  <a href="<?= base_url('rtrw')?>" class="nav-link">RT/RW</a>
                  </li>
                </ul>
              </div>
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
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <!--  -->
          <ul class="navbar-nav align-items-center ml-md-auto">
           
            <li class="nav-item dropdown">
              <a class="nav-link" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
                <div class="row shortcuts px-4">
                  <a href="<?= base_url('home')?>" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="fa fa-home"></i>
                    </span>
                    <small>Home</small>
                  </a>
                  <a href="<?= base_url('sejarah')?>" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                    <i class="fa fa-book"></i>
                    </span>
                    <small>Sejarah</small>
                  </a>
                  <a href="<?= base_url('visimisi')?>" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                    <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                    </span>
                    <small>Visi Misi</small>
                  </a>
                  <a href="<?= base_url('struktur_desa')?>" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="fa fa-users"></i>
                    </span>
                    <small>Struktur Desa</small>
                  </a>
                  <a href="<?= base_url('rtrw')?>" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="fa fa-users"></i>
                    </span>
                    <small>Struktur RT RW </small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?= base_url('assets/img/theme/i.jpg') ?>">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?= (session()->admin_nama) ? session()->admin_nama : ""?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="<?= base_url('logout')?>" class="dropdown-item">
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
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
            
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?= base_url('home')?>" class="nav-link"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url('dashboards')?>">Dashboard</a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
           
            </div>
          </div>
          <!-- Card stats -->
       <!-- Main content -->
   <div class="main-content">
     <!-- Header -->
     <div class="header bg-primary pt-5 pb-7">
       <div class="container">
         <div class="header-body">
    
     <section class="py-6 pb-9 bg-default">
       <div class="row justify-content-center text-center">
         <div class="col-md-6">
           <h2 class="display-3 text-white">Selamat Datang Di Desa Panembahan</h3>
           <?php
           foreach ($rows as $row) :
           ?>
             <p class="lead text-white">
             <?= $row->home ?>
             </p>
             <br>
             <?php
      endforeach;
      ?>
         </div>
       </div>
     </section>
   </div>
   <!-- Footer -->
   <footer class="py-5" id="footer-main">
     <div class="container">
       <div class="row align-items-center justify-content-xl-between">
         <div class="col-xl-6">
           <div class="copyright text-center text-xl-left text-muted text-white">
             &copy; 2023 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
           </div>
         </div>
         <div class="col-xl-6">
           <ul class="nav nav-footer justify-content-center justify-content-xl-end">
             <li class="nav-item">
               <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Instagram</a>
             </li>
             <li class="nav-item">
               <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">Facebook</a>
             </li>
             <li class="nav-item">
               <a href="http://blog.creative-tim.com" class="nav-link text-white" target="_blank">Twitter</a>
             </li>
             <li class="nav-item">
               <a href="https://www.creative-tim.com/license" class="nav-link text-white" target="_blank">Tiktok</a>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url('assets/vendor/jquery/dist/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/js-cookie/js.cookie.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') ?>"></script>
  <!-- Optional JS -->
  <script src="<?= base_url('assets/vendor/chart.js/dist/Chart.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/chart.js/dist/Chart.extension.js') ?>"></script>
  <!-- Argon JS -->
  <script src="<?= base_url('assets/js/argon.js?v=1.1.0') ?>"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?= base_url('assets/js/demo.min.js') ?>"></script>
</body>

</html>