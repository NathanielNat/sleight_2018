<?php

include 'connection.php';
$user_id =$_SESSION['user_id'] ;
$sql = "SELECT * from users WHERE id = $user_id";
               $q = $conn->query($sql);
               $q->setFetchMode(PDO::FETCH_ASSOC);

                while ($row = $q->fetch()):

                    $id = $row['id'];
                    $uname =$row['user_name'];
                    $upass = $row['user_password'];
                    $umail = $row['user_email'];
                    // $content = ($row['content']);
                    $image = $row['profile_pic'];
                    $utel = $row['user_tel'];
                    $utype = $row['user_type'];
                    $cat = $row['category'];
                    $dist = $row['district'];
                    $skill = $row['skills'];
                    $exp_yrs = $row['exp_years'];
                    $exp_lvl = $row['exp_level'];
                    $brief = $row['brief'];
                    
                endwhile;


 ?>
