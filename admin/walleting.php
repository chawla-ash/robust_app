<?php include('./includes/head.php'); ?>
<title> Admin Panel </title>
</head>
<?php include('./includes/side.php'); ?>

<div class="container">

<center><h3>Queries by the User</h3></center>

<?php 
	
	include('./includes/config.php');

	$uemail = $_POST['user'];

	$sql = "SELECT * FROM queries WHERE uemail='$uemail'";

	$query = mysqli_query($conn, $sql);


		while($row = mysqli_fetch_array($query)){

	?>
	<div class="card-detailed">
	

	  <h4>Description: <br>
	  <big>
	  <?php echo $row['descript']; ?>
	  </big>
	  </h4>

<div style="text-align: right;">
	 <?php if($row['qstat']=='0'){ ?>
        <a class="btn btn-danger">Un-attended</a>
        <?php	} ?>
         <?php if($row['qstat']=='1'){ ?>
        <a class="btn btn-warning">In Progress</a>
        <?php	} ?>
         <?php if($row['qstat']=='2'){ ?>
        <a class="btn btn-success">Completed</a>
        <?php	} ?>
         <?php if($row['qstat']=='3'){ ?>
        <a class="btn btn-info disabled">Rejected</a>
        <?php	} ?>


	</div>
	</div>
<?php } ?>
<br>
<br>
<center>
		<div class="links">

			<a class="btn btn-success" href="./addbalance.php?mail=<?php echo $uemail; ?>">Add Bonus <i class="fa fa-inr"></i> 20</a>

		</div>
	</center>	


</div>

<?php include('./includes/foot.php'); ?>