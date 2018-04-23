<?php
  // include 'includes/session.php';
  include_once 'includes/connection.php';
  include 'includes/users.php';
  include 'includes/taskers.php';
  include 'includes/session_variables.php';

 ?>
  <!doctype html>
  <html lang="en">

  <head>
    <title>Sleight| Taskform</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#55C57A">
    <meta name="msapplication-navbutton-color" content="#55C57A">
    <meta name="apple-mobile-web-app-status-bar-style" content="#55C57A">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">


    <!-- custom -->
    <link rel="stylesheet" href="css/style.css">
    <!-- custom -->

    <!-- google fonts used -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- google fonts used -->
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Date and time picker-->
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
    <link href="css/bootstrap-glyphicons.css" rel="stylesheet" >




    <script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/popper.min.js"></script>
              <script src="js/bootstrap.js"></script>
          <script src="js/moment.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="js/bootstrap-datetimepicker.js"></script>

  </head>

  <body>

     <?php include 'includes/navbar.inc.php'; ?>

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
                    <?php 
                  if(empty($image)):
                     ?>
                    <img src="user_pics/default.png" alt="..." class="rounded-circle  img-fluid img-cx">
                    
                   <?php else:
                    
                    ?>
                     
                <img src="<?= $image;?>" alt="..." class="rounded-circle  img-fluid img-cx">

                  <?php endif ?>
                    <h3 class="mt-4 cx-color"><?= $uname; ?></h3>
                    <p> Artisan Caterory (Painter)</p>
                  </div>

                  <div class="col-12 mt-1">
                    <div class="list-group">
                      <a href="user_dashboard.php" class="list-group-item list-group-item-action ">Dashboard</a>
                    </div>
                    <hr>
                  </div>

                  <div class="col-12">
                    <div class="list-group">
                      <p class="list-group-item mute"> <small> SETTINGS</small></p>
                      <a href="user_account.php" class="list-group-item list-group-item-action">Account  </a>
                      <a href="become_artisan.php" class="list-group-item list-group-item-action"> Become an Artisan</a>
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
                  <h3 class="mt-2 cx-color">Create Tasks</h3>
                </div>
              </div>

