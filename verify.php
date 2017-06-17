<?php 
	
	$email = $_GET['email'];
	$pass = $_GET['id'];

	include('./config.php');

	$sql = "SELECT * FROM users WHERE uemail='$email' AND upass='$pass'";

	$query = mysqli_query($conn, $sql);

	if($query){
		$sql2 = "UPDATE users SET status=1 WHERE uemail='$email'";
		$query2 = mysqli_query($conn, $sql2);
		session_start();
		$_SESSION['person'] = $email; 
		header("Location: ./success.php");
	}else{

	}


?>