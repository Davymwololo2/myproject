<?php session_start(); ?>
<?php
    include('dbconnect.php');
    //define authentication error
    $err='';
    $password=$name="";
    
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $password=$_POST['password'];
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $login="SELECT client_uname,client_password FROM clients WHERE client_uname='$name' AND client_password='$password'";
        $run_login=mysqli_query($conn,$login);
        $check_customer=mysqli_num_rows($run_login);
        
            if($check_customer==0){
                $err= "Invalid credentials.Try again";
            }
                elseif($check_customer==1){
                    $_SESSION["customer_name"]=$name;
                    $_SESSION["customer_id"]=$customer_id;
                    header("location:index.php");
                }
                    elseif ($check_customer>1) {
                        $err="There seems to be a problem with your account. You have to confirm that it belongs to you before you proceed.";
                    }
    }
     
      
include("header1.php");
?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="log">
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <img src="images/icon.jpeg" alt="image not found">
                        </div>
                    </div>
                    <div id="login" class="col-lg-6" style="">
                      
                        <!--dislay authentication errors-->
                        <?php 
                            if(!empty($err) && $err!==""){  //check whether there are authentication errors
                         ?>
                                <div class="alert alert-danger">
                                    <?php
                                        echo $err;
                                     ?>
                                </div>
                        <?php
                            }
                         ?>
                         <h3 class="text-center">Login to your account</h3>
                         <form class='' action="" method="POST" id
                            login>
                            <div class="form-group">
                                <input type="name" class="form-control" id="name" name="name" value="<?php echo $name;?>" placeholder="username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="pw" name="password" required >
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Remember me</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-md" name="login" style="color: white;background-color: #6d07da;margin-left: 45%">log in</button>
                            </div>           
                        </form>   
                        <h4 class="text-center">Or Login in with:</h4>
                            <ul id='social-login' style="list-style-type: none; font-size: 30px; margin-left: 15%">
                                <li style="display: inline; "><a href="#"><span class="fa fa-facebook" style=""></span> </a></li>
                                <li style="display: inline; "><a href="#"><span class="fa fa-twitter" style=""></span> </a></li>
                                <li style="display: inline; "><a href="#"><span class="fa fa-google-plus" style="color: #f2190e ;"></span> </a></li>
                             </ul>
                       <h5 class="text-center"><label> Not signed up? <a href="signup.php" class="">Create an account</a></label></h5>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php
            include("footer1.php");
            ?>
