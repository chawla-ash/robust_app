<?php
	session_start();
	if(isset($_SESSION['admin'])){
		
?>
<?php include('./includes/head.php'); ?>
<title> Admin Panel </title>
</head>
<?php include('./includes/side.php'); ?>

<div class="container">

<h3 style="text-align: center;">App Users</h3>
<table class="table table-striped">

<thead>
<th>Sr. no</th><th>Name</th><th>Status</th><th>Details</th>
</thead>
<tbody>

<?php

	include('./includes/config.php');

	$sql = "SELECT * FROM users ORDER BY uid DESC";
	$query = mysqli_query($conn, $sql);
	static $sr = 1;


	while($row = mysqli_fetch_array($query)){
		
?>
<tr>
<td><?php echo $sr; ?></td><td><?php echo $row['uname'] ?></td><td><?php echo $row['status']; ?></td><td><a class="btn btn-primary" href="./user.php?id=<?php echo $row['uid']; ?>">Know More</a></td>
</tr>
<?php 
	$sr++; 
}
 ?>

</tbody>

</table>


<div class="note" style="text-align: right;">

<h5>Note: <big> 0 Stands for Unverified Accounts and 1 Stands for Verified Accounts </big></h5>
</div>
</div>



<?php include('./includes/foot.php'); ?>
<?php
}else{
	header("Location: ./");
}
?>