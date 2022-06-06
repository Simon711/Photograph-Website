<?php 
require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');
?>
<?php
if (isset($_GET['MatricNo'])){
 //echo " you have try to save ";
        $m=$_GET['MatricNo'];
      
        $sql ="DELETE FROM `finalproject`.`team_member` 
        WHERE (`MatricNo`='".$m."')";  // sql command
//echo $sql;
        mysqli_select_db($conn,"finalproject"); ///select database as default
        //$result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
        $result=mysqli_query($conn,$sql);
        if($result){
                goto2("viewteam.php"," Deleted Successfully");
        }
        else{
                goto2("viewteam.php"," Error");
        }
     
       
} 
?>