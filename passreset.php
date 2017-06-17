<?php

	include('./config.php');

	$pass = $_POST['lastpassword'];

	$password = openssl_digest($pass, 'sha512');

	$newpass = $_POST['password'];

	$newpass2 = $_POST['cpassword'];

	$id = $_POST['id'];

	if($newpass!=$newpass2){
		echo "<script>alert('Passwords do not match')</script>";
	}else{
		$newpassword = openssl_digest($newpass, 'sha512');

		$sql = "UPDATE users SET upass='$newpassword' WHERE upass='$password' AND uid='$id'";

		$query = mysqli_query($conn, $sql);

		if($query){
			echo "<script>alert('Password Changed Successfully!')</script>";
		}
	}

?>