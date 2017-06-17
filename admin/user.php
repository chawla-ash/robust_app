<?php
	session_start();
	if(isset($_SESSION['admin'])){
		
?>
<?php include('./includes/config.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM users WHERE uid='$id'";

	$query = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_array($query)){

		$name = $row['uname'];
		$img = $row['uimgname'];
		$street = $row['street'];
	
?>

<?php include('./includes/head.php'); ?>
<title> Admin Panel </title>
</head>
<?php include('./includes/side.php'); ?>

<div class="container">
<br>


	<div class="card-detailed">

	<div class="row">
	<div class="col-md-4">
		<img src="../user/<?php echo $img; ?>" class="img-responsive">
	</div>
	<div class="col-md-8">

	  <h3>Description of User </h3>

	  	<h5>Name: <big><?php echo $name; ?></big></h5>
	  	<h5>Email: <big><?php echo $row['uemail']; ?></big></h5>

	  	<br>

	  	<h5>Wallet balance: <big><i class="fa fa-inr"></i> <?php echo $row['ubal']; ?></big></h5>



	</div>
	</div>

	</div>


</div>
<?php } ?>
<?php include('./includes/foot.php'); ?>
<?php
}else{
	header("Location: ./");
}
?>