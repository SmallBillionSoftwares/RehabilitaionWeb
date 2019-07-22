<?php

require 'connection.php';


// CHECK REQUEST METHOD

	if ($_SERVER['REQUEST_METHOD']=='POST') {

	  $input = filter_input_array(INPUT_POST);

	} else {

	  $input = filter_input_array(INPUT_GET);

	}

$name=myqsli_real_escape_string($connect,$input["name"]);
$phone=myqsli_real_escape_string($connect,$input["phone"]);
$drug=myqsli_real_escape_string($connect,$input["drug"]);
$location=myqsli_real_escape_string($connect,$input["location"]);
$gender=myqsli_real_escape_string($connect,$input["gender"]);


//used to edit
if ($input["action"]=== 'edit') {
	$query="UPDATE pending_enrol
	SET name='".$name."',   
		phone='".$phone."',
		drug='".$drug."',
		location='".$location."',
		gender='".$gender."'
		WHERE id='"$input["id"]"'

	";

echo "updated";
	mysqli_query($connect,$query);
}

//used to delete
if ($input["action"]=== 'delete') {
	$query="DELETE FROM pending_enrol
		WHERE id='"$input["id"]"'
	";
		echo "deleted";

	mysqli_query($connect,$query);
}

//sending response to AJAX
echo json_encode($input);

?>