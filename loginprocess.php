<?php
//conection
require 'includes/connection.php';

//sql query

  $stmt  = $conn->prepare("INSERT INTO users (email,password) VALUES (:email,:password)");

// Assigning values to the varaibles

$email = $_POST['email'];
$password = $_POST['password'];


// setting parameter
$stmt->bindParam(':email',$email);
$stmt->bindParam(':password',$password);
//
//execution statement
$stmt->execute();


header('Location:customer_dashboard.php')

 ?>

//anthentication of user
 <?php
// $message="";
// if(count($_POST)>0) {
//
// 	$result = $conn->("SELECT * FROM users WHERE user_name='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
// 	$count  = mysqli_num_rows($result);
// 	if($count==0) {
// 		$message = "Invalid Username or Password!";
// 	} else {
// 		$message = "You are successfully authenticated!";
// 	}
// }
?>
