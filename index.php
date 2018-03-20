<?php
  include_once 'includes/dbh.php';
  include 'users.php';
 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Sleight | Your No1 Artisan Plartform </title>
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

<!-- home top image -->
<section class="sleight-back">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="display-3"> Your No 1 <span class="slcl">Artisan </span> <br>Plartfrom</h1>
        <p class="lead" >Hire local professionals , hand-picked home services Providers <br> for pretty much anything.</p>
      </div>
    </div>
  </div>
</section>
<!-- home top image -->

<!-- five main categories -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-12 magtop">
        <div class="card">
          <div class="card-body">
            <div class="row">
            <div class="col-6 col-md-4 col-xl-2 text-center my-1 border-right ">
              <a href="#">
                <img src="img/mechanic.svg" alt="mechanic" width="40" height="40" class="mb-2">
                <h6 >Mechanic</h6>
              </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2 text-center my-1 border-right ">
              <a href="#">
                <img src="img/carpenter.svg" alt="Carpenterc" width="40" height="40" class="mb-2">

                <h6 >Carpenter</h6>
              </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2 text-center my-1 border-right ">
              <a href="#">
                <img src="img/cleaner.svg" alt="Cleaning" width="40" height="40" class="mb-2">
                <h6 >Cleaning</h6>
              </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2 text-center my-1 border-right ">
              <a href="#">
                <img src="img/plumbing.svg" alt="plumbing" width="40" height="40" class="mb-2">
                <h6 >Plumbing</h6>
              </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2 text-center my-1 border-right ">
              <a href="#">
                <img src="img/gardening.svg" alt="gardening" width="40" height="40" class="mb-2">
                <h6 >Gardening</h6>
              </a>
            </div>

            <div class="col-6 col-md-4 col-xl-2 text-center my-1 ">
              <a href="#">
                <img src="img/more.svg" alt="view all" width="40" height="40" class="mb-2">
                <h6 >View all</h6>
              </a>
            </div>
        </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- five main categories -->


<!--how itw works  -->
<section class="sleight-mag">
<div class="container">
  <div class="row ">
      <div class="col-12 text-center my-5">
          <h2>How it Works</h2>
          <p>See why Sleight is one of the best friends for exploring the Artisans</p>
      </div>

      <div class="col-md-4 text-center">
            <img src="img/file.svg" alt="search" width="80" height="80" class="mb-1">
          <h4 class="my-3">Find Interested Artisans</h4>
          <p>We're available 7am-11pm and you can easily reschedule online.</p>
      </div>

      <div class="col-md-4 text-center">
            <img src="img/request.svg" alt="request" width="80" height="80" class="mb-1">
          <h4 class="my-3">Reques Instantly</h4>
          <p>We'll confirm your appointment and take care of your request electronically and securely.</p>
      </div>

      <div class="col-md-4 text-center">
        <img src="img/user.svg" alt="user" width="80" height="80" class="mb-1">
          <h4 class="my-3">Your Pro Arrives</h4>
          <p>An experienced, fully-equipped professional will show up on time at your doorstep!</p>
      </div>
  </div>
</div>
</section>
<!--how itw works  -->


<!-- become and Artisan  -->
<section class="sleight-become">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-7">
        <h1 class="display-3">Are you an Artisan</h1>
        <p class="lead">earn extra cash providing services <br> to customers</p>
        <div class="my-5">
  <a href="#" class="btn btn-sleight-arti">Become an Artisan</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- become and Artisan  -->


