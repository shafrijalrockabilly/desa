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
  
   <!-- Main content -->
   <div class="main-content">
     <!-- Header -->
     <div class="header bg-primary pt-5 pb-7">
       <div class="container">
         <div class="header-body">
    
     <section class="py-6 pb-9 bg-default">
       <div class="row justify-content-center text-center">
         <div class="col-md-6">
           <h2 class="display-3 text-white">Edit Struktur</h3>
           <form method="post" action="<?= base_url('proses_edit_struktur_desa') ?>" enctype="multipart/form-data">
    <div class="mb-2">
        <label class="form-label">NIK</label>
        <input type="text" name="nik" class="form-control" value="<?= $struktur->nik ?>" readonly required>
    </div>
    <div class="mb-2">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?= $struktur->nama ?>" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Jabatan</label>
        <textarea class="form-control" name="jabatan" required><?= $struktur->jabatan ?></textarea>
    </div>
    <div class="mb-2">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?= $struktur->alamat ?>" required>
    </div><br>
    <div class="mb-2">
        <a href="<?= base_url('struktur_desa') ?>" class="btn btn-primary btn-sm mr-3">Kembali</a>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </div>
</form>
      </div>
         </div>
       </div>
     </section>
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