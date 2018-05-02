<?php

include 'connection.php';

function filldash($art_id){
  global $conn;
  $sqlt = "SELECT user_name  FROM users where id = $art_id ";
  $mq =  $conn->query($sqlt);
 return $mq->fetchColumn();

}


function artdash($cust_id){
  global $conn;

  $sqlt  = "SELECT user_name  FROM users where id = $cust_id ";
   $mq =  $conn->query($sqlt);
 return $mq->fetchColumn();
}

function countTotal($cust_id){
global $conn;
$sqlt  = "SELECT COUNT(id) FROM task WHERE customer_id = $cust_id  ";
 $mq =  $conn->query($sqlt);
return $mq->fetchColumn();


}

function countComp($cust_id){
global $conn;
$sqlt  = "SELECT COUNT(id) FROM task WHERE customer_id = $cust_id AND completed = 1 ";
 $mq =  $conn->query($sqlt);
return $mq->fetchColumn();
}

function art_assign($art_id){
global $conn;
$sqlt  = "SELECT COUNT(id) FROM task WHERE artisan_id = $art_id  ";
 $mq =  $conn->query($sqlt);
return $mq->fetchColumn();


}

function art_comp($art_id){
global $conn;
$sqlt  = "SELECT COUNT(id) FROM task WHERE artisan_id = $art_id AND completed = 1 ";
 $mq =  $conn->query($sqlt);
return $mq->fetchColumn();
}


function avg_rate($art_id){
  global $conn;
  $sqlt = "SELECT AVG(rate) FROM task WHERE artisan_id = $art_id AND completed  = 1";
  $mq = $conn->query($sqlt);
  return $mq->fetchColumn();
}




 ?>
