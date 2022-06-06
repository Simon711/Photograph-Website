<?php
require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');
?>

<!-- ======= Pricing Section ======= -->



      <div class="container" data-aos="fade-up">
      <a href="pricing_edit.php?tagID=1" title="Edit Title"> <i style="font-size: 25px">Edit Title </i><i  class="bi bi-pen" style="font-size: 25px"></i></a>
      <?php
    
        $sql = "select * from pricing_h where tagID = 1";
        mysqli_select_db($conn, "finalproject");
        $result = mysqli_query($conn, $sql); //command allows sql command to be sent to mysql
        $row=mysqli_fetch_assoc($result);

      ?>
      
        <div class="section-title">
          <h2><?php echo $row['tag']; ?></h2>
          <h3><?php echo $row['title1']; ?> <span><?php echo $row['title2']; ?></span></h3>
          <p><?php echo $row['description']; ?>
          </p>
          
        </div>
        
        <p>
        <a href="insertpricing.php" title="Insert pricing"><b style="font-size: 50px">+</b></a>
        
        
        </p>
        
        <div class="row">

        <?php
    
          $sql = "select * from tblpricing";
          mysqli_select_db($conn, "finalproject");
          $result = mysqli_query($conn, $sql); //command allows sql command to be sent to mysql
          while($row=mysqli_fetch_assoc($result)) {
    
        ?>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        
            <div class="box">
              <h3><?php echo $row['packageName']; ?></h3>
              <h4><sup>RM</sup><?php echo $row['price']; ?><span> / package</span></h4>
              <ul>
                <li><?php echo $row['firstLine']; ?></li>
                <li><?php echo $row['secondLine']; ?></li>
                <li><?php echo $row['thirdLine']; ?></li>
                <li><?php echo $row['fourthLine']; ?></li>
                <li class="na"><?php echo $row['fifthLine']; ?></li>
              </ul>
              <div class="btn-wrap">
                <a href="updatepricing.php?packageID=<?php echo $row['packageID']; ?>" class="btn-buy"><img src="../assets/img/edit_icon1.png" width="20px"></a>
                <a href="deletepricing.php?packageID=<?php echo $row['packageID']; ?>" onclick="return confirm('DO YOU CONFIRM TO DELETE? Y/N')" class="btn-buy"><img src="../assets/img/delete_icon3.png" width="22px"></a>
              </div>
            </div>
          </div>

          <?php  } ?>
          
          
        </div>
        <div style="text-align: center;">
        <br>
          <a href="viewbooking.php" title="View booking list"><button type="button" class="btn btn-primary btn-lg" style="width:250px;">View Booking List</button></a>
          </div>
      </div>
