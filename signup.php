<?php
  // include_once 'includes/dbh.php';
  include 'includes/users.php';
  include 'includes/connection.php';
 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Sleight | Sign Up </title>
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

    <!-- Js files -->
    <script src="js/jquery.js" type="text/javascript"></script>
              <script src="js/bootsrap.min.js"></script>
              <script src="js/custom.js"></script>



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
        <a class="nav-link" href="login.php">Login</a>
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


</div>
     <a href="index.php"><img src="img/sleightcol.png" class="img-fluid navbar-brand" width="150" height="68"></a>
        <span class="error">  <?php if(isset($_GET['error'])){ echo $_GET['error']; }?></span>
         <h5 class="mb-4">Create your Sleight account  </h5>


         <form action="includes\signup.inc.php" method="POST">
             <div class="form-row">
               <div class="form-group col-md-12 snp">
                <label for="inputText1">Full Name</label>
                <input type="text" class="form-control form-control-lg" id="inputText1" name="name" required>
              </div>


             <div class="form-group col-12">
               <label for="exampleInputEmail1">Email address</label>
               <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
               </div>

             <div class="form-group col-12">
              <label for="inputNumber">Tel</label>
              <input type="text" class="form-control form-control-lg" id="inputNumber" placeholder="+233" name="tel" required>
            </div>

           <div class="form-group col-12 col-lg-6">
             <label for="exampleInputPassword1">Password</label>
             <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="pwd" required>
           </div>

           <div class="form-group col-1 col-lg-6">
             <label for="exampleInputPassword1">Confirm</label>
             <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="confirm_pwd" required>
           </div>

           <div class="from-group col-12 py-3 text-center">
             <button type="submit" class="btn btn-sleight-arti" name="submit">Create Account</button>

           </div>
           <div class="from-group col-12 text-center">
         <small class="form-text text-muted">By signing up, you agree to our <span><a href="">Terms</a></span> &amp; <a href="">Privacy Policy</a>.</small>
         </div>
           </div>
         </form>

         <div class=" text-center my-5">
         <p>Do you have an account with us? <a href="login.php">Log in</a></p>
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
