<?php

require_once("config/db.php");
require_once("config/function.php");

if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    //$_date = date("Y-m-d");
    $_date = "2021-07-11";

    $sql = "INSERT INTO `finalproject`.`message` (`name`, `email`, `subject`, `message`, `date`) VALUES ('$name', '$email','$subject', '$message', '$_date')";
 
    if (mysqli_query($conn, $sql))
        display("index.php", "Message has been sent successfully");
    else
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
