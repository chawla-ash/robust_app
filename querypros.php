<?php

	include('./config.php');
	
	$user = $_POST['username'];
	$img = $_FILES['img']['tmp_name'];
	$imgname = $_FILES['img']['name'];

	move_uploaded_file($img, './queryimgs/'.$imgname);

	$descript = $_POST['desc'];


	if($_POST['address']!=''){
	$addr = $_POST['address'];
	}

	if($_POST['street']!=''){
	$street = $_POST['street'];
	}

	if($_POST['city']!=''){
	$city = $_POST['city'];
	}

	if($_POST['state']!=''){
	$state = $_POST['state'];
	}

	if($_POST['zip']!=''){
	$zip = $_POST['zip'];
	}

	if($_POST['country']!=''){
	$country = $_POST['country'];
	}

	$qstat = "0";


	$sql = "INSERT INTO queries(uemail, imgname, descript, addr, street, city, state, zip, country, qstat) VALUES('$user', '$imgname', '$descript','$addr','$street','$city','$state','$zip','$country','$qstat')";

	$query = mysqli_query($conn, $sql);

	if($query){
		echo "<script>alert('Successfully submitted Query!')</script>";
	}else{
		echo "<script>alert('Failed to enter query! Try again!')</script>";
	}
?>