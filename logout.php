<?php

session_start();
	
	//checking if email session variable was set 
if (isset($_SESSION['email'])) {
	session_destroy();
		echo "<script>location.href='login.php' </script>";
}else{
	session_destroy();
		echo "<script>location.href='login.php' </script>";
}