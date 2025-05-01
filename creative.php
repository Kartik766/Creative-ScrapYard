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
  <header id="header" class="fixed-top" style="background-color: >
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Creative Scrapyard</a></h1>
     
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="products.php">Products</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
		  <li><a class="getstarted scrollto" href="registration.php">Sign-up</a></li>
          <li><a class="getstarted scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Products</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Product Information</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="post" action="products1.php" enctype="multipart/form-data">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Product Name</label>
                  <input type="text" name="product_name" class="form-control" id="inputNanme4" placeholder="Enter Product Name">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Company name</label>
                  <input type="text" name="company_name" class="form-control" id="inputEmail4" placeholder="Enter Company Name">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Product Price</label>
                  <input type="number"  name="product_price" class="form-control" id="inputPassword4" placeholder="Enter Product Price">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Product Image</label>
                  <input type="file" name="product_img" class="form-control" id="inputAddress" >
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

         

        </div>
      </div>
    </section>

  </main><!-- End #main -->
 <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="products.php">Product</a></li>
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

  <!-- Template Main JS File -->
  <script src="assets_home/js/main.js"></script>

</body>

</html>