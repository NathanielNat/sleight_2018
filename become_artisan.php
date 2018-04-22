<?php
  include 'includes/session.php';
  include_once 'includes/connection.php';
  include 'includes/users.php';
  include 'includes/tasks.php';
  include 'includes/session_variables.php';
 ?>
  <!doctype html>
  <html lang="en">

  <head>
    <title>Sleight | Account Settings</title>
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
                    <img src="<?= $image;?>" alt="..." class="rounded-circle  img-fluid img-cx">
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
                      <a href="become_artisan.php" class="list-group-item list-group-item-action active"> Become an Artisan</a>
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
                  <h3 class="mt-5 cx-color">Become An Artisan </h3>
                </div>
              </div>

              <form action="includes/become.inc.php" method="POST">

                <div class="row cx-dash-pad">




                  <div class="col-md-6 mb-4 ">
                    <!-- <div class="account-pane ">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="col-md-12">
                            <div class="col-md-12">
                              <h5 class="cx-color "> Upload your picture</h5>
                            </div>

                            <div class="col-md-12 mt-5">
                              <input id="imageupload_banner" type="file" name="pix"  class="upload">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div id="preview-image_banner"></div>
                        </div>
                      </div>
                    </div> -->


                <!-- Artisan information-->
                <div class="account-pane  mt-3">
                  <div class="form-group">
                    <h4 class="cx-color">Personal Information</h4>
                    <div class="row">



                      <div class="col-md-12 form-group ">
                        <label for="LastName">Fullname</label><br>
                        <input type="text" class="form-control" value="<?= $uname;?>">
                      </div>


                      <div class="form-group col-12">
                        <label for="Email">Email</label><br>
                        <input type="email" class="form-control"value="<?= $umail;?>" >
                      </div>

                      <div class="form-group col-12">
                        <label for="number">Number</label><br>
                        <input type="text" class="form-control" value="<?= $utel;?>">
                      </div>

                    </div>



                  </div>
                </div>
                </div>


                <div class="col-md-6 mb-4">
                  <div class="account-pane ">

                    <h4 class="cx-color">Work Information</h4>
                    <div class="form-group col-12">
                      <h5>     Select artisan type</h5>

                      <label class="radio-inline">  <input type = "radio" name="artisan_cat" value="mason" onclick="myfunction()">Mason </label>
                      <label class="radio-inline"><input type="radio" name="artisan_cat" value="carpenter" onclick="myfunction()">Carpenter</label>
                      <label class="radio-inline"><input type ="radio" name="artisan_cat" value="painter" onclick="myfunction()">Painter</label>
                      <label class="radio-inline"><input type="radio" name="artisan_cat" value="electrician"onclick="myfunction()">Electrician</label>
                      <label class="radio-inline"><input type="radio" name="artisan_cat" value="plumber" onclick="myfunction()">Plumber</label>

                      <div class="col-md-12 row">
                        <div id="skillset">
                            <!--Skillset is inserted from database here -->
                        </div>


                        <div class="col-md-12 form-group mt-4">
                          <label for="exp_years ">Number of Years of Experience</label><br>
                          <input type="text" class="form-control" name="exp_years">
                        </div>

                        <div class="col-md-12 form-group ">

                          <!-- dropdown for skille level -->

                        <!-- < -->

                          <select class="form-control mt-3" name="exp_level" id="experience_level" >
                            <option selected="selected">Select Skill level</option>
                          <option value="apprentice">Apprentice</option>
                            <option value="master">Master</option>
                            <option value="pro">Professional</option>
                            </select>

                            <select class="form-control mt-4" name="district" id="district" onclick="loc()">
                              <option selected="selected" disabled >Select district where you are based</option>
                              <!-- Districts inserted from database here -->

                              <?php

                              $rows = $conn->query("SELECT * FROM districts");
                              // print_r($rows);
                              foreach ($rows as $district) {
                                echo "<option>". $district["name"] ."</option>";
                              }
                               ?>
                              </select>


                        </div>
                        <div class="col-md-12 form-group">
                          <h6 class="cx-color">Give a brief description of what you do</h6>
                          <textarea name="descr" rows="4" cols="50" class=" form-control" placeholder="Brief Descrition Of Task" maxlength="140"></textarea>

                        </div>

                      </div>


                    </div>

                  </div>

                  <div class="text-center mt-5">
                     <!-- <a class="btn btn-cx4 " href="#"></a> -->
                    <button type="submit" class="btn btn-cx4 " name="submit"> Update</button>
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

          url: "includes/taskers.php",
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