<!--Popular Artisans  -->
<section class="sleight-porpu">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center my-5">
          <h2>Popular Artisans</h2>
          <p>Explore a wide range of Artisans. You won’t be disappointed</p>
      </div>

      <div class="col-12">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card-art">
                  <a href="#">
              <img class="card-img-top img-fluid img-arti" src="img/carpenter.jpg" alt="Card image cap">
              <div class="card-body">
                <div class="listing-avatar">
                  <img src="img/path2.jpg" alt="">
                </div>

                  <h5 class="slcl">Charles Owusu</h5>
                  <p>Carpenter</p>

                <div class="mt-3">
                  <div class="star-rating">
                    <span class="fa fa-star-o" data-rating="1"></span>
                    <span class="fa fa-star-o" data-rating="2"></span>
                    <span class="fa fa-star-o" data-rating="3"></span>
                    <span class="fa fa-star-o" data-rating="4"></span>
                    <span class="fa fa-star-o" data-rating="5"></span>
                    <input type="hidden" name="whatever2" class="rating-value" value="1.9">
                  </div>
                  <p> <small> <span><img src="img/map.svg" alt="search" width="20" height="20" class="mb-1"></span> Accra, Labone</small></p>
                </div>
              </div>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
            <div class="card-art">
                  <a href="#">
              <img class="card-img-top img-fluid img-arti" src="img/carpenter.jpg" alt="Card image cap">
              <div class="card-body">
                <div class="listing-avatar">
                  <img src="img/path2.jpg" alt="">
                </div>

                  <h5 class="slcl">Nathaniel Nat</h5>
                  <p>Carpenter</p>

                <div class="mt-3">
                  <div class="star-rating">
                    <span class="fa fa-star-o" data-rating="1"></span>
                    <span class="fa fa-star-o" data-rating="2"></span>
                    <span class="fa fa-star-o" data-rating="3"></span>
                    <span class="fa fa-star-o" data-rating="4"></span>
                    <span class="fa fa-star-o" data-rating="5"></span>
                    <input type="hidden" name="whatever2" class="rating-value" value="1.9">
                  </div>
                  <p> <small> <span><img src="img/map.svg" alt="search" width="20" height="20" class="mb-1"></span> Accra, Labone</small></p>
                </div>
              </div>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
            <div class="card-art">
                  <a href="#">
              <img class="card-img-top img-fluid img-arti" src="img/carpenter.jpg" alt="Card image cap">
              <div class="card-body">
                <div class="listing-avatar">
                  <img src="img/path2.jpg" alt="">
                </div>

                  <h5 class="slcl">Micheal Nunoo</h5>
                  <p>Carpenter</p>

                <div class="mt-3">
                  <div class="star-rating">
                    <span class="fa fa-star-o" data-rating="1"></span>
                    <span class="fa fa-star-o" data-rating="2"></span>
                    <span class="fa fa-star-o" data-rating="3"></span>
                    <span class="fa fa-star-o" data-rating="4"></span>
                    <span class="fa fa-star-o" data-rating="5"></span>
                    <input type="hidden" name="whatever2" class="rating-value" value="1.9">
                  </div>
                  <p> <small> <span><img src="img/map.svg" alt="search" width="20" height="20" class="mb-1"></span> Accra, Labone</small></p>
                </div>
              </div>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
            <div class="card-art">
                  <a href="#">
              <img class="card-img-top img-fluid img-arti" src="img/carpenter.jpg" alt="Card image cap">
              <div class="card-body">
                <div class="listing-avatar">
                  <img src="img/path2.jpg" alt="">
                </div>

                  <h5 class="slcl">Kofi Adams</h5>
                  <p>Carpenter</p>

                <div class="mt-3">
                  <div class="star-rating">
                    <span class="fa fa-star-o" data-rating="1"></span>
                    <span class="fa fa-star-o" data-rating="2"></span>
                    <span class="fa fa-star-o" data-rating="3"></span>
                    <span class="fa fa-star-o" data-rating="4"></span>
                    <span class="fa fa-star-o" data-rating="5"></span>
                    <input type="hidden" name="whatever2" class="rating-value" value="1.9">
                  </div>
                  <p> <small> <span><img src="img/map.svg" alt="search" width="20" height="20" class="mb-1"></span> Accra, Labone</small></p>
                </div>
              </div>
              </a>
            </div>
          </div>

        </div>
      </div>

      <div class="col-12 text-center my-5">
         <a href="#" class="btn btn-sleight-arti">View All</a>
      </div>

    </div>
  </div>
</section>
<!--Popular Artisans  -->


<!-- testimonial  -->
<section class="testi">
  <div class="container">
<div class="row">
  <div class="col-12 col-lg-6">

  </div>

  <div class="col-12 col-lg-6">

  </div>
</div>
  </div>
</section>
<?php
$object = new Dbh;
$object->connect();
 ?>
<!-- testimonial  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="js/custom.js"></script>

  </body>
</html>
