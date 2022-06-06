
<?php 
require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');
?>

<?php 

if (isset($_GET['photoname'])){
 //echo " you have try to save ";
        $pn=$_GET['photoname'];
      
        $sql ="DELETE FROM `tblphoto` 
        WHERE (`photoname`='".$pn."') ";  // sql command
//echo $sql;
        mysqli_select_db($conn,"finalproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       // mysqli_fetch_assoc($result); 
      goto2("admin.php"," Photo is successfully deleted");
} 

?>