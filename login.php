<?php
  include_once 'includes/dbh.php';
  include 'users.php';
 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Sleight | Login </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- custom -->
    <link rel="stylesheet" href="css/style.css" >
    <!-- custom -->

    <!-- google fonts used -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- google fonts used -->


  </head>
  <body>



 <!-- new login form design -->
 <section class="sleight-porpu">
   <div class="blu-bck-login"></div>
   <div class="container">
     <div class="row">
       <div class="col-lg-6">
       </div>
       <div class="col-lg-6">
         <div class="row">
            <div class="col-12 text-center mt-5">
            <a href="index.php"><img src="img/sleightcol.png" class="img-fluid navbar-brand" width="150" height="68"></a>
              <h5 class="mb-3">Welcome Back <span> | <small>Login</small> </span>  </h5>
            </div>
         </div>
         <form action="">
           <div class="form-group">
             <label for="exampleInputEmail1">Email address</label>
             <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Password</label>
             <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
           </div>

           <div class="from-group py-3 text-center">
             <button type="submit" class="btn btn-sleight-arti">login</button>
             <p  class="text-center pt-3"><small><a href="#">Forgot Your Password?</a> </small></p>
           </div>
         </form>

         <div class=" text-center my-5">
           <p>New to Sleight? <a href="signup.php">Sign up</a></p>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- new login form design -->







</body>
</html>
