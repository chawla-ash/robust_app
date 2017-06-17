<?php
	session_start();
	if(isset($_SESSION['admin'])){
?>


<?php

	$qid = $_GET['id'];
	include('./includes/config.php');

	$querystat = "SELECT * FROM queries WHERE qid='$qid'";
	$status = mysqli_query($conn, $querystat);

	while($stat = mysqli_fetch_array($status)){

	$headers = "From: helpdesk@roubust.esy.es\r\n";	

	$body = "Your Query Status for Robust is :";
	if($stat['qstat'] == 1){
		$body .= "Pending";
	}
	if($stat['qstat'] == 2){
		$body .= "Completed";
	}
	if($stat['qstat'] == 3){
		$body .= "Rejected";
	}

		if(mail($stat['uemail'], 'Status Update from Robust', $body, $headers)){
			echo "<script>alert('Mail Sent Successfully')</script>";
			header("Location: ./home.php");
		}else{
			echo "<script>alert('Error Sending Mail')</script>";
			header("Location: ./home.php");
		}

	}


?>

<?php }else{
	header("Location: ./");
	} ?>