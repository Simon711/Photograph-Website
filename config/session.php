<?php
session_start();
if (isset($_SESSION['UserID'])){
    
}else{

  ?> <script> alert("Please log on before using"); 
  window.location="../login.php" </script> <?php
   //goto2("../login.php","Please log on before using");

}


?>