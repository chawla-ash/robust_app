<?php 

	include('./config.php');

	$img = $_FILES['img']['tmp_name'];
	$imgname = $_FILES['img']['name'];

	$id = $_POST['id'];

	move_uploaded_file($img, "user/$imgname");

	$sql = "UPDATE users SET uimgname='$imgname' WHERE uid='$id'";

	$query = mysqli_query($conn,$sql);

	if($query){
		echo"<script>alert('Updated your profile!')</script>";
		header("Location: ./user.php");
	}else{
		echo"<script>alert('Failed to update!')</script>";
		
	}

?>