<?php
require 'class.phpmailer.php';
require 'class.pop3.php';
require 'class.smtp.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = '';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('');
$mail->addAddress('');               // Name is optional

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = '';
$mail->Body    = 'Email: ' . $_POST['Email'] . '<br/>Name: ' . $_POST['Name'] . '<br/>Message: ' . $_POST['Message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
		exit;
};

header('Location: http://sunnyaqm.com/pages/thankyou.html');
?>
