<?php
require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');
require_once("../display_contact.php");
include_once('../config/checkadmin.php');

if (isset($_POST['fname'])){
    $matricno=$_GET['MatricNo'];
    $filename = $_FILES['image']['name']; 
     
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    
    $e=$_POST['email'];
    $phone=$_POST['phone'];
    $fb=$_POST['fb'];
    $insta=$_POST['insta'];
    //$image=$_POST["image"];
    $dob_=str_replace('-', '/', $_POST['dob']);
    $dob=date('Y-m-d H:i:s', strtotime($dob_));
    //$dob=$_POST['dob'];
    $school=$_POST['school'];
    $course=$_POST['course'];
    $bio=$_POST['bio'];
    

    $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png");
    $photolink = './assets/img/team/'.$filename;
    
            // Upload files and store in database
            if(move_uploaded_file($_FILES["image"]["tmp_name"],'../assets/img/team/'.$filename)){
                // Image db insert sql
                    $update = "UPDATE `finalproject`.`team_member` 
                    SET `firstName` = '".$fname."', `lastName` = '".$lname."', `email` = '".$e."',`phoneNum`='".$phone."',`Facebook`='".$fb."',`Instagram`='".$insta."' ,`dob` = '".$dob."', `school` = '".$school."', `course` ='".$course."', `bio` = '".$bio."', `ProfilePic` = '".$photolink."' WHERE `MatricNo` = '".$matricno."'"; 
                    
                    mysqli_select_db($conn,"finalproject"); ///select database as default
                    if (mysqli_query($conn,$update)){
                        goto2("viewteam.php","Update Successfully!");
                    }
                    else{
                        echo 'Error: '.mysqli_error($conn);
                    }
              
            }
            else{
               
           
                    $update = "UPDATE `finalproject`.`team_member` 
                    SET `firstName` = '".$fname."', `lastName` = '".$lname."', `email` = '".$e."', `phoneNum`='".$phone."',`Facebook`='".$fb."',`Instagram`='".$insta."' ,`dob` = '".$dob."', `school` = '".$school."', `course` ='".$course."', `bio` = '".$bio."' WHERE `MatricNo` = '".$matricno."'"; 
                    
                    mysqli_select_db($conn,"finalproject"); ///select database as default
                    if (mysqli_query($conn,$update)){
                        goto2("viewteam.php","Update Successfully!");
                    }
                    else{
                        echo 'Error: '.mysqli_error($conn);
                    }
                
            }
        
    
} else {
    $matricno=$_GET['MatricNo'];
    $sql ="select * from `finalproject`.`team_member` where `MatricNo`='".$matricno."'";
    mysqli_select_db($conn,"finalproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    $row=mysqli_fetch_assoc($result); 
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update Team | ZHAZHA</title>
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
          <h2>Update Team</h2>
          <ol>
            <li><a href="admin.html">Home</a></li>
            <li><a href="viewteam.php">View Team</a></li>
            <li>Update Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      <form role="form" action="updateteam.php?MatricNo=<?php echo $matricno; ?>" method="post" enctype='multipart/form-data'>
            <div class="form-group">
                <label  for="form-username" style="color:blue;">First Name: </label>
                <input type="text" name="fname" class="form-username form-control"  value="<?php echo $row["firstName"]?>">
            </div>
            <br>
            <div class="form-group">
                <label  for="form-username" style="color:blue;">Last Name: </label>
                <input type="text" name="lname" class="form-username form-control"  value="<?php echo $row["lastName"]?>">
            </div>
            <br>
            <div class="form-group">
                <label class="sr-only" for="matricno" style="color:blue;"><span style="color:red;">*</span>Matric No.:</label>
                <input disabled type="text" name="matricno" class="form-username form-control"  value="<?php echo $matricno?>" required>
            </div>
            <br>
            <div class="form-group">
                <label class="sr-only" for="email" style="color:blue;"><span style="color:red;">*</span>Email:</label>
                <input type="email" name="email" class="form-username form-control"  value="<?php echo $row["email"]?>" required>
            </div>
            <br>
            <div class="form-group">
                <label class="sr-only" for="phone" style="color:blue;"><span style="color:red;">*</span>Phone Number(without '-'):</label>
                <input type="text" name="phone" class="form-username form-control"  value="<?php echo $row["phoneNum"]?>" required>
            </div>
            <br>
            <div class="form-group">
                <label class="sr-only" for="fb" style="color:blue;">Facebook Link:</label>
                <input type="text" name="fb" class="form-username form-control"  value="<?php echo $row["Facebook"]?>" >
            </div>
            <br>
            <div class="form-group">
                <label class="sr-only" for="insta" style="color:blue;">Instagram Link:</label>
                <input type="text" name="insta" class="form-username form-control"  value="<?php echo $row["Instagram"]?>" >
            </div>
            <br>
            <div class="form-group">
            <label  for="pp" style="color:blue;">Current Profile Picture: </label>
            <br>
                <img src=<?php echo ".".$row["ProfilePic"]; ?> width=300px height=300px alt='Profile pic'>
                <br>
                <br>
                <input type="file"  name="image" id="file" multiple>
            </div> 
            <br>
            <div class="form-group">
                <label  for="dob" style="color:blue;">DOB: </label>
                <input type="date" name="dob" class="form-username form-control" value="<?php echo date('Y-m-d', strtotime($row['dob']));?>" >
            </div>
            <br>
            <div class="form-group">
                <label  for="school" style="color:blue;">School: </label>
                <select name="school" >
                    
                    <?php
                      $sql ="select * from table_school";  // sql command
                      mysqli_select_db($conn,"finalproject"); ///select database as default
                      $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql

                      while( $rowschool=mysqli_fetch_assoc($result)) {   ?> 
                        <option <?php 
                        if($row["school"]==$rowschool['school']){echo "Selected";}?>
    
                        value="<?php echo $rowschool['school'];?>">
                        <?php echo $rowschool['schoolName'];?></option>

                    <?php }  ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label  for="course" style="color:blue;">Course: </label>
                <input type="text" name="course" class="form-username form-control"  value="<?php echo $row["course"]?>">
            </div>
            <br>
            <div class="form-group">
                <label  for="bio" style="color:blue;">BIO: </label><br>
                <textarea name="bio" rows="4" cols="50" ><?php echo $row["bio"]?></textarea>
            </div>
            <br>
            
            <input type='submit' name='submit' value='Upload' style="width:100px" class="button" >
        <!--class="btn btn-primary"--> &nbsp
        <input type="reset" style="width:100px" class="button1" style="width:100px" value="Clear">
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