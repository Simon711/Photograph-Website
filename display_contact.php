<?php

require_once("config/db.php");

$records = mysqli_query($conn,"select * from `finalproject`.`contact`"); // fetch data from database
$data = mysqli_fetch_assoc($records);

$description = $data['description'];
$no_street = $data['no_street'];
$city = $data['city'];
$state = $data['state'];
$email = $data['email'];
$phone = $data['phone'];

$address = $no_street . " " . $city . " " . $state;
?>