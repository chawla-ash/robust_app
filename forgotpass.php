<?php 

	include('./config.php');


	$email = $_POST['email'];

	 $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 6; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }

    $pass2 = implode($pass);

    $pwd = openssl_digest($pass2, 'sha512');

	$sql = "UPDATE users SET upass='$pwd' WHERE uemail='$email'";

	$query = mysqli_query($conn, $sql);


if($query){

	
	
$headers = 'From: Robust <helpdesk@robut.esy.es>' . PHP_EOL .
    'Reply-To: Robust <helpdesk@robut.esy.es>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();

$body = "Your new password is: ";
$body .= $pass2;


			mail($email, 'Password Recovery', $body, $headers);

			
echo "<script>alert('New password sent via Mail!')</script>";
			header("location: ./pending2.php");	


}else{
	echo "Failed!";
}
?>