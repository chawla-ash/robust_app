<?php
	session_start();
	 if(isset($_SESSION['person'])){
    $user = $_SESSION['person'];
  
?>
<?php include('./head.php'); ?>
</head>
<body class="green lighten-2">
<?php include ('./nav.php'); ?><br><br>


<div class="page-wrapper" style="height: 700px;">

	<ul class="collection">
    <li class="collection-item avatar">
      <i class="material-icons circle red">power_settings_new</i>
      <span class="title">Successful</span>
      <p>You can now use the system.. <br>
      <a href="./" class="secondary-content"><i class="material-icons">play_arrow</i></a>
      </p>
    </li>
    </ul>

</div>
<?php include('./footer.php'); ?>

<?php  } ?>
