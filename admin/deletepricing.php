<?php
require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');

?>

<?php

if(isset($_GET['packageID'])) {
    //echo " you have tried to save";
    $packageid=$_GET['packageID'];

    $sql ="DELETE FROM `tblpricing` WHERE (`packageID`='".$packageid."')";  // sql command
    mysqli_select_db($conn,"finalproject"); //select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
    //$row=mysqli_fetch_assoc($result); 
    goto2("admin.php", "Pricing is successfully deleted");

}

?>