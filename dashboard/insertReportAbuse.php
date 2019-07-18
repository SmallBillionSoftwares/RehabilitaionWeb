<?php
require '../connection.php';


$fullName=$_POST['fullname'];
$phoneNumber=$_POST['phoneNumber'];
$drugAbused=$_POST['drugAbused'];
$location=$_POST['location'];
$gender=$_POST['gender'];

$sql="INSERT INTO report_abuse (name,phone,drug,location,gender)
VALUES ('$fullName','$phoneNumber','$drugAbused','$location','$gender')";

if (!mysqli_query($connect,$sql)) {
	echo 'Enrollment failed';
}else{
	echo 'Enrolled successfully';
}

header("refresh:0; url=../report.php");

?>