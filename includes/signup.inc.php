<?php
if (isset($_POST['submit'])) {
  include_once 'connection.php';


// assign values to variables
  $uname = $_POST['name'];
  $uemail = $_POST['email'];
  $utel = $_POST['tel'];
  $upass =$_POST['pwd'];
  $confirm = $_POST['confirm_pwd'];
  $created_on =date('Y-m-d');



  // checking if user already exits in the system
  $sql = "SELECT * FROM users WHERE user_email = '$uemail'";
  $q  = $conn->query($sql);
  $q_count = $q->rowCount();

  if ($q_count > 0) {
    $message = "User email already exits. Try another";
    echo "<span class='error'> '$message' </span>";
    header("Location: ../signup.php?error=$message");
  }
  //check if password is correct
elseif ($upass !== $confirm) {
  $message = "Passwords do not match.";
  echo "<span> '$message';</span>";
    header("Location: ../signup.php?error=$message");
}
else {
  // hash password

  $msql = $conn->prepare("INSERT INTO users (user_email,user_password,user_name,user_tel,created_at) VALUES (:email,:pwd,:name,:tel,:created_on )");
  // bind parameters
        $msql->bindParam(':name', $uname);
        $msql->bindParam(':email', $uemail);
        $msql->bindParam(':tel', $utel);
        $msql->bindParam(':pwd', md5($upass));
        $msql->bindParam(':created_on',$created_on);

        //execute sql
        $msql->execute();
        if (success) {
           $message = "Signup successful";
    echo "<span> '$message';</span>";

        }

        header("Location: ../login.php?success=$message");
        exit();
}

}

else {
   header('Location: signup.php');
}
 ?>
