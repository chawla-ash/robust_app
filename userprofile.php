<?php
	include('./config.php');

	$uid = $_GET['id'];

	session_start();
	if(isset($_SESSION['person'])){

	$sql = "SELECT * FROM users WHERE uid='$uid'";
	$query = mysqli_query($conn, $sql);

		while($user = mysqli_fetch_array($query)){
			$uemail = $user['uemail'];
			$uid = $user['uid'];
			$ubal = $user['ubal'];
      $uname = $user['uname'];
?>
<?php include('./head.php'); ?>
<title><?php echo $uname; ?> - Robust App</title>
</head>
<body class="green lighten-2">
<?php include ('./nav.php'); ?><br><br>

<div class="page-wrapper">

<div class="card-panel hoverable">
<h4 class="center">Change the Profile Image</h4>
<form class="col s12 l4" action="./useredit.php" method="POST" enctype="multipart/form-data">

	 <div class="file-field input-field">
      <div class="btn">
        <span>Profile Image</span>
        <input type="file" name="img">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
    </div>

    <input type="hidden" name="id" value="<?php echo $uid; ?>">

    <input type="submit" class="waves-effect btn" value="submit">

</form>
</div>

<div class="card-panel hoverable">
<h4 class="center">Change your Password</h4> 

<form class="col s12 l4" action="./passreset.php" method="POST">

 <div class="input-field col s12">
          <input type="password" id="lastpassword" name="lastpassword">
          <label for="lastpassword">Enter last Password</label>
        </div>

 <div class="input-field col s12">
          <input type="password" id="password" name="password">
          <label for="password">New Password</label>
        </div>


<div class="input-field col s12">
          <input type="password" id="cpassword" name="cpassword">
          <label for="cpassword">Re-enter Password</label>
        </div>

<input type="hidden" name="id" value="<?php echo $uid; ?>">

<input type="submit" class="waves-effect btn" value="Submit">
</div>

</form>
</div>

</div>
<?php include('./footer.php'); ?>
<?php } } ?>