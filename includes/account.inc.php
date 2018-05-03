<?php
include 'session.php';
if (isset($_POST['submit'])) {
  include 'session_variables.php';
  include_once 'connection.php';


  $uname = $_POST['uname'];
  $uemail = $_POST['umail'];
  $utel = $_POST['utel'];
  $upass = $_POST['upass'];
  $old_pass = $_POST['old_pass'];
  $hash_old = md5($old_pass);
  $confirm = $_POST['confirm'];
 /* code below moves  selected image from the user user dir to the user_pics
directory which contains all profile pictures selected by users.
 */
  $u_dir = basename($_FILES['pix']['name']);
  $t_name2 = $_FILES['pix']['tmp_name'];
  $dir='../user_pics';
  $image = 'user_pics/'.$u_dir;

    // code to compare new passwords.
if ($old_pass =='' && $upass =='' && $confirm =='') {

       }
       else{



    $msql = ("SELECT * FROM users WHERE id = $user_id");
   $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);

     while ($row = $q->fetch()):

       if ( $row['user_password']!== $hash_old) {
       $message = "Passwords do not match";
       echo "<span> '$message';</span>";
         header("Location: ../user_account.php?error=$message");
         exit();
    }
    elseif ($upass !== $confirm) {
      $message = " New passwords do not match.";
      echo "<span> '$message';</span>";
        header("Location: ../user_account.php?error=$message");
        exit();
    }

  endwhile;
}

   if((move_uploaded_file($t_name2,$dir."/".$u_dir)) && $upass ){

  $sql =$conn->prepare( "UPDATE users  SET user_email=:uemail, user_name=:uname, user_tel=:utel, profile_pic=:image,user_password=:upass
    WHERE id= :user_id");
 }
  elseif(move_uploaded_file($t_name2,$dir."/".$u_dir)) {

  $sql =$conn->prepare( "UPDATE users  SET user_email=:uemail, user_name=:uname, user_tel=:utel, profile_pic=:image
    WHERE id= :user_id");
 }
 elseif ($old_pass !='' && $upass !='' && $confirm !='') {
   $sql =$conn->prepare( "UPDATE users  SET user_email=:uemail, user_name=:uname, user_tel=:utel, user_password=:upass
    WHERE id= :user_id");
 }

 else{

     $sql =$conn->prepare( "UPDATE users  SET user_email=:uemail, user_name=:uname, user_tel=:utel
    WHERE id= :user_id");
 }

  $sql->bindParam(':uname', $uname);
  $sql->bindParam(':uemail', $uemail);
  $sql->bindParam(':utel', $utel);
   if (!empty($u_dir)) {
    $sql->bindParam(':image',$image);
   }
  $sql->bindParam(':user_id',$user_id);
if ($old_pass !='' && $upass !='' && $confirm !='') {
 $sql->bindParam(':upass',md5($upass));
}

  $sql->execute();
  $message = "Update successful";
  echo "<span> '$message';</span>";
    header("Location: ../user_dashboard.php?success=$message");
  // header("Location: ../user_account.php");
  exit();
}

?>
