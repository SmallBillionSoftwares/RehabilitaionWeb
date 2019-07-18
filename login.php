<?php

//handles login button action
if(isset($_POST['loginbtn'])){

require 'connection.php';	//getting connection to database
$email=$_POST['email'];      //setting email variable from input field
$password=$_POST['password'];  //setting password variable from input field

$user_name="";      //used to store the username from database       

//quering database
$result=mysqli_query($connect,'select * from user_details 
	where email="'.$email.'" and password="'.$password.'" ');

//verifying user credentials from database
if(mysqli_num_rows($result)==1){
	//starting session
	session_start();

	//setting session variables
	$_SESSION['email']=$email;
	$_SESSION['password']=$password;

	//redirecting user to dashboard page
	header('Location:dashboard/dashboard.php');
}
else{
	//setting error message variable
	$message="wrong email or password";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Sober Kenya</title>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="dashboard/Styles/image/facon.png">
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" type="text/css" href="dashboard/Styles/bootStrap/css/bootstrap.min.css">
		<link rel="stylesheet"  type="text/css" href="dashboard/Styles/css/fixed.css">
		<link rel="stylesheet"  type="text/css" href="dashboard/Styles/css/login.css">
</head>
<body>

<div class="bg" >

<div class="modal-dialog text-center " >
	<div class=" main-section">
		<div class="modal-content">

			<div class="col-12 user-img">
				<img src="dashboard/Styles/image/d1.gif" >
			</div>
			<!-- end of user image -->

			<div class="col-12 form-input">
				<form method="post">
					<div class="text-danger"><?php if(isset($message)) {echo $message;} ?></div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" placeholder="Enter Email" name="email">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Enter Password" name="password">
					</div>

					<button type="submit"name="loginbtn" class="btn btn-success" href="index">Login</button>

				</form>
			</div> 
			<!-- end of form input -->
			<div class="col-12 forgot">
				<a href="#">Create an account</a>
			</div>

		</div>
		<!-- end of modal content -->
	
	</div>
	
</div>
<!-- end modal dialog -->




</div>

<!-- Scirpt source files -->
	<script src="dashboard/Styles/bootStrap/js/jquery-3.3.1.slim.min.js"></script>
	<script src="dashboard/Styles/bootStrap/js/popper.min.js"></script>
	<script src="dashboard/Styles/bootStrap/js/bootstrap.min.js"></script>
	<script src="dashboard/Styles/js/carousel.js"></script>
<!-- end of script source files -->

</body>
</html>