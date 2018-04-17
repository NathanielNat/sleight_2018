<?php
include 'session.php';
if (isset($_POST['submit'])) {

  include_once 'connection.php';

  $uname = $_POST['uname']);
  $uemail = $_POST['uemail'];
  $utel = $_POST['utel'];
  $upass =$_POST['upass'];
  $confirm = $_POST['confirm'];
  $name2 = basename($_FILES['pix']['name']);
  $t_name2 = $_FILES['pix']['tmp_name'];
        $dir='user_pics';

  if(move_uploaded_file($t_name2,$dir."/".$name2)){


  $sql =$conn->prepare("UPDATE users  SET user_email=:uemal, user_name=:uname, user_tel=:utel, user_password=:upass WHERE id= $SESSION['user_id']");

  $sql->bindParam(':uname', $uname);
  $sql->bindParam(':uemail', $uemail);
  $sql->bindParam(':utel', $utel);
  $sql->bindParam(':upass', md5($upass));

  $sql->execute();





} ?>
