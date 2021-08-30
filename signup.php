<?php
	/*include("dbconnect.php");*/
		$dbname="h2obilling";
	$dbpass="";
	$uname="root";
	$server="localhost";

	$conn= mysqli_connect($server,$uname,$dbpass,$dbname);

	if(!$conn){
		echo "connection problem";
	}
	else{

	if (isset($_POST["signup"])){
	/*	$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$uname=$_POST["uname"];
		$id_no=$_POST["idno"];
		$phone=$_POST["phone"];
		$email=$_POST["mail"];
		$ward=$_POST["ward"];
		$estate=$_POST["estate"];
		$password=$_POST["password"];

		$upload="INSERT INTO clients_tbl(client_fname,client_lname,client_uname,client_national_id,cient_phone_number,		client_email,client_ward,client_estate,client_password)
				VALUES (
					'$fname','$lname','$uname','$id_no','$phone','$email','$ward','$estate','$password')";

				$upload_info=mysqli_query($conn,$upload);
				
				if ($upload_info) {
					echo "uploaded";
					 header("Location:login.php");
				}
				else
				{
					echo "upload problem";
					header("Location:index.php");
				}

	}*/

	$sql = "INSERT INTO clients_tbl(client_fname,client_lname,client_uname,client_national_id,cient_phone_number,		client_email,client_ward,client_estate,client_password)VALUES ('mwololo,'mwololo','mwololo','$id_no','mwololo','mwololo','mwololo','mwololo','mwololo')";
$upload=mysqli_query($conn,$sql);
if ($upload) {
	echo"data inserted successfully";
}
error_log("data did not upload");
header("location:login.php");

}
}
	include("header1.php");
?>

	
		<div class="container">
		    <div class="row">
		        <div class="col-lg-12" id="account">
		            <div id="signup" class="col-lg-6" style="">
		               
		                 <h3 class="text-center">Create an account today!</h3>
		                  <h4 class="text-center">Signup with:</h4>

		                    <ul id='social-signup' style="list-style-type: none; font-size: 30px; margin-left: 15%">
		                        <li style="display: inline; "><a href="#"><span class="fa fa-facebook" style=""></span> </a></li>
		                        <li style="display: inline; "><a href="#"><span class="fa fa-twitter" style=" ;"></span> </a></li>
		                        <li style="display: inline; "><a href="#"><span class="fa fa-google-plus" style="color: #f2190e ;"></span> </a></li>
		                     </ul>

		                     <h4 class="text-center"><emp>OR</emp></h4>

		                 <form class='' action="signup.php" method="POST" >
		                    <div class="form-group col-lg-6">
		                        <input type="text" class="form-control" id="fname" name="fname" value="<?php /*echo $name*/;?>" placeholder="enter your first legal name" required>
		                    </div>
		                    <div class="form-group col-lg-6">
		                        <input type="text" class="form-control" id="lname" name="lname" value="<?php /*echo $name*/;?>" placeholder="enter your last legal name" required>
		                    </div>
		                    <div class="form-group col-lg-12">
		                        <input type="text" class="form-control" id="uname" name="uname" value="<?php /*echo $name*/;?>" placeholder="choose a username" required>
		                    </div>
		                    <div class="form-group col-lg-6">
		                        <input type="text" class="form-control" id="idno" name="idno" value="<?php /*echo $name*/;?>" placeholder="enter your national ID number" required>
		                    </div>
		                    <div class="form-group col-lg-6">
		                        <input type="text" class="form-control" id="phone" name="phone" value="<?php /*echo $name*/;?>" placeholder="enter your active phone number" required>
		                    </div>
		                    <div class="form-group col-lg-12">
		                        <input type="text" class="form-control" id="mail" name="mail" value="<?php /*echo $name*/;?>" placeholder="enter your email">
		                    </div>
		                    <div class="form-group col-lg-12">
		                        <input type="text" class="form-control" id="ward" name="ward" value="<?php /*echo $name*/;?>" placeholder="ward"required>
		                    </div>
		                    <div class="form-group col-lg-12">
		                        <input type="text" class="form-control" id="estate" name="estate" value="<?php /*echo $name*/;?>" placeholder="estate" required>
		                    </div>
		                    <div class="form-group col-lg-6">
		                        <input type="password" class="form-control" id="pw" name="password" placeholder="choose a password" required>
		                    </div>
		                    <div class="form-group col-lg-6">
		                        <input type="password" class="form-control" id="pw" name="password" placeholder="confirm password" required>
		                    </div>
		                    <div class="form-group">
		                        <button type="submit" class="btn btn-md" name="signup" style="color: white;background-color: #5255de; margin-left: 40%">Get started</button>
		                    </div>        
		                </form>   
		               
		               <p class="text-center"><label> Already signed up? Login<a href="login.php" class=""> here</a></label></p>
		            </div>

		            <div class="col-lg-6">
		                <div class="thumbnail">
		                    <img src="images/Signup.png" alt="image not found">
		                    <div class="caption">
		                    	<h4 class="text-center"><label>Every single drop counts!</label></h4>
		                    </div>
		                </div>
		            </div>

		        </div>
		    </div>
		</div>
        <?php
            include("footer1.php");
            ?>
