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

  <title>Update Booking | ZHAZHA</title>
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
        <li><a class="nav-link scrollto active" href="admin.php#hero">Home</a></li>
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
          <h2>Update Booking</h2>
          <ol>
            <li><a href="admin.php">Home</a></li>
            <li><a href="viewbooking.php">View Booking</a></li>
            <li>Update Booking</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <?php

        if(isset($_POST['packagename'])) {
            $bookingid=$_GET['bookingID'];
            $packagename=$_POST['packagename'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phonenum'];
            //$odate=$_POST['rdate'];
            //$rdate = date('Y-m-d H:i:s', strtotime($odate));
            $date=str_replace('-', '/', $_POST['rdate']);
            $rdate=date('Y-m-d', strtotime($date));
            $rtime=$_POST['rtime'];
            $details=$_POST['details'];

            $sql ="UPDATE `tblbooking` SET `packageID`='".$packagename."' WHERE (`bookingID`='".$bookingid."') LIMIT 1";  // sql command
            $sql1="UPDATE `tblbooking` SET `Name`='".$name."' WHERE (`bookingID`='".$bookingid."') LIMIT 1"; 
            $sql2="UPDATE `tblbooking` SET `email`='".$email."' WHERE (`bookingID`='".$bookingid."') LIMIT 1"; 
            $sql3="UPDATE `tblbooking` SET `phoneNo`='".$phone."' WHERE (`bookingID`='".$bookingid."') LIMIT 1"; 
            $sql4="UPDATE `tblbooking` SET `date`='".$rdate."' WHERE (`bookingID`='".$bookingid."') LIMIT 1"; 
            $sql5="UPDATE `tblbooking` SET `time`='".$rtime."' WHERE (`bookingID`='".$bookingid."') LIMIT 1"; //sql command
            $sql6="UPDATE `tblbooking` SET `details`='".$details."' WHERE (`bookingID`='".$bookingid."') LIMIT 1"; 
            mysqli_select_db($conn,"finalproject"); ///select database as default
            $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
            $result=mysqli_query($conn,$sql1);
            $result=mysqli_query($conn,$sql2);
            $result=mysqli_query($conn,$sql3);
            $result=mysqli_query($conn,$sql4);
            $result=mysqli_query($conn,$sql5);
            $result=mysqli_query($conn,$sql6);
            goto2("viewbooking.php", "Booking successfully updated");

        } else {

            $bookingid=$_GET['bookingID'];
           
            $sql ="select * from `tblbooking` where `bookingID`='".$bookingid."'";
            mysqli_select_db($conn, "finalproject");//select database as default
            $result = mysqli_query($conn, $sql); // this command sql cmd to sent to mysql

            $row=mysqli_fetch_assoc($result);
  
    ?>

    <section class="inner-page">
      <div class="container">
      <form action="updatebooking.php?bookingID=<?php echo $bookingid; ?>" method="POST">
        <div class="form-group">
          <label for="Booking ID">Booking ID:</label>
          <input type="text" class="form-control" id="bookingid" name="bookingid" value="<?php echo $bookingid; ?>" disabled><br><br>
        </div>

        <div class="form-group">
            <label for="Package Name">Package Name:</label><br>
            <select name="packagename" id="packagename">
            <option value="0"> Select the Package</option>
            <!-- repeat value taken from db -->
            <?php 
                $packageid=$_GET['packageID'];
                $sql1 ="select * from `tblpricing`";
                mysqli_select_db($conn, "finalproject");//select database as default
                $result1 = mysqli_query($conn, $sql1); // this command sql cmd to sent to mysql
            
                
                while($row1=mysqli_fetch_assoc($result1)) { ?>

                <option <?php if($row['packageID']==$row1['packageID']) { echo "selected"; } ?> 
                value="<?php echo $row1['packageID']; ?>"> <?php echo $row1['packageName']; ?></option>

            <?php } ?>
            </select><br><br>
        </div>

        <div class="form-group">
            <label for="Full Name">Full Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['Name']; ?>"><br><br>
        </div>

        <div class="form-group">
            <label for="Email Address">Email Address:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        </div>

        <div class="form-group">
            <label for="Phone Number">Phone Number:</label>
            <input type="text" class="form-control" id="phonenum" name="phonenum" value="<?php echo $row['phoneNo']; ?>"><br><br>
        </div>

        <div class="form-group">
            <label for="Date">Reservation Date:</label>
            <input type="date" class="form-control" id="rdate" name="rdate" value="<?php echo date('Y-m-d', strtotime($row['date'])); ?>"><br><br>
        </div>

        <div class="form-group">
            <label for="Time">Reservation Time:</label>
            <input type="time" class="form-control" id="rtime" name="rtime" value="<?php echo $row['time']; ?>"><br><br>
        </div>
        
        <div class="form-group">
            <label for="Details">Details:</label>
            <textarea class="form-control" id="details" name="details" rows="8" cols="50"> <?php echo $row['details']; ?></textarea><br><br>
        </div>

        <input type='submit' name='submit' value='Save' style="width:100px" class="button" >
        <!--class="btn btn-primary"--> &nbsp
        <input type="reset" style="width:100px" class="button1" style="width:100px" value="Clear">
        <div class="backmain">
        <a href="viewbooking.php"><input type="button" class="button" style="width:100px " value="Back"></a>
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