<?php

//handles login button action
if(isset($_POST['signupbtn'])){

$message="";

require 'connection.php';	//getting connection to database
$email=$_POST['email'];      //setting email variable from input field
$password=$_POST['password'];  //setting password variable from input field

$confirm_password=$_POST['confirmpassword'];  
$phone=$_POST['confirmpassword'];  
$user_name=$_POST['user'];      //used to store the username from database       

$sql="INSERT INTO user_details (user_name, email, password, user_id) 
VALUES ('$user_name', '$email', '$password', NULL);";

if ($password == $confirm_password) {

if(mysqli_query($connect,$sql)){

	//redirecting user to dashboard page
	header('Location:login.php');
}

}else{
	$message="password do not match";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up Sober Kenya</title>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="dashboard/Styles/image/facon.png">
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" type="text/css" href="Styles/bootStrap/css/bootstrap.min.css">
		<link rel="stylesheet"  type="text/css" href="Styles/css/fixed.css">
		<link rel="stylesheet"  type="text/css" href="Styles/css/login.css">
</head>
<body>

<div class="bg" >

<div class="modal-dialog text-center " >
	<div class=" main-section">
		<div class="modal-content">

			<div class="col-12 user-img">
				<img src="Styles/image/d1.gif" >
			</div>
			<!-- end of user image -->

			<div class="col-12 form-input">
				<form action="signUp.php" method="post">
					<div class="text-success"><?php if(isset($message)) {echo $message;} ?></div>
					<div class="form-group">
						<label>User Name</label>
						<input type="text" class="form-control" placeholder="Enter User Name" name="user">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" placeholder="Enter Email" name="email">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Enter Password" name="password">
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" class="form-control" placeholder="ConfirmPassword" name="confirmpassword">
					</div>

					<button type="submit"name="signupbtn" class="btn btn-success" href="index">Sign Up</button>

				</form>
			</div> 
			<!-- end of form input -->
			<div class="col-12 forgot">
				<a href="login.php">Back to login</a>
			</div>

		</div>
		<!-- end of modal content -->
	
	</div>
	
</div>
<!-- end modal dialog -->




</div>

<!-- Scirpt source files -->
	<script src="Styles/bootStrap/js/jquery-3.3.1.slim.min.js"></script>
	<script src="Styles/bootStrap/js/popper.min.js"></script>
	<script src="Styles/bootStrap/js/bootstrap.min.js"></script>
	<script src="Styles/js/carousel.js"></script>
<!-- end of script source files -->

</body>
</html>