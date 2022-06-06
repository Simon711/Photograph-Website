<?php
require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');

?>

<?php

if(isset($_GET['bookingID'])) {
    //echo " you have tried to save";
    $bookingid=$_GET['bookingID'];

    $sql ="DELETE FROM `tblbooking` WHERE (`bookingID`='".$bookingid."')";  // sql command
    mysqli_select_db($conn,"finalproject"); //select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
    //$row=mysqli_fetch_assoc($result); 
    goto2("viewbooking.php", "Booking record is successfully deleted");

}

?>