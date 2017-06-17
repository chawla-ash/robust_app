<?php include('./head.php'); ?>
<title>Contact Us</title>
</head>
<body class="green lighten-2">
<?php include ('./nav.php'); ?><br><br>

<div class="page-wrapper">


<div class="row">
<div class="col l6 s12 card-panel hoverable">
    <form class="col s12" action="./contactus.php" method="POST">
    <h4 class="center">Get in touch</h4>
      <div class="row">
        <div class="input-field col s12">
          <input id="name" type="text" name="name" class="validate">
          <label for="name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
          <textarea id="textarea1" name="msg" class="materialize-textarea"></textarea>
          <label for="textarea1">Message</label>
        </div>
      </div>
      
      <center><input type="submit" class="waves-effect waves-light btn" value="Submit"></center>
      <br>
    </form>
</div>

<div class="col l6 s12" style="padding: 2%;">

<style>
    .google-maps {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>

<div class="google-maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1333.3983458947287!2d72.88920703515633!3d19.04526066416902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf84f9a1d240e5de6!2sVES+Institute+of+Management+Studies+and+Research+(VESIM)!5e0!3m2!1sen!2sin!4v1488809993683" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

</div>


</div>
	

</div>
<?php include('./footer.php'); ?>