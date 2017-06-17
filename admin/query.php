<?php
	session_start();
	if(isset($_SESSION['admin'])){
?>

<?php

	$qid = $_GET['id'];
	include('./includes/config.php');
?>
<?php include('./includes/head.php'); ?>
<title> Admin Panel </title>
</head>
<?php include('./includes/side.php'); ?>

<div class="container">
<h2>Query Details</h2>

	<?php
		$sql = "SELECT * FROM queries WHERE qid='$qid'";
		$query = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_array($query)){

	?>
	<div class="card-detailed">
	<div class="row">
	<div class="col-md-4">
		<img src="../queryimgs/<?php echo $row['imgname']; ?>" class="img-responsive">
	</div>
	<div class="col-md-8">

	  <h4>Description: <br>
	  <big>
	  <?php echo $row['descript']; ?>
	  </big>
	  </h4>

	</div>
	</div>

		<div class="addr">
		<h3><u>Address</u></h3>

		<h4>Street: <big><?php echo $row['street']; ?></big></h4>

		<h4>City: <big><?php echo $row['city']; ?></big></h4>

		<h4>State: <big><?php echo $row['state']; ?></big></h4>

		<h4>Pin Code: <big><?php echo $row['zip']; ?></big></h4>

		<h4>Place: <big><?php echo $row['addr']; ?></big></h4>
		</div>
	
	<center>
		<div class="links">

		<a class="btn btn-success" href="./done.php?id=<?php echo $row['qid']; ?>">Mark As Done</a>

		<a class="btn btn-warning" href="./pending.php?id=<?php echo $row['qid']; ?>">Pending</a>
		<br><br>

		<a class="btn btn-danger" href="./reject.php?id=<?php echo $row['qid']; ?>">Decline</a>
		<br><br>

		<a class="btn btn-default" href="./notify.php?id=<?php echo $row['qid']; ?>">Notify</a>

		</div>
	</center>	


	
	</div>
<?php } ?>
</div>

<?php include('./includes/foot.php'); ?>
<?php }else{
	header("Location: ./");
	} ?>