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
