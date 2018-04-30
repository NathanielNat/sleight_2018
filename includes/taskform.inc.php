<?php
require 'session.php';
require 'session_variables.php';
require 'connection.php';

    /// submit form info into database
if (isset($_POST['submit'])) {
 
 $art_id = $_POST['artisan_id'];
 $loc = $_POST['task_loction'];
 $descr = $_POST['descr'];
 $tsk_dist = $_POST['district'];
 $created_on =date('Y-m-d');
 $date_crt = $_POST['due'];
 // $scheduled = date_time_set($date_crt, 00, 00, 00);
 $cust_id = $_SESSION['user_id'];
 $completed= 0;
  

  $sqln = $conn->prepare("INSERT INTO task (location, district, description,created_at, scheduled_date,completed,customer_id,artisan_id) VALUES (:loc,:tsk_dist,:descr,:created_on,:date_crt,:completed,:cust_id,:art_id)");

 $sqln->bindParam(':loc',$loc);
 $sqln->bindParam(':descr',$descr);
 $sqln->bindParam(':tsk_dist',$tsk_dist);
 $sqln->bindParam(':created_on',$created_on);
 $sqln->bindParam(':date_crt', $date_crt);
 $sqln->bindParam(':cust_id',$cust_id);
 $sqln->bindParam(':art_id',$art_id);
 $sqln->bindParam(':completed',$completed);

 $sqln->execute();
header("Location: ../user_dashboard.php");
//exit();

}
    ?>
