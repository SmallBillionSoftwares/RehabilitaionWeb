<?php
require 'connection.php';


if (isset($_POST['id'])) {
	
	 $sql="SELECT id,name,phone,drug,location,gender FROM pending_enrol WHERE id='".$_POST["id"]."'   ";

	 $result=mysqli_query($connect,$sql);
	 $row=mysqli_fetch_array($result);
	 echo json_encode($row);
}else{
	echo "Not working";
}


?>