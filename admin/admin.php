<!DOCTYPE html>
<html lang="en">
<?php require_once("../display_contact.php"); 
include_once('../config/checkadmin.php');
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HOME | ZHAZHA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- =======================================================
  * Template Name: BizLand - v3.3.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    button {
      width: 100%;
      border-radius : 20px;
      padding: 10px;
      border: none;
      background: #1c87c9; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #659EC7;
      }  

    #hero {
      width: 100%;
      height: 75vh;
      background: url("../assets/img/wedding.jpg") top left;
      background-size: cover;
      position: relative;
    }
    .collapsible {
      background-color: #87CEEB;
      color: black;
      cursor: pointer;
      padding: 16px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
    }

    .collapsible:hover {
      background-color: #659EC7;
    }
      
    .collapsible:after {
      content: '\002B' ;
      color: black;
      font-weight: bold;
      float: right;
      margin-left: 5px;
    }

    /*.active:after {
      content: "\2212";
      
    }*/

    .content1 { 
      padding :0 20px; 
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.2s ease-out;
      background-color: #F5FFFA;
      
    }
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="mailto: <?php echo $email ?>"> <?php echo $email ?>   </a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>  <a href="callto: <?php echo $phone ?>"> <?php echo $phone ?>   </a>  </span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
      <a href="#" class="twitter"><i class="bi bi-whatsapp"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="instagram"><i class="bi bi-envelope"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="admin.php">ZHAZHA<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="../assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="adminregister.php">Add new account</a></li>
          <li><a class="nav-link scrollto" href="../logout.php">Log out</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>ZHA ZHA</span></h1>
      <h2>We are SECV students who finally finish this project within 2 weeks</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span>About Us</span></h3>
        
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <img src="../assets/img/couple.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>We're glad you're here</h3>
            <p class="fst-italic">
            Oh hey!  You've found the one person you want to spend the rest of your life with? The greatest love and your true best friend? Sweet! We would love to celebrate with you! We are Julia & Gil, photographers of people in love. We’ve been in business for 7 years and we are doing this worldwide. Our photos are all about capturing the connection between two people in love. Atmospheric, lively and honest. Just drop us a line and tell us about yourselves & your plans. We’re looking forward to hearing from you!
            </p>
            <ul>
              
              <li>
                <a href="#portfolio" title="portfolio"><i class="bx bx-images"></i></a>
                <div>
                  <h5>Instead of talking a lot about ourselves, we prefer to let our photos speak for themselves. If you like our style, let’s get the conversation started!</h5>
                  
                </div>
              </li>
            </ul>
            <p>
            If you are interested in having <i>ZHAZHA</i> document your wedding day, please fill out the contact form and we will respond as soon as possible.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Customer Feedback</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  WOW! Amazing service by ZHA ZHA team! Well done!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Customer Feedback</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  A very professional team at photography!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Customer Feedback</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Love it so much! A great team and creadivity!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Customer Feedback</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Incredible photography skill, my family love it so much! Thank you ZHA ZHA!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Customer Feedback</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Excellent services provided by ZHA ZHA team! Nice work!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
    <?php include("portfolio.php"); ?>
     
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <?php include("teamsection.php"); ?>
      
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
    <?php include("pricing.php"); ?>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
    <?php
    include("qna_section.php")
    ?>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
   

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span> <a href="update_contact.php" title="Edit Contact"><img alt="edit icon" src="../assets/icon/pencil.png" width="30" height="30"></a>
          </h3>

          <?php
              
              echo $description;

          ?>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <?php
              
              echo $address;

              ?>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <?php
              
              echo $email;

              ?>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <?php
              
              echo $phone;

              ?>
            </div>
          </div>

        </div>




        <!-- <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=utm%20johor+(My%20Business%20Name)&amp;t=k&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="600" frameborder="0"></iframe><a href="https://www.maps.ie/draw-radius-circle-map/">Measure km radius</a></div> -->



        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php echo $city ?>%20<?php echo $state ?>+(My%20Business%20Name)&amp;t=k&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="send_message.php" name="leave a message" method="POST" role="form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required> <br>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required> <br>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required> <br>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" col="50" placeholder="Message" required></textarea> <br>
              </div>
              <div ><button type="submit" name="submit">Send Message</button></div>
              
            </form>
            <a href="view_message.php"><img alt="edit icon" src="../assets/icon/view.png" width="40" height="35">View Message</a>
          </div>

          <!-- view Message -->
          

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ZHAZHA<span>.</span></h3>
            <p>
              <?php echo $no_street ?>  <br>
              <?php echo $city ?> <br>
              <?php echo $state ?>  <br><br>
              <strong>Phone:</strong> <a href="callto: <?php echo $phone ?>"> <?php echo $phone ?>   </a><br>
              <strong>Email:</strong> <a href="mailto: <?php echo $email ?>"> <?php echo $email ?>   </a><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Wedding Photography</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Wedding Film</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Couple Photography</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Family Photography</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Maternity Photography</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Find us on</p>
            <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bi bi-whatsapp"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="instagram"><i class="bi bi-envelope"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>ZHAZHA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">ZHAZHA</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>