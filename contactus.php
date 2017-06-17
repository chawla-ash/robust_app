<?php 


$headers = "From: helpdesk@roubust.esy.es\r\n";

$name = $_POST['name'];
$email = $_POST['email'];

$msg = $_POST['msg'];

$content = "Hello this is ". $name ;
$content .="\nWith email id ". $email;
$content .="\nWant to convey that :" .$msg; 

	if(mail('approbust@gmail.com', 'Message from App', $content, $headers) AND mail('rohitsachdev.reso@gmail.com', 'Message from App', $content, $headers)){

	  echo "<script>alert('Mail was sent !');</script>";
      echo "<script>document.location.href='contact.php'</script>";
      }
      else
      {
      echo "<script>alert('Mail was not sent. Please try again later');</script>";
      }

?>