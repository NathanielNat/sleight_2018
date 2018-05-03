<?php
    include('PHPMailer/PHPMailerAutoload.php');

class Email{
  public function send($receiver="", $title="", $message="", $file=""){
    //echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";
    $mail = new PHPMailer;
    $mail->isSMTP();
    //$mail->SMTPDebug = 0;
    //$mail->SMTPAutoTLS = false;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = "snapsnap930@gmail.com";
    $mail->Password = "snapsnap6061";
    $mail->setFrom('snapsnap930@gmail.com', 'Kate Security');
    //$mail->addReplyTo('transfast90@gmail.com', 'transfast');
    $mail->addAddress("{$receiver}");
    $mail->Subject = "{$title}";
    $mail->Body = "{$message}";
    $mail->addAttachment("{$file}");


    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }

  }
}

?>
