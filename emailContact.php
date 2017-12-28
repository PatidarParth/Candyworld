<?php
$mailpath = 'PHPmailer';
$path = get_include_path();
set_include_path($path . PATH_SEPARATOR . $mailpath);
require('PHPmailer/PHPMailerAutoload.php');


	$name = $_POST["name"];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = "tls";
	$mail->SMTPAuth = true;
	$mail->Username = "pjpatidar16@gmail.com";
	$mail->Password = "basketball4life";

	$mail->setFrom('pjpatidar16@gmail.com');
	$mail->addAddress('pjpatidar16@gmail.com');     // Add a recipient

	$mail->Subject = 'From Candy World Website - ';
  $mail->Body = ' Reply back to ';

  if (!$mail->send())
  {
		echo !extension_loaded('openssl')?"Not Available":"Available";
		echo $mail->Subject;
    echo 'Not sent' . $mail->ErrorInfo;
  }
  else {
    echo 'Sent';
  }
?>
