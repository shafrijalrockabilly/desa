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
   <title>Desa Panembahan | Admin</title>
   <!-- Favicon -->
   <link rel="icon" href="./assets/img/brand/favicon.png" type="image/png">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href="<?= base_url('assets/vendor/nucleo/css/nucleo.css') ?>" type="text/css">
   <link rel="stylesheet" href="<?= base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') ?>" type="text/css">
   <!-- Page plugins -->
   <!-- Argon CSS -->
   <link rel="stylesheet" href="<?= base_url('assets/css/argon.css?v=1.1.0') ?>" type="text/css">
 </head>

 <body>
   <!-- Navabr -->
   <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-primary">
     <div class="container">
       <a class="navbar-brand" href="./pages/dashboards/dashboard.html">
         
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
         <div class="navbar-collapse-header">
           <div class="row">
             <div class="col-6 collapse-brand">
               <a href="./pages/dashboards/dashboard.html">
                 <img src="./assets/img/brand/blue.png">
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
             <a href="<?= base_url('dashboards')?>" class="nav-link">
               <span class="nav-link-inner--text">Dashboard</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url('home')?>"  class="nav-link">
               <span class="nav-link-inner--text">Home</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url('sejarah')?>" class="nav-link">
               <span class="nav-link-inner--text">Sejarah</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url('visimisi')?>" class="nav-link">
               <span class="nav-link-inner--text">Visi Misi</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url('struktur_desa')?>" class="nav-link">
               <span class="nav-link-inner--text">Struktur</span>
             </a>
           </li>
           <li class="nav-item">
           <a href="<?= base_url('rtrw')?>" class="nav-link">
               <span class="nav-link-inner--text">RT/RW</span>
             </a>
           </li>
         </ul>
         <hr class="d-lg-none" />
         <ul class="navbar-nav align-items-lg-center ml-lg-auto">
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Facebook">
               <i class="fab fa-facebook-square"></i>
               <span class="nav-link-inner--text d-lg-none">Facebook</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">
               <i class="fab fa-instagram"></i>
               <span class="nav-link-inner--text d-lg-none">Instagram</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
               <i class="fab fa-twitter-square"></i>
               <span class="nav-link-inner--text d-lg-none">Twitter</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="" data-original-title="Star us on Github">
               <i class="fab fa-github"></i>
               <span class="nav-link-inner--text d-lg-none">Github</span>
             </a>
           </li>
           
         </ul>
       </div>
     </div>
   </nav>
   <!-- Main content -->
   <div class="main-content">
     <!-- Header -->
     <div class="header bg-primary pt-5 pb-7">
       <div class="container">
         <div class="header-body">
    
     <section class="py-9 pb-9 bg-default">
       <div class="row justify-content-center text-center">
         <div class="col-md-6">
           <h2 class="display-3 text-white text-center">SEJARAH</h3>
           <?php
           foreach ($rows as $row) :
           ?>
             <p class="lead text-white">
             <?= $row->sejarah ?>
             </p>
             <br>
             <div>
            <a href="<?= base_url('sejarah/'.$row->id.'/edit') ?>" class="btn btn-outline-success btn-sm">
              Edit
            </a>
            <a href="<?= base_url('sejarah/'.$row->id.'/hapus') ?>" class="btn btn-outline-danger btn-sm"
            onclick="return confirm('Yakin hapus <?= $row->sejarah ?>.?')">
              Hapus
            </a>
          </div>
             <?php
      endforeach;
      ?>
             <div class="mb-2 mt-3">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate">Tambah Keterangan</button>
			</div>
      <br>
      
         </div>
       </div>
     </section>
   </div>

   <!-- Modal Tambah-->
<div class="modal fade" id="modalCreate">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form method="post" class="proses_tambah_sejarah" action="<?= base_url("proses_tambah_sejarah")?>" enctype="multipart/form-data">
            <div class="modal-body">
                <label>Masukan Sejarah</label>
                <div class="form-group">
                    <textarea type="text" class="form-control" name="sejarah" placeholder="Masukkan Sejarah"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

   <!-- Footer -->
   <footer class="py-5" id="footer-main">
     <div class="container">
       <div class="row align-items-center justify-content-xl-between">
         <div class="col-xl-6">
           <div class="copyright text-center text-xl-left text-muted">
             &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
           </div>
         </div>
         <div class="col-xl-6">
           <ul class="nav nav-footer justify-content-center justify-content-xl-end">
             <li class="nav-item">
               <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
             </li>
             <li class="nav-item">
               <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
             </li>
             <li class="nav-item">
               <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
             </li>
             <li class="nav-item">
               <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </footer>
   <!-- Argon Scripts -->
   <!-- Core -->
   <script src="<?= base_url('assets/vendor/jquery/dist/jquery.min.js') ?>"></script>
   <script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
   <script src="<?= base_url('assets/vendor/js-cookie/js.cookie.js') ?>"></script>
   <script src="<?= base_url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') ?>"></script>
   <script src=" <?= base_url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') ?>"></script>
   <!-- Optional JS -->
   <script src="<?= base_url('assets/vendor/onscreen/dist/on-screen.umd.min.js') ?>"></script>
   <!-- Argon JS -->
   <script src="<?= base_url('assets/js/argon.js?v=1.1.0') ?>"></script>
   <!-- Demo JS - remove this in your project -->
   <script src="<?= base_url('assets/js/demo.min.js') ?>"></script>
 </body>

 </html>