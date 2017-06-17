<?php
	session_start();
	if(isset($_SESSION['admin'])){
?>


<?php

	$qid = $_GET['id'];
	include('./includes/config.php');

	$userd = "SELECT * FROM queries WHERE qid='$qid'";
//	echo $userd;

	$quser = mysqli_query($conn, $userd);

	while($user = mysqli_fetch_array($quser));
	{
		$uemail = $user['uemail'];
	}

	$status = "2";

	$sql = "UPDATE queries SET qstat='$status' WHERE qid='$qid'";

	$query = mysqli_query($conn, $sql);

	if($query){

		echo "<script>alert('Status Updated!')</script>";
		header("Location: ./home.php");
	}

?>

<?php }else{
	header("Location: ./");
	} ?>