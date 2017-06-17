<?php include('./includes/head.php'); ?>
<title> Admin Panel </title>
</head>
<br>
<body style="background-color: rgba(30,136,229 ,1);color:white">
<div class="container">

<h2 style="text-align: center; margin-top: 5%;">Login to the Dashboard</h2>
<div class="formcontainer">
<form action="./login.php" method="post">

	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control" name="username" placeholder="Enter your Username">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Enter your Password">
	</div>
	<center>
	<input type="submit" class="btn btn-default" value="Enter">
	</center>
</form>
</div>

</div>

<?php include('./includes/foot.php'); ?>