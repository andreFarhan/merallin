<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Merallin</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  
</head>

<body class="index-page">

<?php include 'header.php'; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div style="text-align: justify;" class="container col-lg-8">
            <h2 style="text-align: center;">TENTANG KAMI</h2>
            <p>PT. Merallin Sukses Abadi adalah perusahaan yang bergerak di bidang industri percetakan umum, catering/restoran, perdagangan grosir berbagai barang, serta penyewaan kendaraan seperti mobil, bus, dan truk.</p> 

            <p>Berlokasi di Kelapa Gading, Jakarta Utara, dengan izin usaha AHU-0047771.AH.01.01, kami hadir dengan komitmen tinggi untuk memberikan layanan terbaik yang turut berkontribusi dalam pertumbuhan ekonomi daerah dan nasional.</p> 

            <a href="about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
          <div style="text-align: justify;" class="container col-lg-8">
            <h2 style="text-align: center;">TENTANG PERUSAHAAN KAMI</h2>
            <p>PT. Merallin Sukses Abadi adalah perusahaan swasta nasional yang bergerak di bidang percetakan umum, catering/restoran, perdagangan grosir berbagai barang, serta penyewaan kendaraan seperti mobil, bus, dan truk.</p>

            <p>Berdiri resmi pada tahun 2023 dengan pengalaman sejak 2020, perusahaan ini lahir dari dedikasi dan tanggung jawab tinggi dalam memenuhi kebutuhan berbagai sektor bisnis.</p>

            <p>Kami tidak hanya menyediakan layanan, tetapi juga menawarkan solusi bernilai tambah mulai dari perencanaan hingga eksekusi proyek, dengan fokus pada harga, waktu pelaksanaan, dan kualitas hasil demi kepuasan pelanggan.</p>

            <a href="about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <?php include 'about-page.php'; ?>
    <!-- /About Section -->

    <!-- Services Section -->
    <?php include 'services-page.php'; ?>
    <!-- /Services Section -->

    <!-- Portfolio Section -->
    <?php include 'portfolio-page.php'; ?>
    <!-- /Portfolio Section -->

    <!-- Clients Section -->
    <?php include 'clients-page.php'; ?>
    <!-- /Clients Section -->

  </main>

  <?php include 'footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>