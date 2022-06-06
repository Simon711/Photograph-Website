<?php

require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');


if(isset($_POST["delete_all_message"])) {
    $_data = $_POST["data"];
    mysqli_query($conn,"DELETE FROM `finalproject`.`message` WHERE `name`='$_data' OR `date`='$_data'");
    display("view_message.php", "All " . $_data . " message has been deleted");
}

?>