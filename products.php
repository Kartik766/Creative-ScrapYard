<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Creative Scrapyard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets_home/img/favicon.png" rel="icon">
  <link href="assets_home/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets_home/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets_home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets_home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets_home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets_home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets_home/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets_home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets_home/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Creative Scrapyard</a></h1>
     
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php">About</a></li>
          <li><a class="nav-link scrollto" href="products.php">Products</a></li>
          <li><a class="nav-link scrollto" href="index.php">Contact</a></li>
		  <li><a class="getstarted scrollto" href="registration.php">Sign-up</a></li>
          <li><a class="getstarted scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Creative Scrapyard</h1>
          <h2>Explore our handcrafted treasures at Creative Scrapyard, where discarded materials find new life as unique masterpieces. From whimsical sculptures to functional decor, each piece tells a story of sustainability and artistic innovation.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="index.php" class="btn-get-started scrollto">Get Started</a>
			</div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets_home/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

     <!-- ======= Products Section ======= -->
    <section id="products" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products</h2>
          <p>Discover our eclectic range of repurposed treasures at Creative Scrapyard – where each product is a unique fusion of creativity and sustainability, breathing new life into discarded fragments.</p>
        </div>

        <div class="row">


          <?php
            include("process\connection.php");
            $querry="Select * from product_info";
            $result=mysqli_query($conn,$querry);
            while($row=mysqli_fetch_assoc($result))
            {
              
            ?>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100" style="margin-bottom: 20px;">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="./assets/product/<?php echo $row['product_img']; ?>" class="img-fluid" alt="" style="height: 100px;width: 100px;"></div>
              <div class="member-info">
                <h4><?php echo $row['product_name']; ?></h4>
                <span><?php echo $row['company_name']; ?></span>
                <p>Product Price : <?php echo $row['product_price']; ?> Rs</p>
              
              </div>
            </div>
          </div>
        <?php } ?>
          

        </div>

      </div>
    </section><!-- End Products Section -->    

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="products.php">Products</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Follow us on social media for daily doses of creative inspiration and updates on unique repurposed creations at Creative Scrapyard!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span><a href="index.php">Creative Scrapyard</a></span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets_home/vendor/aos/aos.js"></script>
  <script src="assets_home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets_home/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets_home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets_home/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets_home/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets_home/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets_home/js/main.js"></script>

</body>

</html>