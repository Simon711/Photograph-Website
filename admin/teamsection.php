<?php
require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');
?>

 <div class="container" data-aos="fade-up">
 <a href="updateteamTitle.php?teamID=1" title="Edit Title"><i style="font-size: 25px">Edit Title </i><i  class="bi bi-pen" style="font-size: 25px"></i></a>
        
        
           <?php
    
        $sql = "select * from `finalproject`.`team_title` where `teamID` = 1";
        mysqli_select_db($conn, "finalproject");
        $result = mysqli_query($conn, $sql); //command allows sql command to be sent to mysql
        $row=mysqli_fetch_assoc($result);

      ?>
      
        <div class="section-title">
          <h2><?php echo $row['label']; ?></h2>
          <h3><?php echo $row['title1']; ?> <span><?php echo $row['title2']; ?></span> </h3>
          <p><?php echo $row['description']; ?>
          </p>
          
        </div>
    

        <p><a href="viewteam.php" title="Edit Team"><b style="font-size: 50px">+</b></a></p>
        
        <div class="row" style="text-align:center;">
            <?php
                $sql ="select * from (`finalproject`.`team_member` as tm Join `finalproject`.`table_school` as ts on tm.school=ts.school) ";
                mysqli_select_db($conn,"finalproject"); 
                $result=mysqli_query($conn,$sql);  
                while ($row=mysqli_fetch_assoc($result)){ 
              ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
              
                <img src=<?php echo ".".$row["ProfilePic"]; ?> class="img-fluid" alt="Profile pic">
                <div class="social">
                
                  <a href="<?php echo $row['Facebook'];?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo $row['Instagram'];?>"><i class="bi bi-instagram"></i></a>
                  <a href="https://wa.me/<?php echo $row['phoneNum'];?>"><i class="bi bi-whatsapp"></i></a>
                  <a href="mailto: <?php echo $row['email'];?>"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
              <div class="member-info">
              
                <h3><?php echo $row['firstName']." ".$row['lastName'];?></h3>
                <h4><?php echo '"'.$row['bio'].'"';?></h4>
                <span><?php echo $row['dob'] ; ?></span>
                <span><?php echo $row['schoolName'];?></span>
                <span><?php echo $row['course'];?></span>
              </div>
            </div>
          </div>

            <?php
            }
            ?>

        </div>


      </div>
 </div>