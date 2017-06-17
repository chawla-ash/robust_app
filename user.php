
<?php
	include('./config.php');
	session_start();
	$user = $_SESSION['person'];

	$sql = "SELECT * FROM users WHERE uemail='$user'";
	$query = mysqli_query($conn, $sql);

		while($user = mysqli_fetch_array($query)){
			$uemail = $user['uemail'];
			$uid = $user['uid'];
			$ubal = $user['ubal'];
      $uname = $user['uname'];
      $uimg = $user['uimgname'];
?>


<?php include('./head.php'); ?>
<title><?php echo $user['uname']; ?> - Robust</title>


</head>
<body class="green lighten-2">
<?php include ('./nav.php'); ?><br><br>

<div class="page-wrapper">

	<div class="row">


	 <div class="col s12 l9">

    <h3>Queries</h3>
<?php
	
	$sql2 = "SELECT * FROM queries WHERE uemail='$uemail'";

	$query2 = mysqli_query($conn, $sql2);

	while($row = mysqli_fetch_array($query2)){


?>
    <div class="card horizontal">
      <div class="card-image">
        <img src="./queryimgs/<?php echo $row['imgname']; ?>">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p class="desc"><?php echo $row['descript']; ?></p>
        </div>
        <div class="card-addr">
        <h5>Address: </h5>
        <h6>	
        Street : <?php echo $row['street']; ?><br>
        City : <?php echo $row['city']; ?><br>
        State : <?php echo $row['state']; ?> <br>
        Zip : <?php echo $row['zip']; ?><br> 

        </h6>
        </div>

        <div class="card-stat" style="padding-left: 3%">
        <?php if($row['qstat']=='0'){ ?>
        <a class="waves-effect waves-light btn red">Un-attended</a>
        <?php	} ?>
         <?php if($row['qstat']=='1'){ ?>
        <a class="waves-effect waves-light btn orange">In Progress</a>
        <?php	} ?>
         <?php if($row['qstat']=='2'){ ?>
        <a class="waves-effect waves-light btn green">Completed</a>
        <?php	} ?>
        <?php if($row['qstat']=='3'){ ?>
        <a class="waves-effect waves-light btn disabled blue darken-2">Rejected</a>
        <?php } ?>



        <br><br>
        </div>
      </div>
    </div>
 

<?php } ?>
 </div>

  <div class="col s12 l3">
  <h4>About you</h4>
  <div class="userView2">
      
      <?php if(isset($uimg)){
          ?>

      <a><img class="circle responsive-img" src="user/<?php echo $uimg; ?>"></a><br>
       <?php }else{ ?>
      <a><img class="circle responsive-img" src="user/user.png" ></a><br>
      <?php } ?>
      <a><span class="white-text name"><?php echo $uname; ?></span></a><br>
      <a><span class="white-text email"><?php echo $uemail; ?></span></a>
      <br>
      <a><span class="white-text email">Wallet Balance: <i class="fa fa-inr"></i> <?php echo $ubal; ?></span></a>
      <br><br>
      <a class="waves-effect waves-light btn teal" href="userprofile.php?id=<?php echo $uid; ?>"> Edit Profile</a>
      <br>
    </div>
    <br>
    <div class="card">
    <h5 class="center" style="padding-top: 4%;">About Wallet</h5>
        <center><i class="fa fa-inr fa-3x"></i></center>
            <div class="card-content">
              <p> After every 4 successful queries completion, you shall receive a gift of  <i class="fa fa-inr"></i> 10 from us as a reward of being a reliable and proud citizen of the Country. </p>
            </div>
     </div>

    </div>

  </div>
</div>	

</div>
<?php include('./footer.php'); ?>
<?php } ?>