<?php

	$uemail = $_GET['mail'];

	include('./includes/config.php');

	$sql = "SELECT * FROM users WHERE uemail='$uemail'";

	$query = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_array($query)){
		$ubal = $row['ubal'];


		$ubal2 = $ubal + 20;

		$sql2 = "UPDATE users SET ubal='$ubal2' WHERE uemail='$uemail'";

		$query2 = mysqli_query($conn, $sql2);

		if($query2){
			echo "<script>alert('Successfully Added to wallet!');</script>";
			header("Location: ./home.php");
		}

	}

?>