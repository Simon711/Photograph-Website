<?php

require_once("../config/db.php");
require_once("../config/function.php");

if(isset($_GET["message"])) {
    $message = $_GET['message'];
    mysqli_query($conn,"DELETE FROM `finalproject`.`message` WHERE `message` = '$message'"); // delete query
    display("view_message.php", "The record has been deleted");
}
?>