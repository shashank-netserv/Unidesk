<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
 session_start();


$name='';
$email='';
$mobile='';
// $subject='';
$message='';

/* Get variables from post form data */
if(isset($_POST['name'])){
$name=$_POST['name'];
}

if(isset($_POST['email'])){
$email=$_POST['email'];
}

if(isset($_POST['mobile'])){
$mobile=$_POST['mobile'];
}
// if(isset($_POST['subject'])){
// $subject=$_POST['subject'];
// }


if( @$_POST['message'] !==""){
$message= @$_POST['message'];
}

//echo $message;
/*message construction*/
/* Your Custom Text : Variable recieved*/
$message="<html><body>
<p>Name : $name</p>
<p>Contact Number : $mobile</p>
<p>Email : $email</p>
<p>Message : $message</p>
<body></html>";
$mail = new PHPMailer(true);
$mail2 = new PHPMailer(true);
try {
    $mail->SMTPDebug = 0;               // Enable verbose debug output
    $mail->isSMTP();                     // Send using SMTP
    $mail->Host='ssl://smtpout.secureserver.net';   // Set the SMTP server to send through
    $mail->SMTPAuth= true;      // Enable SMTP authentication
    $mail->Username='info@rashmicreations.com';   // SMTP username
    $mail->Password='Veda@567234';     // SMTP password
    $mail->SMTPSecure = "";    // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port= 465;  // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Recipients
    $mail->setFrom('info@rashmicreations.com', $name);
    $mail->addAddress('info@rashmicreations.com', $name);   
    $mail->addCC('shashank8652@gmail.com', $name);
    $mail->isHTML(true);
    $mail->Subject = $name. 'From shashank singh';
    $mail->Body    = $message;
    $mail->send(); 
    $mail2->SMTPDebug = 0;               // Enable verbose debug output
    $mail2->isSMTP();                     // Send using SMTP
    $mail2->Host='ssl://smtpout.secureserver.net';   // Set the SMTP server to send through
    $mail2->SMTPAuth= true;      // Enable SMTP authentication
    $mail2->Username='info@rashmicreations.com';   // SMTP username
    $mail2->Password='Veda@567234';     // SMTP password
    $mail2->SMTPSecure = "";    // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail2->Port= 465;  // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Recipients
    $mail2->setFrom('info@rashmicreations.com', $name);
    $mail2->addAddress($email, $name);
    $mail2->isHTML(true);
    $mail2->Subject = $name. 'Thank you for Message';
    $mail2->Body    = 'This is for Sender Mail';
    $mail2->send(); 

    echo '<script language="javascript">';
    echo 'alert("Thank You. We will contact you soon.")';
    echo '</script>';
    echo '<script language="JavaScript">window.location.href ="index.php"</script>';
}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>
