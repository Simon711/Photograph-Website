<?php

require_once('../config/db.php');
require_once("../display_contact.php");
include_once('../config/checkadmin.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>View Customer's Message | ZHAZHA</title>
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
  <link href="../assets/css/btnstyle.css" rel="stylesheet">

  <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    padding: 8px 0px;
  }

  tr:nth-child(even) {
  background-color:#e7feff;
}
 
  </style>
  <!-- =======================================================
  * Template Name: BizLand - v3.3.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
        <li><a class="nav-link scrollto" href="admin.php#about">About</a></li>
          <li><a class="nav-link scrollto " href="admin.php#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="admin.php#team">Team</a></li>
          <li><a class="nav-link scrollto" href="admin.php#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="admin.php#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="adminregister.php">Add New Account</a></li>
          <li><a class="nav-link scrollto" href="../logout.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>View Customer's Message</h2>
          <ol>
            <li><a href="admin.php">Home</a></li>
            <li>View Customer's Message</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <?php


if(isset($_POST["submit"])) {
  $_search = $_POST["date"];
?>

<section class="inner-page">
  <div class="container" style="background-color:#D0F0C0;">
  <br>
  <h2>Search by <?php echo "\"". $_search . "\""?> </h2>
  <table style="border=2">
    <tr>
      <th width="3%" scope="col">&nbspNo</th>
      <th width="7%" scope="col">&nbspName</th>
      <th width="20%" scope="col">&nbspEmail</th>
      <th width="20%" scope="col">&nbspSubject</th>
      <th width="35%" scope="col">&nbspMessage</th>
      <th width="10%" scope="col">&nbspReceived Date</th>
      <th width="5%" scope="col">&nbspDelete</th>
    </tr>

  <?php

  require_once("../config/db.php");

  $records = mysqli_query($conn,"select * from `finalproject`.`message` WHERE `date`='$_search' or `name`='$_search'"); // fetch data from database
  $i=1;
  while($data = mysqli_fetch_assoc($records))
  {
  ?>

    <tr>
      <td><?php echo "&nbsp" . $i; ?></td>
      <td><?php echo "&nbsp" . $data['name']; ?></td>
      <td><?php echo "&nbsp" . $data['email']; ?></td>
      <td><?php echo "&nbsp" . $data['subject']; ?></td> 
      <td><?php echo "&nbsp" . $data['message']; ?></td>
      <td><?php echo "&nbsp" . $data['date']; ?></td>
      <td><a href="remove_message.php?message=<?php echo $data['message']; ?>" onclick="return confirm('DO YOU CONFIRM TO DELETE? Y/N')">&nbspDelete</a></td>
    </tr>	
  

  <?php
  $i++;
  }
  ?>
  </table>
<br>

  
<form action="delete_selected_message.php" method="POST" class="container">
<label for="data"><h5>You can delete all these records</h5></label><br>
  <input style="background-color:pink;" type="text" id="data" name="data" value="<?php echo $_search ?>" readonly>
  <button style="width:100px; height:38px; background-color:red; border-radius:10px; color:white;" type="submit" name="delete_all_message" 
    onclick="return confirm('DO YOU CONFIRM TO DELETE? Y/N')">Delete All</button>
</form> 

    <br><br>
  </div>
  
</section>


<?php   
}
?>



<br><br>
<form action="" method="POST" class="container">
<label for="date"><h4>Key in the date or customer's name that you want to view</h4></label><br>
<input type="text" id="date" name="date" placeholder="2021-07-11 or Simon">
<input class="button" style="width:63px; height:35px; background-color:green;" type="submit" name="submit" value="Search">
</form> 


    <!-- =====main====== -->
    <section class="inner-page">
      <div class="container">
      <h2>Viewing all customers' messages</h2>
      <table style="border=2">
        <tr>
          <th width="3%" scope="col">&nbspNo</th>
          <th width="7%" scope="col">&nbspName</th>
          <th width="20%" scope="col">&nbspEmail</th>
          <th width="20%" scope="col">&nbspSubject</th>
          <th width="35%" scope="col">&nbspMessage</th>
          <th width="10%" scope="col">&nbspReceived Date</th>
          <th width="5%" scope="col">&nbspDelete</th>
        </tr>

      <?php

      require_once("../config/db.php");

      $records = mysqli_query($conn,"select * from `finalproject`.`message`"); // fetch data from database
      $j=1;
      while($data = mysqli_fetch_assoc($records))
      {
       
      ?>

        <tr>
        <td><?php echo "&nbsp" . $j; ?></td>
          <td><?php echo "&nbsp" . $data['name']; ?></td>
          <td><?php echo "&nbsp" . $data['email']; ?></td>
          <td><?php echo "&nbsp" . $data['subject']; ?></td> 
          <td><?php echo "&nbsp" . $data['message']; ?></td>
          <td><?php echo "&nbsp" . $data['date']; ?></td>
          <td><a href="remove_message.php?message=<?php echo $data['message']; ?>" onclick="return confirm('DO YOU CONFIRM TO DELETE? Y/N')">&nbspDelete</a></td>
        </tr>	


      <?php
      $j++;
      }
      ?>
      </table>
      <br>
      
      <a href="admin.php#contact">
				<input class="button" style="width:80px;" type="button" value="< Back" />
				</a>
      </div>
      
    </section>
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
