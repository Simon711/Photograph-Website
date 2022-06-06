<?php
require_once('config/settings.php');
require_once('config/db.php');
require_once('config/function.php');

if (isset($_POST['uname'])){

    $name=$_POST['uname'];
    $e=$_POST['email'];
    $p=$_POST['password'];
    $cp=$_POST['confirmpassword'];
    $ques=$_POST['securityquestion'];
    $ans=$_POST['answer'];
    $checksql="SELECT 1 FROM `finalproject`.`table_user` WHERE Email='$e'";
    $checkresult=mysqli_query($conn,$checksql);
    if(mysqli_num_rows($checkresult)>0)
    {
        goto2("register.php","Failed to Register! Email already exists");
    }
    else if($p != $cp){
        goto2("register.php","Failed to Register! Password doesn't match");
    }
    else{
        $sql ="INSERT INTO `table_user` (`UserID`, `Password`, `cPassword`, `UserType`, `Name`, `Email`,`questionID`,`answer`) 
        VALUES ('".$e."', '".$p."', '".$cp."', 'U', '".$name."', '".$e."','".$ques."','".$ans."')";  // sql command
        mysqli_select_db($conn,"finalproject"); ///select database as default
        $result=mysqli_query($conn,$sql);
        goto2("login.php","Register Successfully!");
        
    }
} else {
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
                        			<h3>Register to our site</h3>
                            		<p>- Get Started With Your Free Account -</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Name:</label>
                                        Name: 
                                        <input style="color:black;" type="text" name="uname" class="form-username form-control"  placeholder="Name.."required>
			                        	
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="email">Email</label>
                                        E-mail:
                                        <input style="color:black;" type="email" name="email" class="form-username form-control"  placeholder="Email.." required>
			                        	
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="password">Password</label>
                                        Password:
                                        <input style="color:black;" type="password" name="password" class="form-password form-control"  placeholder="Password.." required>
			                        	
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="confirmpassword">Confirm Password</label>
                                        Confirm Password:
                                        <input style="color:black;" type="password" name="confirmpassword"  class="form-password form-control" placeholder="Confirm Password.." required>
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">Security Question:</label>
                                        Security Question: 
                                        <br>
                                        <select style="color:black;" name="securityquestion" class="form-username form-control">
                    
                                        <?php
                                        $sql ="select * from security_question";  // sql command
                                        mysqli_select_db($conn,"finalproject"); ///select database as default
                                        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql

                                        while( $rowquestion=mysqli_fetch_assoc($result)) {   ?> 
                                            <option   <?php  //if($row['UserType']==$rowcat['UserType']){ echo "selected"; } ?>
                                            
                                            value="<?php echo $rowquestion['questionID'];?>"><?php echo $rowquestion['question'];?></option>
                                        
                                        <?php }  ?>
                                    </select>
			                        	
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">Answer:</label>
                                        Answer: 
                                        <input style="color:black;" type="text" name="answer" class="form-username form-control"  placeholder="Answer.." required>
			                        	
			                        </div>
			                        <button type="submit" class="btn">Sign Up!</button>
                                    <div style="color:white;">
                                        Already have an account?
                                        <a href="login.php">Click</a> here to login
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
