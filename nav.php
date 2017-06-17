<?php
  
  session_start();
  if(isset($_SESSION['person'])){
    $user = $_SESSION['person'];
  }

?>
	<nav class="orange lighten-1" style="padding-left: 1%;">
    <div class="nav-wrapper">
      <a href="./" class="brand-logo"><img src="./img/logo.png" class="responsive-img" height="50" width="70"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="./about.php">About</a></li>
        <li><a href="./ngo.php">NGOs</a></li>
        <li><a href="./query.php">Add Query</a></li>
        <li><a href="./contact.php">Contact Us</a></li>
        <?php
        if(isset($_SESSION['person'])){
          ?>
        <li><a href="./user.php">My Account</a></li> 
        <li><a href="./logout.php">Logout</a></li>
        <?php
        }else{
          ?>
          <li><a href="./signup.php">Join</a></li>
          <?php
        }
        ?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="./about.php">About</a></li>
        <li><a href="./ngo.php">NGOs</a></li>
        <li><a href="./query.php">Add Query</a></li>
        <li><a href="./contact.php">Contact Us</a></li>
        <?php
        if(isset($_SESSION['person'])){
          ?>

        <li><a href="./user.php">My Account</a></li> 
        <li><a href="./logout.php">Logout</a></li>
        <?php
        }else{
          ?>
          <li><a href="./signup.php">Join</a></li>
          <?php
        }
        ?>
      </ul>
    </div>
  </nav>