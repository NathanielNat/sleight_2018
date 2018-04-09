<?php
  include_once 'includes/dbh.php';
  include 'includes/users.php';
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


    <!--navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sleight-headbg fixed-top">
     <div class="container">
    <a href="index.php"><img src="img/sleight.png" class="img-fluid navbar-brand" width="104" height="68"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">How It Works</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>

      <li class="nav-item">
        <a class="btn btn-sleight" href="signup.php">Signup</a>
      </li>
    </ul>
    </div>
    </div>
    </nav>

    <!--hear image  -->
<section class="login-head">
  <div class="container">
    <div class="row">
    </div>
  </div>
</section>
<!--hear image  -->

<!--form design -->
<section>
<div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card-cx-login">
          <div class="card-body">
     <a href="index.php"><img src="img/sleightcol.png" class="img-fluid navbar-brand" width="150" height="68"></a>
       <h5 class="mb-3"><span>Welcome Back  | <small>Login</small> </span>  </h5>


  <form action="loginprocess.php" method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
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
</div>
</div>
</div>
</section>

<!--Form design -->
</body>
</html>
