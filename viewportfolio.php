<?php include("./config/settings.php");
require_once('./config/db.php');
require_once('./config/function.php');
?>
 <!-- ======= Portfolio Section

      ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

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
             <img src=<?php echo $row["photolink"]; ?> class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo $row["photoname"]; ?></h4>
              <p><?php echo $row["photodes"]; ?></p>
             
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
            <img src=<?php echo $row["photolink"]; ?> class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo $row["photoname"]; ?></h4>
              <p><?php echo $row["photodes"]; ?></p>
             
            </div>
          </div>

          <?php $fno++;
            }?>  
   
<?php 

} else {
  // results not found 
  }
  ?>

        </div>

      </div>
  
    </section><!-- End Portfolio Section -->