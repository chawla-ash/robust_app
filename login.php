<?php 

	include('./config.php');

	$username = $_POST['email1'];
	$password = $_POST['password1'];

	$pass = openssl_digest($password, 'sha512');

	$sql = "SELECT * FROM users WHERE uemail='$username' AND upass='$pass'";


	$query =mysqli_query($conn, $sql);

	/*if($query){
		session_start();
		$_SESSION['person'] = $username; 
		header("Location: ./");
		//echo $_SESSION['person'];
	}*/

		$result = mysqli_num_rows($query);

	if($result==1){
	while($row = mysqli_fetch_array($query)){

			if($row['status']=="1"){
				session_start();
				$_SESSION['person'] = $username; 
				header("Location: ./");			
			}else{
				header("Location: ./pending.php");
			} 
	}	

	}else{
		header("Location: ./unsuccess.php");
	}

?>