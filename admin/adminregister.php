<?php
require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');
require_once("../display_contact.php");
include_once('../config/checkadmin.php');

if (isset($_POST['uname'])){

    $name=$_POST['uname'];
    $e=$_POST['email'];
    $p=$_POST['password'];
    $cp=$_POST['confirmpassword'];
    $ques=$_POST['securityquestion'];
    $ans=$_POST['answer'];
    $checksql="SELECT 1 FROM `finalproject`.`table_user` WHERE Email='$e'";
    $checkresult=mysqli_query($conn,$checksql);
    if(mysqli_num_rows($checkresult)>0)
    {
        goto2("adminregister.php","Failed to Register! Email already exists");
    }
    else if($p != $cp){
        goto2("adminregister.php","Failed to Register! Password doesn't match");
    }
    else{
        $sql ="INSERT INTO `table_user` (`UserID`, `Password`, `cPassword`, `UserType`, `Name`, `Email`,`questionID`,`answer`) 
        VALUES ('".$e."', '".$p."', '".$cp."', 'A', '".$name."', '".$e."','".$ques."','".$ans."')";  // sql command
        mysqli_select_db($conn,"finalproject"); ///select database as default
        $result=mysqli_query($conn,$sql);
        goto2("admin.php","Add Successfully!");
        
    }
} else {
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add New Account | ZHAZHA</title>
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
      <!-- <a href="index.html" class="logo"><img src="../assets/img/logo.png" alt=""></a>-->

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
          <h2>Add New Account</h2>
          <ol>
            <li><a href="admin.php">Home</a></li>
            <li>Add New Account</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      <form role="form" action="" method="post" >
            <div class="form-group">
                <label  for="form-username" style="color:blue;">Name: </label>
                <input type="text" name="uname" class="form-username form-control"  placeholder="Name..">
                
            </div>
            <br>
            <div class="form-group">
                <label class="sr-only" for="email" style="color:blue;"><span style="color:red;">*</span>Email:</label>
                <input type="email" name="email" class="form-username form-control"  placeholder="Email.." required>
                
            </div>
            <br>
            <div class="form-group">
                <label class="sr-only" for="password" style="color:blue;"><span style="color:red;">*</span>Password: </label>
                <input type="password" name="password" class="form-password form-control"  placeholder="Password.." required>
                
            </div>
            <br>
            <div class="form-group">
                <label class="sr-only" for="confirmpassword" style="color:blue;"><span style="color:red;">*</span>Confirm Password: </label>
                <input type="password" name="confirmpassword"  class="form-password form-control" placeholder="Confirm Password.." required>
            </div>
            <br>
            <div class="form-group">
                <label class="sr-only" for="form-username" style="color:blue;">Security Question: </label>
                          
                          <br>
                          <select style="color:black;" name="securityquestion" class="form-username form-control">
      
                          <?php
                          $sql ="select * from security_question";  // sql command
                          mysqli_select_db($conn,"finalproject"); ///select database as default
                          $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql

                          while( $rowquestion=mysqli_fetch_assoc($result)) {   ?> 
                              <option   <?php  //if($row['UserType']==$rowcat['UserType']){ echo "selected"; } ?>
                              
                              value="<?php echo $rowquestion['questionID'];?>"><?php echo $rowquestion['question'];?></option>
                          
                          <?php }  ?>
                      </select>
                  
                </div>
                <br>
              <div class="form-group">
                <label class="sr-only" for="form-username" style="color:blue;"> <span style="color:red;">*</span>Answer:</label>
                          
                          <input style="color:black;" type="text" name="answer" class="form-username form-control"  placeholder="Answer.." required>
                  
                </div>
                <br>
                <input type='submit' name='submit' value='Submit' style="width:100px" class="button" >
        <!--class="btn btn-primary"--> &nbsp
        <input type="reset" style="width:100px" class="button1" value="Clear">
        <div class="backmain">
        <a href="viewteam.php"><input type="button" class="button" style="width:100px " value="Back"></a>
        </div>
            </div>
        </form>
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

<?php
}
?>