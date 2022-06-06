<?php  
require_once("../config/function.php");
require_once("../display_contact.php");   
include_once('../config/checkadmin.php');

if(isset($_POST["submit"])) {
    
    $_description = $_POST["description"];
    $_no_street = $_POST["no_street"];
    $_city = $_POST["city"];
    $_state = $_POST["state"];
    $_email = $_POST["email"];
    $_phone = $_POST["phone"];


    $sql = "UPDATE `finalproject`.`contact` SET `description`='$_description', `no_street`='$_no_street', `city`='$_city', `state`='$_state', `email`='$_email', `phone`='$_phone' WHERE `phone`='$phone'";
    
    if (mysqli_query($conn, $sql)){
      display("admin.php", "Contact has been updated");
    }
    else{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
       
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="../assets/css/update_contact.css" rel="stylesheet">
<link href="../assets/css/btnstyle.css" rel="stylesheet">
<html>
<body>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-envelope"></i>
        <i class="fas fa-at"></i>
        <i class="fas fa-mail-bulk"></i>
      </div>
      <form action="update_contact.php" method="POST">
        <h1>Update Contact Us Information</h1>
        <div class="info">

        <label for="description">Description</label><br>
        <textarea rows = "5" cols = "40" name = "description"><?php echo $description ?></textarea> <br>

        <label for="no_street">Number & Street</label><br>
        <input type="text" id="no_street" name="no_street" size="50" value="<?php echo $no_street ?>"><br>

        <label for="city">City</label><br>
        <input type="text" id="city" name="city" size="50" value="<?php echo $city ?>"><br>

        <label for="state">State</label><br>
        <input type="text" id="state" name="state" size="50" value="<?php echo $state ?>"><br>

        <label for="email">E-mail</label><br>
        <input type="email" id="email" name="email" size="50" value="<?php echo $email ?>"><br>

        <label for="phone">Phone Number</label><br>
        <input type="text" id="phone" name="phone" size="50" value="<?php echo $phone ?>"><br>

        <button type="submit" style="width:100px;" name="submit">Update</button>
        &nbsp
        <a href="admin.php#contact">
				<button type="button"  name="back" style="width:100px;" >Back</button>
				</a>
      </form>
    </div>
  </body>
</html>