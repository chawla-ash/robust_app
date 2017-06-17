<?php
	session_start();
	if(isset($_SESSION['admin'])){
?>


<?php

	$qid = $_GET['id'];
	include('./includes/config.php');

	$status = "1";

	$sql = "UPDATE queries SET qstat='$status' WHERE qid='$qid'";

	$query = mysqli_query($conn, $sql);

	if($query){
		echo "Done";
		header("Location: ./home.php");
	}


?>

<?php }else{
	header("Location: ./");
	} ?>