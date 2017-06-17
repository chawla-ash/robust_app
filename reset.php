<?php include('./head.php'); ?>
</head>
<body class="green lighten-2">
<?php include ('./nav.php'); ?><br><br>

<div class="page-wrapper card-panel">

<h3 class="center">Reset your Password</h3>

	<form action="forgotpass.php" method="POST">


    <div class="row">
     	<div class="input-field col s12">
     	 <i class="material-icons prefix">email</i>
          <input id="email1" name="email" type="email" >
         <label for="email1" data-error="wrong" data-success="">Email</label>
        </div>

        <input type="submit" value="Submit" class="waves-effect btn">

       </div>
       </form> 

</div>
<?php include('./footer.php'); ?>
