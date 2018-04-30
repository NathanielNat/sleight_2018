<?php
  // include 'includes/session.php';
  include_once 'includes/connection.php';
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
                    <p> Artisan Caterory <b class="cx-color"> (<?= ucfirst($cat); ?>)</b></p>
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
                      <a href="includes/logout.php" class="list-group-item list-group-item-action">Logout</a>

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
              

                <div class="row cx-dash-pad">
                  <div class="col-md-5 mb-4 ">
                <div class="account-pane">

                    <h4 class="cx-color">Task Form</h4>
                    <div class="row">
                      <div class="form-group">


                        <div class="form-group col-12">

                       <h5>     Select artisan type</h5>

                        <label class="radio-inline rad">  <input type = "radio" name="artisan_cat" id="category" value="mason" onclick="myfunction()"  id="category" class=" form-control ">Mason </label>
                        <label class="radio-inline rad"><input type="radio" name="artisan_cat" id="category" value="carpenter" onclick="myfunction()" class=" form-control">Carpenter</label>
                        <label class="radio-inline rad"><input type ="radio" name="artisan_cat" id="category" value="painter" onclick="myfunction()" class=" form-control">Painter</label>
                        <label class="radio-inline rad"><input type="radio" name="artisan_cat" id="category" value="electrician"onclick="myfunction()" class=" form-control">Electrician</label>
                        <label class="radio-inline rad"><input type="radio" name="artisan_cat" id="category" value="plumber" onclick="myfunction()" class=" form-control">Plumber</label>


                        <div id="skillset">
                            <!--Skillset is inserted from database here -->
                        </div>
                      </div>

                        <div class="form-group col-12">
                          <br>
                          <textarea name="descr" rows="4" cols="50" id="descr" class=" form-control" placeholder="Brief Descrition Of Task" maxlength="140" ></textarea>
                        </div>
                            <!-- Task form  -->
                        <div class="form-group col-12">
                          <label for="task location">Location Of Task</label><br>
                          <input type="text" class="form-control"  name="task_loction" id="task_loction">
                        </div>
                        <div class="form-group col-12">
                        <select class="form-control" name="district" id="district">
                          <option>Select district where task is located</option>
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
                        
                        <script>
                            $(function () {
                                $('#datetimepicker').datetimepicker();
                            });
                        </script> </span></div>


                          </div>
                    </div>

                  </div>
                </div>
                <div class="text-center mt-2">
                     <div  class="btn btn-cx4" onclick="find_art()">Find Artisan</div>
                </div>
                 
                </div>

                <div class="col-md-7 mb-4" id="artisan">


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

    <!-- Modal -->
   <div id="modal_t">
     <!-- Ajax code pull modal is inserted here  -->
   </div>
    <!--modal ends here  -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->



    <script>
    // Jquery Ajax for fetch skills from task form
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

     <script>
     // Code to send data to from task form to the confirmation modal
      function find_art() {
        //var skill_set = document.getElementsByName('artisan_cat');

        var skill_set = document.getElementsByName('artisan_cat');
    var taskloction = document.getElementById('task_loction').value;
    var  descr = document.getElementById('descr').value;
    var district = document.getElementById('district').value;
    var due = document.getElementById('datetimepicker').value;
        var category;
        for (var i = 0; i < skill_set.length; i++) {
          if (skill_set[i].checked) {
            category = skill_set[i].value;

          }
        }
        var e = document.getElementById("district");
        var district = e.options[e.selectedIndex].value;
        // var loc = document.getElementById('task_loction').value;
        // var due_date = document.getElementById('datetimepicker').value;
        // var brief = document.getElementById('descr').value;


        var skills = [];
        var inputElements = document.getElementsByClassName('messageCheckbox');
        for(var i=0; inputElements[i]; ++i){
              if(inputElements[i].checked){
                   skills[i] = inputElements[i].value;
                   //alert(checkedValue);
                   //break;
              }
        }


        // alert(category);
        // alert(district);
        // alert(due_date);
        // alert(loc);
        // alert(brief);

      
        // Ajax request to pull available artisans from database
        $.ajax({
          url: "suggestions.php",
          method: "POST",
          data: {
            category: category,
             district: district,
              skills: skills,
              taskloction:taskloction,
              descr :descr,
              district :district,
              due : due

              // due_date: due_date,
              // loc:loc,
              // brief:brief
          },
          dataType: "text",
          success: function(data) {

            if (data != '') {
          var array_data = String(data).split("<div class='suggest'></div>");
          document.getElementById("artisan").innerHTML = array_data[0]; //response to the div block col-md-7;
          document.getElementById("modal_t").innerHTML = array_data[1]; //response to fetch modal ;
            //document.getElementById("artisan").innerHTML = data; //response
            // document.getElementById('description').innerHTML = brief;
            // document.getElementById('loc').innerHTML = loc;
            // document.getElementById('tsk_dist').innerHTML = district;
            // document.getElementById('due').innerHTML = due_date;
              alert(data);
            } else {
              alert(data);
            }


          }
        });

      }
    </script>

<!-- <script>
var e = document.getElementById("district");
var district = e.options[e.selectedIndex].value;
var loc = document.getElementById('task_loction').value;
var due_date = document.getElementById('datetimepicker').value;
var brief = document.getElementById('descr').value;

document.getElementById('dist').innerHTML = brief;
</script> -->



  </body>

  </html>
