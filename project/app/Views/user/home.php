<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Panembahan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/p.png" rel="icon">
  <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.html">Desa Panembahan</a></h1>
    
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2> <?php
           foreach ($rows1 as $row) :
           ?>
             <p class="lead text-white col-8">
             <?= nl2br($row->home) ?>
             </p>
             <br>
             <?php
      endforeach;
      ?>
             
      <br>
      <div>
      <?php
           foreach ($rows1 as $row) :
           ?>
            <?php
      endforeach;
      ?></h2>
 
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Beranda</a></li>
          <li><a class="nav-link" href="#sejarah">Sejarah</a></li>
          <li><a class="nav-link" href="#visimisi">Visi Misi</a></li>
          <li><a class="nav-link" href="#struktur">Struktur</a></li>
          <li><a class="nav-link" href="#rtrw">RT/RW</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="https://www.instagram.com/shafrijaal/" class="twitter"><i class="bi bi-twitter-x"></i></i></a>
        <a href="https://www.instagram.com/shafrijaal/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/shafrijaal/" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="sejarah" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>Sejarah</h2>
        <p>Sejarah Desa</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="pt-4 pt-lg-0 content" data-aos="fade-left">
        <h2 class="display-3 text-white text-center">SEJARAH</h2>
           <?php
           foreach ($rows2 as $row) :
           ?>
             <p class="lead text-white">
             <?= $row->sejarah ?>
             </p>
             <br>
             <?php
      endforeach;
      ?>
      <br>
      <div>

      <br>
        </div>
      </div>

    </div><!-- End About Me -->

  </section><!-- End About Section -->

  <!-- ======= About Visi Misi ======= -->
  <section id="visimisi" class="about">

    <!-- ======= Visi Misi ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>Visi Misi</h2>
        <p>Visi Misi Desa</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="pt-4 pt-lg-0 content" data-aos="fade-left">
        <h2 class="display-3 text-white text-center">VISI MISI</h2>
           <?php
           foreach ($rows5 as $row) :
           ?>
             <p class="lead text-white">
             <?= $row->visimisi ?>
             </p>
             <br>
             <?php
      endforeach;
      ?>
      <br>
      <div>

      <br>
        </div>
      </div>

    </div><!-- End Visi Msisi -->

  </section><!-- End About Section -->


  <!-- ======= Resume Section ======= -->
  <section id="struktur" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Struktur</h2>
        <p>Struktur Pemerintahan Desa</p>
      </div>

      <div class="row">
        <div class="col-lg-15">
        <table class="table table-dark table-striped">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
  <?php
				$no = 0;
				foreach($rows3 as $row) :
					$no++;
				?>
			  <tr>
           <th class=""><?= $no ?></th>
           <td><?= $row->nik ?></td>
           <td><?= $row->nama ?></td>
           <td><?= $row->jabatan ?></td>
           <td><?= nl2br($row->alamat)?></td>
        </tr>
				<?php	
				endforeach;
				?>			
  </tbody>
</table>
<br><br><br><br>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="rtrw" class="services">
    <div class="container">

      <div class="section-title">
        <h2>RT RW</h2>
        <p>Kepala RT RW</p>
      </div>

      <div class="row">
      <div class="col-lg-15">
      <table class="table table-dark table-striped">
  <thead class="thead-light">
  <tr>
      <th class="" scope="col">No</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
  <?php
				$no = 0;
				foreach($rows4 as $row) :
					$no++;
				?>
			  <tr>
           <th class=""><?= $no ?></th>
           <td><?= $row->nik ?></td>
           <td><?= $row->nama ?></td>
           <td><?= $row->jabatan ?></td>
           <td><?= nl2br($row->alamat)?></td>
        </tr>
				<?php	
				endforeach;
				?>			
  </tbody>
</table>
<br><br><br>
      </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
 <!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Jl. Pembangunan II No.G31, Pekiringan, Kec. Kesambi, Kabupaten Cirebon, Jawa Barat 45153</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="https://www.instagram.com/shafrijaal/" class="twitter"><i class="bi bi-twitter-x"></i></i></a>
              <a href="https://www.instagram.com/shafrijaal/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/shafrijaal/" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>desakonoha@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>089 652 700 548</p>
          </div>
        </div>
      </div>

     

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->

  </div>

  <!-- Vendor JS Files -->
  <script src="assets2/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets2/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>

</body>

</html>