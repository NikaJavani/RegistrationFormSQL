<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$Gender = $_POST['Gender'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	//database connetion
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('connection Failed : '.$conn->connect_error);

	}else{
		$stmt = $conn->prepare("insert into registration(firstname, lastname, Gender, email, password, number) values(?,?,?,?,?,?)");
		$stmt->bind_param("sssssi",$firstname,$lastname,$Gender,$email,$password,$number);
		$stmt->execute();
		echo "registration SUccessfully...";
		$stmt->close();
		$conn->close();
	}
?>