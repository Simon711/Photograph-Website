<?php
require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');
require_once("../display_contact.php");
include_once('../config/checkadmin.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update Pricing | ZHAZHA</title>
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
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

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
          <h2>Update Pricing</h2>
          <ol>
            <li><a href="admin.php">Home</a></li>
            <li>Update Pricing</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <?php

        if(isset($_POST['packagename'])) {
            $packageid=$_GET['packageID'];
            $packagename=$_POST['packagename'];
            $desc1=$_POST['desc1'];
            $desc2=$_POST['desc2'];
            $desc3=$_POST['desc3'];
            $desc4=$_POST['desc4'];
            $desc5=$_POST['desc5'];
            $price=$_POST['price'];

            $sql ="UPDATE `tblpricing` SET `packageName`='".$packagename."' WHERE (`packageID`='".$packageid."') LIMIT 1";  // sql command
            $sql1="UPDATE `tblpricing` SET `firstLine`='".$desc1."' WHERE (`packageID`='".$packageid."') LIMIT 1"; 
            $sql2="UPDATE `tblpricing` SET `secondLine`='".$desc2."' WHERE (`packageID`='".$packageid."') LIMIT 1"; 
            $sql3="UPDATE `tblpricing` SET `thirdLine`='".$desc3."' WHERE (`packageID`='".$packageid."') LIMIT 1"; 
            $sql4="UPDATE `tblpricing` SET `fourthLine`='".$desc4."' WHERE (`packageID`='".$packageid."') LIMIT 1"; 
            $sql5="UPDATE `tblpricing` SET `fifthLine`='".$desc5."' WHERE (`packageID`='".$packageid."') LIMIT 1"; //sql command
            $sql6="UPDATE `tblpricing` SET `price`='".$price."' WHERE (`packageID`='".$packageid."') LIMIT 1"; 
            mysqli_select_db($conn,"finalproject"); ///select database as default
            $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
            $result=mysqli_query($conn,$sql1);
            $result=mysqli_query($conn,$sql2);
            $result=mysqli_query($conn,$sql3);
            $result=mysqli_query($conn,$sql4);
            $result=mysqli_query($conn,$sql5);
            $result=mysqli_query($conn,$sql6);
            goto2("admin.php", "Pricing successfully updated");

        } else {

            $packageid=$_GET['packageID'];
           
            $sql ="select * from `tblpricing` where `packageID`='".$packageid."'";
            mysqli_select_db($conn, "finalproject");//select database as default
            $result = mysqli_query($conn, $sql); // this command sql cmd to sent to mysql

            $row=mysqli_fetch_assoc($result);
  
    ?>

    <section class="inner-page">
      <div class="container">
      <form action="updatepricing.php?packageID=<?php echo $packageid; ?>" method="POST">
        <div class="form-group">
          <label for="Package ID">Package ID:</label>
          <input type="text" class="form-control" id="packageid" name="packageid" value="<?php echo $row['packageID']; ?>" disabled><br><br>
        </div>
        <div class="form-group">
          <label for="Package Name">Package Name:</label>
          <input type="text" class="form-control" id="packagename" name="packagename" value="<?php echo $row['packageName']; ?>"><br><br>
        </div>
        <div class="form-group">
          <label for="Description 1">Description 1:</label>
          <input type="text" class="form-control" id="desc1" name="desc1" value="<?php echo $row['firstLine']; ?>"><br><br>
        </div>
        <div class="form-group">
          <label for="Description 2">Description 2:</label>
          <input type="text" class="form-control" id="desc2" name="desc2" value="<?php echo $row['secondLine']; ?>"><br><br>
        </div>
        <div class="form-group">
          <label for="Description 3">Description 3:</label>
          <input type="text" class="form-control" id="desc3" name="desc3" value="<?php echo $row['thirdLine']; ?>"><br><br>
        </div>
        <div class="form-group">  
          <label for="Description 4">Description 4:</label>
          <input type="text" class="form-control" id="desc4" name="desc4" value="<?php echo $row['fourthLine']; ?>"><br><br>
        </div>
        <div class="form-group">
          <label for="Description 5">Description 5:</label>
          <input type="text" class="form-control" id="desc5" name="desc5" value="<?php echo $row['fifthLine']; ?>"><br><br>
        </div>
        <div class="form-group">
          <label for="Price">Price:</label>
          <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price']; ?>"><br><br>
        </div>
        <input type='submit' name='submit' value='Save' style="width:100px" class="button" >
        <!--class="btn btn-primary"--> &nbsp
        <input type="reset" style="width:100px" class="button1" style="width:100px" value="Clear">
        <div class="backmain">
        <a href="admin.php#pricing"><input type="button" class="button" style="width:100px " value="Back"></a>
        </div>
    </form>
      </div>
    </section>

    <?php } ?>

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