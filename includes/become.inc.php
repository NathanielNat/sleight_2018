<?php
include 'session.php';
if (isset($_POST['submit'])) {
  include 'session_variables.php';
  include_once 'connection.php';
  include 'tasks.php';

  $art_type = $_POST['artisan_cat'];
  $skills = join(',',$_POST['skills_name']);
  //$skills ="";
  $exp_years = $_POST['exp_years'];
  $exp_level = $_POST['exp_level'];
  $district  = $_POST['district'];
  $desc = $_POST['descr'];
  $utype = 1;

 /* code below moves  selected image from the user user dir to the user_pics
directory which contains all profile pictures selected by users.
 */


$msql = $conn->prepare("UPDATE users SET category=:art_type, district=:district, skills=:skills,
  exp_years=:exp_yrs, exp_level=:exp_level, brief=:brief, skills=:skills, user_type=:utype WHERE id =:uid");



  $msql->bindParam(':art_type', $art_type);
  $msql->bindParam(':exp_yrs',$exp_years);
  $msql->bindParam(':exp_level',$exp_level);
  $msql->bindParam(':district',$district);
  $msql->bindParam(':brief',$desc);
  $msql->bindParam(':skills',$skills);
  $msql->bindParam(':uid',$user_id);
  $msql->bindParam(':utype',$utype);

  $msql->execute();
  $message = "Update successful. You can now recieve job requests!!!";
  echo "<span> '$message';</span>";
    header("Location: ../artisan_dashboard.php?success=$message");
  // header("Location: ../artisan_dashboard.php");
  exit();



}
?>
