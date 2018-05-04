<?php
require 'session.php';
require 'session_variables.php';
require 'connection.php';
include 'filldashboard.inc.php';

    /// submit form info into database
if (isset($_POST['submit'])) {

 $art_id = $_POST['artisan_id'];
 $loc = $_POST['task_loction'];
 $descr = $_POST['descr'];
 $tsk_dist = $_POST['district'];
 $created_on =date('Y-m-d');
 $date_crt = $_POST['ddate'];
 //$scheduled = strftime();
 // $scheduled = date_time_set($date_crt, 00, 00, 00);
 $cust_id = $_SESSION['user_id'];


 // strftime('%y-%m-%d %I:%M' [, $timestamp]);

  $dd = str_replace("/", "-", $date_crt);

 $completed= 0;


 $cust_name = artdash($cust_id);
 $art_name  = filldash($art_id);

 //$d=strtotime("10:30pm April 15 2014");
 // echo "Created date is " . date("Y-m-d h:i:sa", $d);


  $sqln = $conn->prepare("INSERT INTO task (location, district, description,created_at, scheduled_date,completed,customer_id,artisan_id) VALUES (:loc,:tsk_dist,:descr,:created_on,:date_crt,:completed,:cust_id,:art_id)");





 $sqln->bindParam(':loc',$loc);
 $sqln->bindParam(':descr',$descr);
 $sqln->bindParam(':tsk_dist',$tsk_dist);
 $sqln->bindParam(':created_on',$created_on);
 $sqln->bindParam(':date_crt',  $dd);
 $sqln->bindParam(':cust_id',$cust_id);
 $sqln->bindParam(':art_id',$art_id);
 $sqln->bindParam(':completed',$completed);

 $sqln->execute();

header("Location: ../user_dashboard.php");


require '../PHPMailerAutoload.php';


$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug outputx

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
        <img src='http://localhost/projects/sleight_2018/img/sleightcol.png'  class='img-resize'>
          <img src='http://localhost/projects/sleight_2018/img/carpenter.jpg'  class='img-resize'>
        <div class='email-details'>
            <img src='../img/path2.jpg'  class='user-img'>
            <div class='info'>
                <p class='lead'>Hello $art_name,  your services are being requird by  $cust_name. Read the detials below.</p>
                <hr>

                <h4>Details</h4>
                <ul>
                    <li>
                        <p>Date and Time</p>
                        <p class='content'>$date_crt</p>
                    </li>
                    <li>
                        <p>Description</p>
                        <p class='content'>$descr</p>
                    </li>
                    <li>
                        <p>Location</p>
                        <p class='content'>$loc</p>
                    </li>
                </ul
</body>
</html>";
//$mail->addAttachment("../img/sleightcol.png");
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}



exit();

}
    ?>
