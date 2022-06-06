<?php
require_once('config/settings.php');
require_once('config/db.php');
require_once('config/function.php');

if(isset($_POST['ans'])){
    
    echo $_POST['ans'];
    $uid=$_POST['userid'];
    $ans=$_POST['ans'];
    $status=questioncheck(trim($uid),trim($_POST['ans']));
    
    
    if($status==1){
        //echo "correct";
        goto2("login.php","your password is ".$row['Password']);
    }
    else{
        //echo "wrong";
        goto2("forgotpw.php","Wrong answer");
    }
}else{
    $sql2="SELECT * FROM `finalproject`.`table_user` WHERE UserID='".$uid."'";

    $result2=mysqli_query($conn,$sql2);
    $row=mysqli_fetch_assoc($result2); 
    include("registerpg.html");
?>
<style>
        a:hover{
        color:pink;
        }
    </style>
<body>

    <!-- Top content -->
    <div class="top-content">
        
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>ZHA ZHA</strong> Registration Form</h1>
                        <div class="description">
                            <p>
                            made with ❤ by <a href="http://azmind.com"><strong>ZHAZHA</strong></a> for a better web
                            </p>
        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Forgot Password</h3>
                                
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="forgotpw2.php" method="post" class="login-form">
                                <div class="form-group">
                                <label class="sr-only" for="form-username">Security Question:</label>
                                Security Question: 
                                <br>
                                <select style="color:black;" name="securityquestion" >
                                
                                <?php
                                $sql ="select * from security_question";  // sql command
                                mysqli_select_db($conn,"finalproject"); ///select database as default
                                $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql

                                while( $rowquestion=mysqli_fetch_assoc($result)) {   ?> 
                                
                                    
                                    <?php 
                                    if($row["questionID"]==$rowquestion['questionID']){
                                        $id=$rowquestion['questionID'];
                                        $str=$rowquestion['question'];
                                        echo "Selected";
                                        break;?>
                                    
                                    <?php echo $rowquestion['question'];?>
                                    <?php
                                    
                                    break;
                                    }
                                    ?>
 

                                <?php }  ?>
                                <option  value="<?php echo $id;?>">
                                <?php echo $str;?>
                                </option>
                            </select>
                                </div>
                                <div class="form-group" >
                                    <label class="sr-only" for="form-username">Answer:</label>
                                    Answer: 
                                    <input style="color:black;" type="text" name="ans" class="form-username form-control"  placeholder="Answer.." required>
                                    
                                </div>
                                
                                <button type="submit" class="btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>

    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    
    <!--[if lt IE 10]>
        <script src="assets/js/placeholder.js"></script>
    <![endif]-->

</body>
<?php
}

?>