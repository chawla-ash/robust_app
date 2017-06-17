<?php

	include('./config.php');


        $old = "SELECT * FROM users";
        $user = mysqli_query($conn, $old);

        while($row = mysqli_fetch_array($user)){
            $emailold = $row['uemail'];
        }

   
  if($emailold == $_POST['email']){
  	echo "<script>alert('This email already exists! Please login to continue')</script>";
  	header("Location: ./signup.php");
  }else{


	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$status = "0";

	$pass = openssl_digest($password, 'sha512');

	$sql = "INSERT INTO users (uname, uemail, uphone, upass, status) VALUES ('$name', '$email', '$phone', '$pass','$status')";

	$query = mysqli_query($conn, $sql);


	$body = "You are one step away from a cleanliness revolution... just click link below to verify your account connect to us.";

	$body .="http://robust.esy.es/verify.php?email=".$email."&id=".$pass;


	
$headers = 'From: Robust <helpdesk@robut.esy.es>' . PHP_EOL .
    'Reply-To: Robust <helpdesk@robut.esy.es>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();


	if($query){
			echo "Records added successfully.";
			

			mail($email, 'Verify your identity', $body, $headers);

			header("location: ./pending.php");
	} else {
		echo("Errorcode: " . mysqli_error($conn));
	}

	}


?>