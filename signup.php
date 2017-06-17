<?php include('./head.php'); ?>
<title>Sign up</title>
</head>
<body class="green lighten-2">
<?php include ('./nav.php'); ?><br><br>

<div class="page-wrapper">
	<div class="row">
	<div class="col s12 l6">

    <div class="card-panel hoverable">

    <h3 class="center-align">Login</h3>

   	<form action="login.php" method="post">

    <div class="row">
     	<div class="input-field col s12">
     	 <i class="material-icons prefix">email</i>
          <input id="email1" name="email1" type="email" >
         <label for="email1" data-error="wrong" data-success="">Email</label>
        </div>

        <div class="input-field col s12">
            <i class="material-icons prefix">vpn_key</i>
        	<input id="password1" name="password1" type="password" >
          <label for="password1">Password</label>
        </div>
    </div>

    <center>
		    <button class="btn green  waves-effect waves-light" type="submit">Login
		    <i class="material-icons right">send</i>
		  </button>
	</center>

    <a href="./reset.php"> Forgot Password? </a>

     </form>
     </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.js"></script>
<!-- Form Validation Scripts -->
<script>

$(document).ready(function (){

    $('#myForm').validate({

        rules: {
            phone: {
                required: true,
                digits: true
            }
        },
        messages: {
            phone: "Enter a valid phone number"
        }
        submitHandler: function(form) {
            form.submit();
         }
    });

});

</script>
	<div class="col s12 l6">

    <div class="card-panel hoverable">

    <h3 class="center-align">Sign Up</h3>

<div class="innerdiv">

   	<form name="myForm" id="myForm" action="reg.php" method="POST">

     <div class="row">	
     	<div class="input-field col s12">
     	 <i class="material-icons prefix">account_circle</i>
          <input id="name" name="name" type="text" required>
          <label for="name">Name</label>
        </div>


        <div class="input-field col s12">
     	 <i class="material-icons prefix">email</i>
          <input id="email" name="email" type="email" required>
           <label for="email" data-error="wrong" data-success="">Email</label>
        </div>
    	
    </div>

    <div class="row">
     	

        <div class="input-field col s12">
            <i class="material-icons prefix">phone</i>
        	<input id="phone" name="phone" type="tel" data-length="10" required>
          <label for="phone" data-error="incorrect" data-success="">Phone Number</label>
        </div>

         <div class="input-field col s12">
            <i class="material-icons prefix">vpn_key</i>
        	<input id="password" name="password" type="password" required>
          <label for="password">Password</label>
        </div>
    </div>



    <center>
		    <button class="btn green  waves-effect waves-light" type="submit">Sign Up
		    <i class="material-icons right">send</i>
		  </button>
	</center>

     </form>
     </div>
     </div>
    </div>

    </div>
</div>

<?php include('./footer.php'); ?>
