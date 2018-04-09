<?php
  include_once 'includes/connection.php';
  include 'includes/users.php';


 ?>
  <!doctype html>
  <html lang="en">

  <head>
    <title>Sleight| Confirm Artisan</title>
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
    <!-- Date and time picker-->

    <link href="css/bootstrap-glyphicons.css" rel="stylesheet" >




    <script src="js/jquery.js" type="text/javascript"></script>
              <script src="js/bootsrap.js"></script>


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
                      <a href="customer_account.php" class="list-group-item list-group-item-action ">Account  </a>
                        <a href="taskform.php" class="list-group-item list-group-item-action active">Create Task</a>
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

                <div class="row">
                   <div class="col-md-8 offset-md-2">
                      <div class="account-pane">
                        <h4 class="cx-color mb-4">Your Schedule</h4>
                        <div class="row">

                        <div class="col-md-7" style="border-right: #35b9e5 1px solid !important;">
                            <p>You have reqsted for a service from</p>
                            <div class="row mb-3">
                              <div class="col-md-6">
                                    <img src="img/path3.jpg" alt="" class="rounded-circle  img-fluid img-cx3">
                              </div>
                              <div class="col-md-6 mt-5 ">
                                <h4 class="cx-color"> Nathaniel Nat</h4>
                              </div>
                            </div>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> At -Sakumono in the  ** Tema Metropolitan Assembly</p>
                            <p>On Date  at time </p>

                          </div>
                        <div class="col-md-5 ">
                            <h5 class="cx-color"> Desciption of Task</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                            <div class="row">
                              <div class="col-md-4 offset-md-1">
                                <button type="submit" class="btn btn-outline-primary" href ="#" style="cursor: pointer;">Confirm</button>
                              </div>
                              <div class="col-md-4 offset-md-1">
                                <button type="submit" class="btn btn-outline-danger" href="#" style="cursor: pointer;">Cancel</button>
                              </div>

                            </div>

                              </div>
                        </div>
                      </div>
                       </div>
                </div>



            </div>
          </div>
          <!-- contant area-->

        </div>
      </div>
    </section>
    <!-- dashboard -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->



    <script>
      function myfunction() {
        var skill_set = document.getElementsByName('artisan_cat');
        var skills;
        for (var i = 0; i < skill_set.length; i++) {
          if (skill_set[i].checked) {
            skills = skill_set[i].value;

          }
        }



        $.ajax({

          url: "includes/tasks.php",
          method: "POST",
          data: {
            skills: skills
          },
          dataType: "text",
          success: function(data) {
            if (data != '') {
              document.getElementById("skillset").innerHTML = data; //response;
            } else {
              alert(skills);
            }

          }
        });

      }
    </script>

  </body>

  </html>
