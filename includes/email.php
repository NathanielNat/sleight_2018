<?php

require 'session.php';
require 'connection.php';
require 'session_variables.php';
include 'filldashboard.inc.php';


if (isset($_POST['submit'])) {
require '../PHPMailerAutoload.php';

$custo_id  = $_POST['cust_id'];
$art_id = $_SESSION['user_id'];
$tsk_id = $_POST['tsk_id'];
$cust_name = artdash($custo_id);
$art_name  = filldash($art_id);


$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug outputx

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;                            // Enable SMTP authentication
//$mail->SMTPAuth = false;
$mail->Username = 'psalmnat@gmail.com';                 // SMTP username
$mail->Password = '!Nathaniel1';                           // SMTP password
// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('psalmnat@gmail.com', 'Sleight');
$mail->addAddress('nat.agbenyenu@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');                // Name is optional
$mail->addReplyTo('psalmnat@gmail.com');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content=width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Email</title>

    <style>
        body {
            font-family: sans-serif;
        }

        * {
            letter-spacing: 1px;
        }

        .container {
            max-width: 600px;
            padding: 0px 15px;
            margin: 0px auto;
        }

        .img-resize {
            max-height: 100px;
            display: block;
            margin: 0px auto;
        }

        .user-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            float: left;
            margin-right: 40px;
        }

        .info {
            display: table-cell;
        }

        .info .lead {
            font-size: 18px;
            margin: 0px;
        }

        .info hr {
            border-top: 1px solid #e7e7e7;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .info h4 {
            font-weight: normal;
            font-size: 18px;
        }

        .info ul {
            padding-left: 0px;
            list-style: none;
        }

        .info ul li>p:first-child {
            float: left;
            margin-right: 15px;
        }

        .info ul li>p.content {
            display: table-cell;
        }
    </style>
</head>
<body>

<div class='container'>

        <div class='email-details'>

            <div class='info'>
                <p class='lead'>Sorry $cust_name, your job request to  $art_name has been cancelled. Try anothrer artisan.</p>
              </div>
              </div>

</body>
</html>";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    // echo 'Message has been sent';
    $sq = $conn->query("DELETE FROM task where id = $tsk_id");
    header("location:../artisan_dashboard.php");
}



exit();

}
?>
