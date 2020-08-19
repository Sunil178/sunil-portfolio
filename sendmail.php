
<?php
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
$mail = new PHPMailer;
$name = $_POST['name'];
$email = $_POST['email'];
$mobile= $_POST['mobile'];
$message = $_POST['message'];
	
$mail->setFrom($email);
$mail->addAddress('annupoddar444@gmail.com');
$mail->Subject = 'from portfollio '.$name;
$mail->Body = $message;
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;

//Set your existing gmail address as user name
$mail->Username = 'annupoddar444@gmail.com';

//Set the password of your gmail address here
$mail->Password = 'krish09na';
if(!$mail->send()) {
  echo 'Email is not sent.';
  echo 'Email error: ' . $mail->ErrorInfo;
} else {
  echo 'Email has been sent.';
}
?>