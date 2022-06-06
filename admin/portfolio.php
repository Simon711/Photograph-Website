<style>
.edit{
  float:right;
}

</style>

<?php require_once("../config/settings.php");
require_once('../config/db.php');
require_once('../config/function.php');
?>
 <!-- ======= Portfolio Section
Admin site
      ======= -->


    
      <div class="container" data-aos="fade-up">
      <a href="updatepftitle.php?portfolioID=1" title="Edit Title"><i style="font-size: 25px">Edit Title </i><i  class="bi bi-pen" style="font-size: 25px"></i></a>

        <div class="section-title">
          <h2><?php echo $pflabel; ?></h2>
          <h3><?php echo $pftitle; ?> <span> <?php echo $pftitle2; ?></span></h3>
          <p><?php echo $pfdesc; ?></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app"><?php echo $cat1; ?></li>
              <li data-filter=".filter-card"><?php echo $cat2; ?></li>
            </ul>
          </div>
        </div>
        <p><a href="uploadportfoliopage.php" title="Insert portfolio"><b style="font-size: 50px">+</b></a></p>

<?php

        $family = 1;
        $fno=1;
        $sql = "select * from tblphoto WHERE (`categoryID`='".$family."')";
        mysqli_select_db($conn,"finalproject");
        $result = mysqli_query($conn,$sql);  //cammand allow sql cmd to be sent to mysql
        if (mysqli_num_rows($result) != 0)
            {
        //results found
                while($row=mysqli_fetch_assoc($result)){
                ?>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
             
             <!-- <img src=<?php //echo retrievePhoto($no); ?> class="img-fluid" alt="">  -->
             <img src=<?php echo ".".$row["photolink"]; ?> class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo $row["photoname"]; ?></h4>
              <p><?php echo $row["photodes"]; ?></p>
              
              <div class="edit">
              <a href="updateportfoliopage.php?photoid=<?php echo $row["photoid"];?>"><i>Edit</i></a>
              &nbsp
              <a href="deleteportfolio.php?photoname=<?php echo $row["photoname"];?>" onclick="return confirm('DO YOU CONFIRM TO DELETE? Y/N')"><i style="color:red">Delete</i></a> 
             </div>
            </div>
           
          </div>
       
          <?php $fno++;
            }?>  
   
<?php 

} else {
  // results not found 
  }
  ?>

<?php  

    $wedding = 2;
    $wno=1;
    $sql1 = "select * from tblphoto WHERE (`categoryID`='".$wedding."')";
    mysqli_select_db($conn,"finalproject");
     $result = mysqli_query($conn,$sql1);  //cammand allow sql cmd to be sent to mysql
        if (mysqli_num_rows($result) != 0)
            {
        //results found
                while($row=mysqli_fetch_assoc($result)){
                ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src=<?php echo ".".$row["photolink"]; ?> class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo $row["photoname"]; ?></h4>
              <p><?php echo $row["photodes"]; ?></p>
              
              <div class="edit">
              <a href="updateportfoliopage.php?photoid=<?php echo $row["photoid"];?>"><i>Edit</i></a> 
              &nbsp
              <a href="deleteportfolio.php?photoname=<?php echo $row["photoname"];?>" onclick="return confirm('DO YOU CONFIRM TO DELETE? Y/N')"><i style="color:red">Delete</i></a>
              </div>
            </div>
          </div>

          <?php $wno++;
            }?>  
   
<?php 

} else {
  // results not found 
  }
  ?>
   

        </div>

      </div>
  
   <!-- End Portfolio Section -->