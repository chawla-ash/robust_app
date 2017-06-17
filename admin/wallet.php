<?php include('./includes/head.php'); ?>
<title> Admin Panel </title>
</head>
<?php include('./includes/side.php'); ?>

<div class="container">

<center>

<h3>Select a User
<br><small>Check if user has accomplished 4 successful queries. Add balance then.</small>
</h3>


	<form action="./walleting.php" method="POST">

	<select name="user">

	<?php
		include('./includes/config.php');

		$sql = "SELECT * FROM users ORDER BY uname ASC";

		$query = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_array($query)){
			$uemail = $row['uemail'];
			?>

			<option value="<?php echo $uemail; ?>"><?php echo $uemail; ?></option>

		<?php
	}
	?>


	</select>
<br><br>
	<input type="submit" value="Get User Details" class="btn btn-primary">

	</form>


</center>
</div>

<?php include('./includes/foot.php'); ?>