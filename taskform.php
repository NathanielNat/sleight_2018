<?php
  include_once 'includes/connection.php';
  include 'includes/users.php';
  include 'includes/taskers.php';
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
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">



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

              <div class="row mb-4">
                <div class="col-12 col-md-6 col-lg-12">
                  <h3 class="mt-5 cx-color">Create Tasks</h3>
                </div>
              </div>

              <form action="">

                <div class="row cx-dash-pad">




                  <div class="col-md-6 mb-4 ">
                    <!-- <div class="account-pane ">
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

                    </div> -->
              </form>
              <form>
                <!-- Task form-->
                <div class="account-pane  ">

                    <h4 class="cx-color">Task Form</h4>
                    <div class="row">
                      <div class="form-group">




                       <h5>     Select artisan type</h5>

                        <label class="radio-inline rad">  <input type = "radio" name="artisan_cat" value="mason" onclick="myfunction()" class=" form-control ">Mason </label>
                        <label class="radio-inline rad"><input type="radio" name="artisan_cat" value="carpenter" onclick="myfunction()" class=" form-control">Carpenter</label>
                        <label class="radio-inline rad"><input type ="radio" name="artisan_cat" value="painter" onclick="myfunction()" class=" form-control">Painter</label>
                        <label class="radio-inline rad"><input type="radio" name="artisan_cat" value="electrician"onclick="myfunction()" class=" form-control">Electrician</label>
                        <label class="radio-inline rad"><input type="radio" name="artisan_cat" value="plumber" onclick="myfunction()" class=" form-control">Plumber</label>


                        <div id="skillset">
                            <!--Skillset is inserted from database here -->
                        </div>

                        <div class="form-group col-12">
                          <br>
                           <textarea name="name" rows="5" cols="50" class=" form-control" placeholder="Brief Descrition Of Task"></textarea>
                        </div>
                            <!-- Task form  -->
                        <div class="form-group col-12">
                          <label for="task location">Locaion Of Task</label><br>
                          <input type="text" class="form-control"  name="task_loction">
                        </div>
                        <div class="form-group col-12">
                        <select class="form-control" name="district" id="district" onclick="loc()">
                          <option selected="selected">Districs where task is located</option>
                          <!-- Districts inserted from database here -->
                          </select>
                        </div>


                    </div>



                  </div>
                </div>
                </div>


                <div class="col-md-6 mb-4">
                  <div class="account-pane ">



                    <div class="form-group col-12">


                          <h3>Select Time</h3>
                          <span>
                              <input id="datetimepicker" type="text" placeholder="click to select date and time" class="form-control">
                          </span>
                          <script>
                              $(function () {
                                  $('#datetimepicker').datetimepicker();
                              });
                          </script>


                      </div>



                      <div class="text-center mt-5">
                         <a class="btn btn-large btn-cx4 " href="#">Find Artisan </a>
                      </div>


                    </div>
                    <div class="form-group col-12">

                    </div>
                    <div class="form-group col-12">

                    </div>
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
    <script src="js/bootstrap-datetimepicker.min.js"></script>


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
