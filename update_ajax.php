<?php
	include 'database.php';
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$status=$_POST['status'];
	$comment=$_POST['comment'];
	$sql = "UPDATE client 
	SET name='$name',
	email='$email',
	phone='$phone',
	status='$status', 
	comment='$comment' 
	WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>