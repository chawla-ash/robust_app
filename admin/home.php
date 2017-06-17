<?php
	session_start();
	if(isset($_SESSION['admin'])){
?>
<?php include('./includes/head.php'); ?>
<title> Admin Panel </title>
</head>
<body>
<?php include('./includes/side.php'); ?>

<div class="container">
<h2 style="text-align: center;">Admin Dashboard</h2> 









<h2>Details of Your Site</h2>
	<div class="tabbed content">
		
		<div class="tabular details">

		<center>
			<section id="auth-button"></section><br>
			<section id="view-selector"></section><br>
			<section id="timeline"></section>
		</center>
		<br>


		</div>
		</div>

<br>
<div class="row">
	<div class="col-md-6">
	<div class="card" id="card1">
	<?php 
	include('./includes/config.php');

		$queries = "SELECT * FROM queries";
		$exequeries = mysqli_query($conn, $queries);

		$ques = mysqli_num_rows($exequeries);

	?>
	<h3>Queries<font style="float:right; color: white;"><?php echo $ques; ?></font></h3>
	</div>	
	</div>
	<div class="col-md-6">
	<div class="card" id="card2">
	<?php

		$users = "SELECT * FROM users";
		$exeusers = mysqli_query($conn, $users);

		$user = mysqli_num_rows($exeusers);

	?>
	<h3>Users<font style="float:right; color: white;"><?php echo $user; ?></font></h3>
	</div>	
	</div>

</div>

<h3 style="text-align: center;">Queries</h3>
<table class="table table-striped">

<thead>
<th>Sr. no</th><th>Locality</th><th>City</th><th>Pincode</th><th>Action</th><th>Status</th>
</thead>
<tbody>
<?php
	

	$sql = "SELECT * FROM queries ORDER BY qid DESC";
	$query = mysqli_query($conn, $sql);

	static $srno = 1;

	while($row = mysqli_fetch_array($query)){
	
?>

<tr>
<td><?php echo $srno; ?></td><td><?php echo $row['street']; ?></td><td><?php echo $row['city']; ?></td><td><?php echo $row['zip']; ?></td><td><a href="./query.php?id=<?php echo $row['qid']; ?>" class="btn btn-default">More</a></td>
<td>


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

</td>
</tr>

<?php 
	$srno++;

} ?>

</tbody>

</table>



</div>



<script>
(function(w,d,s,g,js,fjs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(cb){this.q.push(cb)}};
  js=d.createElement(s);fjs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fjs.parentNode.insertBefore(js,fjs);js.onload=function(){g.load('analytics')};
}(window,document,'script'));
</script>

<script>
gapi.analytics.ready(function() {

  // Step 3: Authorize the user.

  var CLIENT_ID = '1042132500425-jp3pqll37mlc7li3pfc5il44duj71sb4.apps.googleusercontent.com';
  gapi.analytics.auth.authorize({
    container: 'auth-button',
    clientid: CLIENT_ID,
  });

  // Step 4: Create the view selector.

  var viewSelector = new gapi.analytics.ViewSelector({
    container: 'view-selector'
  });

  // Step 5: Create the timeline chart.

  var timeline = new gapi.analytics.googleCharts.DataChart({
    reportType: 'ga',
    query: {
      'dimensions': 'ga:date',
      'metrics': 'ga:sessions',
      'start-date': '30daysAgo',
      'end-date': 'yesterday',
    },
    chart: {
      type: 'LINE',
      container: 'timeline'
    }
  });

  // Step 6: Hook up the components to work together.

  gapi.analytics.auth.on('success', function(response) {
    viewSelector.execute();
  });

  viewSelector.on('change', function(ids) {
    var newIds = {
      query: {
        ids: ids
      }
    }
    timeline.set(newIds).execute();
  });
});
</script>

<?php include('./includes/foot.php'); ?>
<?php
}else{
	header("Location: ./");
}
?>