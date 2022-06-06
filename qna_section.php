

    
    <div class="container" data-aos="fade-up">
         
      <br>
  
      <div class="section-title">
      <?php
    
            $sql = "select * from FAQ_title where faqID = 1";
            mysqli_select_db($conn, "finalproject");
            $result = mysqli_query($conn, $sql); //command allows sql command to be sent to mysql
            $row=mysqli_fetch_assoc($result);

        ?>
        <h2><?php echo $row['label']; ?></h2>
            <h3><?php echo $row['title1']; ?> <span><?php echo $row['title2']; ?></span></h3>
            <p><?php echo $row['description']; ?>

      </div>
      
      <div class="row justify-content-center">
          <div class="col-xl-10">
          <?php
      $con         = mysqli_connect("localhost", "root", "", "finalproject");
      $sql         = "select * from qna";
      $que = mysqli_query($con, $sql);

      while( $row = mysqli_fetch_array($que) ) {
    ?>
    <br>
<button class="collapsible"><?php echo $row['question']; ?> </button>
 

<div class="content1">
  <p><?php echo $row['answer']; ?> </p>
</div>

         
          <?php
            }
          ?> 
          </div>
      </div>

    <!--stop-->
    </div>
    </section><!-- End Frequently Asked Questions Section -->
  
    <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>