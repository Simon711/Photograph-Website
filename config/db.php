<?php
require_once("variable.php");
$conn=new mysqli($servername,$user,$passw);


if (!$conn){
    //die("Connection failed".$conn->connect_error);  
    die("Connection failed".mysqli_connect_error());
}

?>
