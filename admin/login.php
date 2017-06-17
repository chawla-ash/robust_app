<?php

	include('./includes/config.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$pass = openssl_digest($password, 'sha512');

	$sql = "SELECT * FROM admin WHERE user='$username' AND pass='$pass'";

	$query =mysqli_query($conn, $sql);



		$result = mysqli_num_rows($query);

	if($result==1){
	while($row = mysqli_fetch_array($query))
		echo "Login Succesful!";
		session_start();
		$_SESSION['admin'] = $username; 
		header("Location: ./home.php");
		//echo $_SESSION['person'];
	}else{
		header("Location: ./");
	}
?>
