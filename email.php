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


$fname='';
$email='';
$cname='';
$number='';
$designation='';
$services='';
$message='';

/* Get variables from post form data */
if(isset($_POST['fname'])){
$fname=$_POST['fname'];
}

if(isset($_POST['email'])){
$email=$_POST['email'];
}

if(isset($_POST['cname'])){
    $cname=$_POST['cname'];
    }

if(isset($_POST['number'])){
$number=$_POST['number'];
}

if(isset($_POST['designation'])){
    $designation=$_POST['designation'];
    }

if(isset($_POST['services'])){
$services=$_POST['services'];
}


if( @$_POST['message'] !==""){
$message= @$_POST['message'];
}

//echo $message;
/*message construction*/
/* Your Custom Text : Variable recieved*/
$message="<html><body>
<p>Name : $fname</p>
<p>Company Name : $cname</p>
<p>Contact Number : $number</p>
<p>Email : $email</p>
<p>Designation : $designation</p>
<p>Services : $services</p>
<p>Message : $message</p>
<body></html>";
$mail = new PHPMailer(true);
$mail2 = new PHPMailer(true);
try {
    $mail->SMTPDebug = 0;               // Enable verbose debug output
    $mail->isSMTP();                     // Send using SMTP
    $mail->Host='p3plzcpnl504463.prod.phx3.secureserver.net';   //ssl://smtpout.secureserver.net Set the SMTP server to send through
    $mail->SMTPAuth= true;      // Enable SMTP authentication
    $mail->Username='test@unideskpartners.com';   // SMTP username
    $mail->Password='Welcome@2024';     // SMTP password
    $mail->SMTPSecure = "";    // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port= 465;  // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Recipients
    $mail->setFrom('test@unideskpartners.com', $fname);
    $mail->addAddress('test@unideskpartners.com', $fname);   
    $mail->addCC('shashank8652@gmail.com', $fname);
    $mail->isHTML(true);
    $mail->Subject = $fname. 'From shashank singh';
    $mail->Body    = $message;
    $mail->send(); 
    $mail2->SMTPDebug = 0;               // Enable verbose debug output
    $mail2->isSMTP();                     // Send using SMTP
    $mail2->Host='p3plzcpnl504463.prod.phx3.secureserver.net';   //ssl://smtpout.secureserver.net Set the SMTP server to send through
    $mail2->SMTPAuth= true;      // Enable SMTP authentication
    $mail2->Username='test@unideskpartners.com';   // SMTP username
    $mail2->Password='Welcome@2024';     // SMTP password
    $mail2->SMTPSecure = "";    // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail2->Port= 465;  // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Recipients
    $mail2->setFrom('test@unideskpartners.com', $fname);
    $mail2->addAddress($email, $fname);
    $mail2->isHTML(true);
    $mail2->Subject = $fname. 'Thank you for Message';
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
