<?php
include 'session.php';
include 'session_variables.inc.php';
include 'connection.php';

if (isset($_POST[''])){
  
}
if (isset($_POST['submit'])) {
  include 'session_variables.inc.php';
  include 'connection.php';

  $art_type = $_POST['artisan_cat'];
  $skills = $_POST['skills_name[]';
  $district  =$_POST['district'];
  $loc = $_POST['task_loction'];
  $descr = $_POST['descr'];
  $due_date = $_POST['due'];
  $artisan_id = $_POST['artisan_id'];
  $customer_id =$_POST['user_id'];


$sql = $conn->prepare("INSERT INTO tasks(created_at, scheduled_date,location,artisan_cat,task_cat,district,description, customer_id,artisan_id)
VALUES ()");

$sql->bindParam(':artisan_cat',$art_type);
$sql->bindParam(':skills_name',$skills);
$sql->bindParam(':district',$district);
$sql->bindParam(':task_location',$loc);
$sql->bindParam(':decsr',$descr);
$sql->bindParam(':due',$due_date);

header($string)

}


 ?>
