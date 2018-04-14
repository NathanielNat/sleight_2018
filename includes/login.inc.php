<?php

if (isset($_POST['submit'])) {
  include_once 'connection.php';
  $uemail = $_POST['email'];
  $upass = $_POST['password'];
  $hashpass = md5($upass);
    // binding elements


  $sql = "SELECT * from users where user_email = '$uemail' and user_password  = '$hashpass'";
  $q = $conn->query($sql);
  $qCount = $q->rowCount();

  if ($qCount < 1) {
    // checking if user is alreasy i the system.
    $message = "Invalid email address or password";
      echo "<span> '$message';</span>";
    header("Location: ../login.php?error=$message");
      exit();
  }
  else {
      // if user is in
        header("Location: ../user_dashboard.php");
        exit();

  }

}
else {
  header("Location: ../login.php");
}

 ?>
