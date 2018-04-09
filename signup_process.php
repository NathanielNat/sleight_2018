<?php
//conection
require 'includes/connection.php';

//sql query

  $stmt  = $conn->prepare("INSERT INTO users (email,password) VALUES (:email,:password)");

// Assigning values to the varaibles

$firstname = $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email = $_POST['email'];
$tel =$_POST['tel'];
$password = $_POST['password'];



// setting parameter
$stmt->bindParam(':email',$email);
$stmt->bindParam(':password',$password);
//
//execution statement
$stmt->execute();

//anthentication of user
$message="";

header('Location:customer_dashboard.php')

 ?>
