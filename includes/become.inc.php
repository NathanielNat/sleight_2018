<?php
include 'session.php';
if (isset($_POST['submit'])) {
  include 'session_variables.php';
  include_once 'connection.php';
  include 'tasks.php';


  $uname = $_POST['uname'];
  $uemail = $_POST['umail'];
  $utel = $_POST['utel'];
  $art_type = $_POST['artisan_cat'];
  $skills = $_POST['skills_name[]'];
  $exp_years = $_POST['exp_years'];
  $exp_level = $_POST['exp_level'];
  $district  =$_POST['district'];
  $desc = $_POST['descr'];
 /* code below moves  selected image from the user user dir to the user_pics
directory which contains all profile pictures selected by users.
 */

  $sql =$conn->prepare( "UPDATE users  SET user_email=:uemal, user_name=:uname, user_tel=:utel,       exp_yrs=:exp_years, exp_level=:exp_level, skills=:skills_name[], district=:district, brief=:descr WHERE id= $user_id ");
$msql = $conn-prepare("INSERT INTO  artisan(category,skills,district,exp_yrs,exp_level,brief,user_id)   VALUES(:artisan_cat,:skills_name[],:district,:exp_years ,:exp_level,:descr)");

  $sql->bindParam(':uname', $uname);
  $sql->bindParam(':uemail', $uemail);
  $sql->bindParam(':utel', $utel);
  $sql->bindParam(':artisan_cat', $art_type);
  $sql->bindParam(':exp_years',$exp_years);
  $sql->bindParam(':exp_level',$exp_level);
  $sql->bindParam(':district',$district);
  $sql->bindParam(':descr',$descr);
  $sql->bindParam(':skills_name[]',$skills);

  $sql->execute();
  header("Location: ../artisan_dashboard.php");
}
?>
