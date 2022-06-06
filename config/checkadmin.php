<?php
session_start();
if (isset($_SESSION['UserID'])){
  if(($_SESSION['UserType'])=='U'){
    ?>
    <script> alert("Sorry, only admin can access to this page!"); 
  window.location="../index.php" </script> <?php
    //goto2("../index.php","Sorry, only admin can access to this page!");
  }
    //echo  $_SESSION['mylogin'];
  //  goto2("index.php","You have login");

}else{

  ?> <script> alert("Please log on before using"); 
  window.location="../login.php" </script> <?php
   //goto2("../login.php","Please log on before using");

}


?>