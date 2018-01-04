<?php


	$name = $_POST["name"];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$to = "pjpatidar16@gmail.com";

	$headers = "From: $name \r\n";

	$headers .= "Reply To: $email \r\n";

	$sent = mail($to,$subject,$message,$headers);
	
	if ($sent)
	{
		header("Location: http://localhost:8082/candyworld/index.html");
	} else {
		echo "There has been an error sending your message. Please try later.";
	}
?>
