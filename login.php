
<!doctype html>]
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


<!-- scripts -->

<script src="js/jquery.js" type="text/javascript"></script>

 <script src="js/bootsrap.min.js"></script>



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

      <script>
        // toastr.info('Are you the 6 fingered man?');
      </script>

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
          <span class="error">
           <?php if(isset($_GET['error'])): ?>
    <div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><?= $_GET['error'];?></strong>
</div>

          <?php endif; ?>

              <?php if(isset($_GET['success'])): ?>
    <div class="alert alert-primary alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><?= $_GET['success'];?></strong>
</div>

          <?php endif; ?>
            </span>

     <a href="index.php"><img src="img/sleightcol.png" class="img-fluid navbar-brand" width="150" height="68"></a>
       <h5 class="mb-3"><span><i class="fa fa-user"></i>  Welcome  | <small>Login</small> </span>  </h5>


  <form action="includes/login.inc.php" method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password" required>
    </div>

    <div class="from-group py-3 text-center">
      <button type="submit" class="btn btn-sleight-arti" name="submit">login</button>

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

<!-- <script>
  ('#btn').click(function(){
      swal("I am here");
      swal("Here's the title!", "...and here's the text!");
  });
</script> -->
</html>