<!-- Task form-->
              <form action="task.php" method="POST">

                <div class="row cx-dash-pad">
                  <div class="col-md-5 mb-4 ">
                <div class="account-pane">

                    <h4 class="cx-color">Task Form</h4>
                    <div class="row">
                      <div class="form-group">


                        <div class="form-group col-12">

                       <h5>     Select artisan type</h5>

                        <label class="radio-inline rad">  <input type = "radio" name="artisan_cat" value="mason" onclick="myfunction()" class=" form-control ">Mason </label>
                        <label class="radio-inline rad"><input type="radio" name="artisan_cat" value="carpenter" onclick="myfunction()" class=" form-control">Carpenter</label>
                        <label class="radio-inline rad"><input type ="radio" name="artisan_cat" value="painter" onclick="myfunction()" class=" form-control">Painter</label>
                        <label class="radio-inline rad"><input type="radio" name="artisan_cat" value="electrician"onclick="myfunction()" class=" form-control">Electrician</label>
                        <label class="radio-inline rad"><input type="radio" name="artisan_cat" value="plumber" onclick="myfunction()" class=" form-control">Plumber</label>


                        <div id="skillset">
                            <!--Skillset is inserted from database here -->
                        </div>
                      </div>

                        <div class="form-group col-12">
                          <br>
                          <textarea name="name" rows="4" cols="50" class=" form-control" placeholder="Brief Descrition Of Task" maxlength="140"></textarea>
                        </div>
                            <!-- Task form  -->
                        <div class="form-group col-12">
                          <label for="task location">Location Of Task</label><br>
                          <input type="text" class="form-control"  name="task_loction">
                        </div>
                        <div class="form-group col-12">
                        <select class="form-control" name="district" id="district">
                          <option selected="selected" disabled >Select district where task is located</option>
                          <!-- Districts inserted from database here -->

                          <?php

                          $rows = $conn->query("SELECT * FROM districts");
                          // print_r($rows);
                          foreach ($rows as $district) {
                            echo "<option >". $district["name"] ."</option>";
                          }
                           ?>
                          </select>

                        </div>

                        <div class="mt-5 col-12 form-group">
                          <div>
                                        <h3>Select Time</h3>
                        <span>
                            <input id="datetimepicker" type="text" placeholder="Click to select date and time" class="form-control" name="due">
                        </span>
                        <script>
                            $(function () {
                                $('#datetimepicker').datetimepicker();
                            });
                        </script> </div>

                            <div class="text-center mt-5">
                               <a class="btn btn-large btn-cx4 " href="#" onclick="find_art()">Find Artisan </a>
                            </div>
                          </div>
                    </div>

                  </div>
                </div>
                </div>

                <div class="col-md-7 mb-4">
                    <!-- Artisan Recomendations to customer -->
                    <div class="account-pane mt-3" id="find_art">
                      <div class="row">
                        <div class="col-md-6">
                              <div class="col-md-12">
                                <img src="img/path3.jpg" alt="" class="img-fluid acc_photo img-cx2 acc_photo">
                                  <h4 class="cx-color mt-2 text-center" id="artisan_name"> Nathaniel Nat</h4>

                              </div>
                        </div>
                        <div class="col-md-6">
                          <div class="col-md-12">
                        <p> <i class="glyphicon glyphicon-briefcase"></i> <b>89</b>-- Number of tasks completed </p>
                        <p> <i class="glyphicon glyphicon-star mb-0"></i> <b>4.5</b>-- Average Rating </p>
                        <p class="cx-color mb-1">How Can I help</p>
                        <p>Contact me for your quick and efficient capentry works. With a diploma in wood work and serval years of experence, will fix all your problems </p>
                         <a class="btn btn-large btn-cx4 " href="#" id="post" data-toggle="modal" data-target="#exampleModal">Select and continue </a>


                          </div>
                        </div>


                      </div>

                  </div>
                  <div class="account-pane mt-3" >
                    <div class="row">
                      <div class="col-md-6">
                            <div class="col-md-12">
                              <img src="img/path3.jpg" alt="" class="img-fluid acc_photo img-cx2 acc_photo">

                                <h4 class="cx-color mt-2 text-center"> Nathaniel Nat</h4>

                            </div>
                      </div>
                      <div class="col-md-6">
                        <div class="col-md-12">
                      <p> <i class="glyphicon glyphicon-briefcase"></i> <b>89</b>-- Number of tasks completed </p>
                      <p> <i class="glyphicon glyphicon-star mb-0"></i> <b>4.5</b>-- Average Rating </p>
                      <p class="cx-color mb-1">How Can I help</p>
                      <p>Contact me for your quick and efficient capentry works. With a diploma in wood work and serval years of experence, will fix all your problems </p>
                       <a class="btn btn-large btn-cx4 " href="#">Select and continue </a>


                        </div>
                      </div>


                    </div>

                </div>

                <div class="account-pane mt-3" >
                  <div class="row">
                    <div class="col-md-6">
                          <div class="col-md-12">
                            <img src="img/path3.jpg" alt="" class="img-fluid acc_photo img-cx2 acc_photo">

                              <h4 class="cx-color mt-2 text-center"> Nathaniel Nat</h4>

                          </div>
                    </div>
                    <div class="col-md-6">
                      <div class="col-md-12">
                    <p> <i class="glyphicon glyphicon-briefcase"></i> <b>89</b>-- Number of tasks completed </p>
                    <p> <i class="glyphicon glyphicon-star mb-0"></i> <b>4.5</b>-- Average Rating </p>
                    <p class="cx-color mb-1">How Can I help</p>
                    <p>Contact me for your quick and efficient capentry works. With a diploma in wood work and serval years of experence, will fix all your problems </p>
                     <a class="btn btn-large btn-cx4 " href="#">Select and continue </a>
                      </div>
                    </div>
                  </div>
              </div>
                  </div>

                </div>
              </form>
            </div>
          </div>
          <!-- contant area-->

        </div>
      </div>
    </section>
    <!-- dashboard -->

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirm Your Task</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body task-modal pl-5 pr-5">

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


                    </div>
              </div>
              <div class="col-md-12">
                <h5 class="cx-color">Confirm your schedule and send a mail to the assigned artisan or cancel</h5>
              </div>

          </div>
          <div class="modal-footer">
            <div class="row">
              <div class="col-md-4 ">
                <button type="submit" class="btn btn-outline-primary" href ="#" style="cursor: pointer;" name="submit">Send Mail</button>
              </div>
              <div class="col-md-4 offset-md-2">
                <button type="submit" class="btn btn-outline-danger" href="#" style="cursor: pointer;">Cancel</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--modal ends here  -->


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
    <script >
      function find_art(){

        $.ajax({
          url: "includes/form.inc.php";
        }); 
      }
    </script>

  </body>

  </html>
