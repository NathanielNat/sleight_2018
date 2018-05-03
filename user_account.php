<?php
  include 'includes/session.php';
  include_once 'includes/connection.php';
  include 'includes/account.inc.php';
  include 'includes/tasks.php';
  include 'includes/session_variables.php';

 ?>
  <!doctype html>
  <html lang="en">

  <head>
    <title>Sleight| Account Settings</title>
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
     <?php include 'includes/navbar.inc.php'; ?>

    <!-- dashboard -->
    <section class="cx-dashboard">
      <div class="container-fluid">
        <div class="row">

          <!-- sidebar -->
          <div class="col-lg-3 d-none d-lg-block" name="uploadfile">
            <input type="submit" name="uploadfilesub" value="">
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
                      <a href="user_account.php" class="list-group-item list-group-item-action active">Account  </a>
                      <a href="become_artisan.php" class="list-group-item list-group-item-action"> Become an Artisan</a>
                      <a href="taskform.php" class="list-group-item list-group-item-action">Create Task</a>
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
                  <h3 class="mt-1 cx-color">Account Settings  </h3>
                </div>
              </div>


                  <form action="includes/account.inc.php" method="POST" enctype="multipart/form-data">

                  <div class="row cx-dash-pad">
                    <div class="col-md-6 mb-4 ">
                      <div class="account-pane ">
                        <div class="row">


                          <div class="col-md-6">
                            <div class="col-md-12">
                              <div class="col-md-12">
                                <h5 class="cx-color "> Upload your picture</h5>


                              </div>

                              <div class="col-md-12 mt-2">
                                <!-- <input type="file" name="profile_pic"> -->

                                <input id="imageupload_banner" type="file" name="pix"  class="upload">

                              </div>

                            </div>
                          </div>
                          <div class="col-md-6">
                            <!-- <img src="img/path2.jpg" alt="..." class=" img-fluid acc_photo img-cx2 acc_photo"> -->
                            <div id="preview-image_banner"></div>
                          </div>

                        </div>

                      </div>

                <!-- Artisan information-->
                <div class="account-pane  mt-3">
                  <div class="form-group">
                    <h4 class="cx-color">Personal Information</h4>
                    <div class="row">
                      <div class="col-md-12 form-group ">
                        <label for="FirstName">Full name</label><br>
                        <input type="text" class="form-control" value="<?= $uname; ?>" name="uname">
                      </div>

                      <div class="form-group col-12">
                        <label for="Email">Email</label><br>
                        <input type="email" class="form-control" value="<?= $umail; ?>" name="umail">
                      </div>

                      <div class="form-group col-12">
                        <label for="number">Number</label><br>
                        <input type="text" class="form-control" value="<?= $utel; ?>" name="utel">
                      </div>

                    </div>

                  </div>
                </div>
                </div>


                <div class="col-md-6 mb-4">
                  <div class="account-pane ">
                    <span class="error">  <?php if(isset($_GET['error'])){ echo $_GET['error']; }?></span>
                    <div class="form-group col-12">
                      <
                      <h4 class="mt-5 cx-color">Security Settings </h4>
                      <label for="currentPassword"> Current Password</label><br>
                      <input type="password" class="form-control" name="old_pass">
                    </div>
                    <div class="form-group col-12">
                      <label for="newPasssword"> New Password</label><br>
                      <input type="password" class="form-control" name="upass">
                    </div>
                    <div class="form-group col-12">
                      <label for="confirm_password">Confirm Password</label><br>
                      <input type="password" class="form-control" name="confirm">
                    </div>
                  </div>

                  <div class="text-center mt-5">
                     <!-- <a class="btn btn-cx4 " href="#"></a> -->
                    <button type="submit" class="btn btn-cx4 " name="submit"> Update</button>
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
    <script type="text/javascript">
    $("#imageupload_banner").on('change', function () {

       //Get count of selected files
       var countFiles = $(this)[0].files.length;

       var imgPath = $(this)[0].value;
       var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
       var image_holder = $("#preview-image_banner");
       image_holder.empty();

       if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
           if (typeof (FileReader) != "undefined") {

               //loop for each file selected for uploaded.
               for (var i = 0; i < countFiles; i++) {

                   var reader = new FileReader();
                   reader.onload = function (e) {
                       $("<img />", {
                           "src": e.target.result,
                               "class": "img-fluid acc_photo img-cx2 acc_photo"
                       }).appendTo(image_holder);
                   }

                   image_holder.show();
                   reader.readAsDataURL($(this)[0].files[i]);
               }

           } else {
               alert("This browser does not support FileReader.");
           }
       } else {
           alert("Pls select only images");
       }
    });
    </script>



  </body>

  </html>
