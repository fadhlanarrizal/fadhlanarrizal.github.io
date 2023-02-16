<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// create instance of phpmailer
$mail = new PHPMailer(true);

// set mailer to use SMTP
$mail->isSMTP();

// define smtp host
$mail->Host ="smtp.gmail.com";

// enable smtp authentication
$mail->SMTPAuth = true;

// set type of encryption (SSL/TTL)
$mail->SMTPSecure = "tls";

// set port to connect smtp
$mail->Port = 587;

$mail->Username = "fadhlanarrizal@gmail.com";
$mail->Password = "agzhtuusedonlhhh";


$mail->setFrom($email);
$mail->addAddress("fadhlanarrizal@gmail.com");

$mail->Subject = $subject;
$mail->Body = "You received email from {$name}, email: {$email}" . "\n\n" . $message;

$mail->send();

// echo "email was send";

// closing smtp connection
$mail->smtpClose();

?>

<script>
    window.location.href = 'index.html';
    window.alert("Your message was sent...! Thank you.");
</script>
