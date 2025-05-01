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

      <h1 class="logo me-auto"><a href="index.php">Creative Scrapyard</a></h1>
     
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Creative Scrapyard</h1>
          <h2>Unlock boundless creativity by exploring a digital scrapyard where discarded ideas find new life, inspiring innovation and collaboration in this unique online creative hub</h2>
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets_home/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

   

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Transforming scraps into art: Explore limitless creativity at the Creative Scrapyard
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Rediscovering the beauty in discarded ideas and fostering creativity without limits.</li>
              <li><i class="ri-check-double-line"></i> Belief in the power of repurposing and transforming forgotten fragments into art.</li>
              <li><i class="ri-check-double-line"></i> An online haven where creativity knows no bounds.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              At Creative Scrapyard, we reimagine discarded ideas, fostering boundless creativity in a dynamic digital space. Join us in crafting a vibrant tapestry of innovation, where every scrap tells a unique story.
            </p>
            <a href="#hero" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

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
                <p>Product Price : Rs. <?php echo $row['product_price']; ?></p>
              
              </div>
            </div>
          </div>
        <?php } ?>
          

        </div>

      </div>
    </section><!-- End Products Section -->    

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Explore commonly asked questions about Creative Scrapyard, from our mission and product range to sustainability practices and community involvement.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Can I contribute my own discarded ideas to the project? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Absolutely! We welcome and encourage contributions from individuals who want to breathe new life into their discarded ideas. Creative Scrapyard thrives on collaboration and the diverse range of creativity our community brings. If you have an idea or fragment you'd like to contribute, please reach out to us through our submission process, and let's work together to transform it into a unique piece of art within our dynamic and innovative space.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What types of products are available at Creative Scrapyard? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Creative Scrapyard offers a diverse array of repurposed treasures that showcase the boundless possibilities of discarded ideas. Our product range includes unique art pieces, home decor items, accessories, and more. Each item is a one-of-a-kind creation, blending creativity with sustainability. From upcycled furniture to imaginative sculptures, our collection is constantly evolving, reflecting the dynamic nature of our creative process. Explore our virtual aisles to discover the extraordinary and unexpected in every repurposed creation at Creative Scrapyard.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">How do you ensure sustainability in the creative process? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  We ensure sustainability by repurposing discarded ideas and materials, embracing eco-friendly practices, and minimizing environmental impact in our creative process at Creative Scrapyard.
                </p>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Get in touch with Creative Scrapyard! Whether you have inquiries, collaboration ideas, or just want to share your creative sparks, our team is here and eager to connect. Reach out through our contact form, and let's start a conversation fueled by innovation and imagination.</p>
        </div>
		<div class="row">
		<div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>R.C.Patel institute of Technology,shirpur</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7496.969473500487!2d73.84103177919079!3d20.030129188709957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddea68870d56c7%3A0xdcdd72fe89fc2e94!2sMET%20Bhujbal%20Knowledge%20City!5e0!3m2!1sen!2sin!4v1708604801714!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="contact.php" method="post" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <button type="submit" name="submit" id="submit">Send Message</button>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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