<?php
     // including db congig
     include("config.php");
     //include email file
     include("email.php");


    //get details from phone
    $email = $_GET['email'];

    //fecth info from db using email
    $sql = "SELECT * FROM user WHERE email = '$email' ";
    $result = mysqli_query($connection, $sql);

    if ($data = mysqli_fetch_assoc($result)){
    	print_r($data);
    	$title = "Missing Phone Details";
    	$message = "Your phone was last seen atb location X and Y";
    	$receiver = $data['email'];

    	$info_email = new Email();


    	if($info_email->send($receiver, $title, $message)){
    		echo "Mail sent succcesssfully";
    	}else {
    		echo "Fail to send mail";
    	}
    }
    else{
    	echo "No data found";

    }














?>