<?php 
require_once('../config/settings.php');
require_once('../config/db.php');   
require_once('../config/function.php');   

$id = $_GET['id'];

$delete = "DELETE FROM `finalproject`.`qna` WHERE `id` = '$id'";
$result = mysqli_query($conn, $delete);
header("location:qna_edit.php");


?>