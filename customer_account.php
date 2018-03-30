<?php
  include_once 'includes/connection.php';
  include 'includes/users.php';
  include 'includes/tasks.php';
 ?>
  <!doctype html>
  <html lang="en">

  <head>
    <title>C Xchnage | Account Settings</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#55C57A">
    <meta name="msapplication-navbutton-color" content="#55C57A">
    <meta name="apple-mobile-web-app-status-bar-style" content="#55C57A">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">


    <!-- custom -->
    <link rel="stylesheet" href="css/style.css">
    <!-- custom -->

    <!-- google fonts used -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- google fonts used -->
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">



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

    <!-- dashboard -->
    <section class="cx-dashboard">
      <div class="container-fluid">
        <div class="row">

          <!-- sidebar -->
          <div class="col-lg-3 d-none d-lg-block">
            <div class="cx-sidenav">
              <div class="">
                <div class="row">
                  <div class="col-12 text-center mt-4">
                    <img src="img/path2.jpg" alt="..." class="rounded-circle  img-fluid img-cx">
                    <h3 class="mt-4 cx-color">Charles Owusu</h3>
                    <p> Artisan Caterory (Painter)</p>
                  </div>

                  <div class="col-12 mt-1">
                    <div class="list-group">
                      <a href="customer_dashboard.php" class="list-group-item list-group-item-action ">Dashboard</a>
                    </div>
                    <hr>
                  </div>

                  <div class="col-12">
                    <div class="list-group">
                      <p class="list-group-item mute"> <small> SETTINGS</small></p>
                      <a href="customer_account.php" class="list-group-item list-group-item-action active">Account  </a>
                        <a href="taskform.php" class="list-group-item list-group-item-action">Create Task</a>
                      <a href="logout.html" class="list-group-item list-group-item-action">Logout</a>

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- sidebar -->

          <!-- contant area-->
          <div class="col-lg-9">
            <div class="cont-area">

              <div class="row mb-4">
                <div class="col-12 col-md-6 col-lg-12">
                  <h3 class="mt-5 cx-color">Account Settings </h3>
                </div>
              </div>

              <form action="">

                <div class="row cx-dash-pad">




                  <div class="col-md-6 mb-4 ">
                    <div class="account-pane ">
                      <div class="row">
                        <div class="col-md-6">
                          <img src="img/path2.jpg" alt="..." class=" img-fluid acc_photo img-cx2 acc_photo">
                        </div>

                        <div class="col-md-6">
                          <div class="col-md-12 ">
                            <div class="col-md-12">
                              <h5 class="cx-color "> Charles Owusu</h5>
                              <p>Artisan Caterory (Painter)</p>

                            </div>
                            <div class="col-md-12 mt-5">
                              <input type="file">
                            </div>

                          </div>
                        </div>

                      </div>

                    </div>
              </form>
              <form>
                <!-- Artisan information-->
                <div class="account-pane  mt-3">
                  <div class="form-group">
                    <h4 class="cx-color">Personal Information</h4>
                    <div class="row">


                      <div class="col-md-6 form-group ">
                        <label for="FirstName">First name</label><br>
                        <input type="text" class="form-control">
                      </div>
                      <div class="col-md-6 form-group ">
                        <label for="LastName">Last name</label><br>
                        <input type="text" class="form-control">
                      </div>


                      <div class="form-group col-12">
                        <label for="Email">Email</label><br>
                        <input type="email" class="form-control" placeholder="myemail@email.com">
                      </div>

                      <div class="form-group col-12">
                        <label for="number">Number</label><br>
                        <input type="text" class="form-control" placeholder="0245073066">
                      </div>

                    </div>



                  </div>
                </div>
                </div>


                <div class="col-md-6 mb-4">
                  <div class="account-pane ">



                    <div class="form-group col-12">
                      <h4 class="mt-5 cx-color">Security Settings </h4>
                      <label for="currentPassword"> Current Password</label><br>
                      <input type="password" class="form-control">
                    </div>
                    <div class="form-group col-12">
                      <label for="newPasssword"> New Password</label><br>
                      <input type="password" class="form-control">
                    </div>
                    <div class="form-group col-12">
                      <label for="confirm_password">Confirm Password</label><br>
                      <input type="password" class="form-control">
                    </div>
                  </div>

                  <div class="text-center mt-5"> <a class="btn btn-cx4 " href="#">Update</a>
                  </div>
                </div>

                </div>
              </form>


            </div>
          </div>
          <!-- contant area-->

        </div>
    </section>
    <!-- dashboard -->










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>


  </body>

  </html>
