<?php
  include_once 'includes/connection.php';
  include 'includes/session.php';
  include 'includes/session_variables.php';
 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Sleight | User Dashboard</title>
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

                </div>

                <div class="col-12 mt-1">
                  <div class="list-group">
                    <a href="user_dashboard.php" class="list-group-item list-group-item-action active">Client Dashboard</a>
                  <?php if($utype == 1):
                  ?>
                  <a href="artisan_dashboard.php" class="list-group-item list-group-item-action">Artisan Dashboard</a>
                <?php endif;?>
                  </div>
                  <hr>
                </div>



                  <div class="col-12">
                  <div class="list-group">
                    <p class="list-group-item mute"> <small> SETTINGS</small></p>
                    <a href="user_account.php" class="list-group-item list-group-item-action">Account</a>
                      <a href="taskform.php" class="list-group-item list-group-item-action">Create Task</a>
                      <a href="become_artisan.php" class="list-group-item list-group-item-action">Become an artisan</a>
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

              <?php if(isset($_GET['success'])): ?>
    <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><?= $_GET['success'];?></strong> 
</div>
 
          <?php endif; ?>

          <div class="row mb-4">
            <div class="col-md-6 mb-4">
              <h3 class="mt-5 cx-color">Client's  Dashboard</h3>
            </div>
          <?php  $date_crt = date('Y-m-d');
 // $scheduled = date_time_set($date_crt, 00, 00, 00);
 echo $da;
 ?>

          </div>


          <div class="row mb-4">
            <div class="col-4 col-12 col-lg-4"> </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
              <div class="card-cx-dash">
                <div class="card-body">
                  <h3 class="card-title text-right ">12</h3>
                  <p class="card-text text-right">Total Task Completed</p>
                </div>
              </div>
             </div>

             <div class="col-12 col-md-6 col-lg-4 mb-3">
               <div class="card-cx-dash2">
                 <div class="card-body">
                   <h3 class="card-title text-right"> 12</h3>
                   <p class="card-text text-right">Total Task Assigned</p>
                 </div>
               </div>
              </div>
          </div>

          <div class="row cx-dash-pad ">
            <div class="col-12">
              <div class="col-md-12 converter-opad">
                <ul class="nav nav-pills nav-fill wcbg mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item nav-omag ">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#tasks-completed" role="tab" aria-controls="pills-home" aria-selected="true">Tasks Assigned</a>
                  </li>
                  <!-- <li class="nav-item nav-omag">
                    <a class="nav-link" id="pills-sell-tab" data-toggle="pill" href="#tasks-assigned" role="tab" aria-controls="pills-sell" aria-selected="false">Task Assigned</a>
                  </li> -->
                </ul>
            <div class="tab-content plrtd " id="pills-tabContent">
              <!-- Taks Completed-->
              <div class="tab-pane fade show active table-responsive " id="tasks-completed" role="tabpanel" aria-labelledby="pills-home-tab">
                <table class="table  table-striped">
                <thead>
                  <tr>
                    <th scope="col-1">Task #</th>
                    <th scope="col-2">Date of Assignment</th>
                    <th scope="col-3">Artisan Assigned</th>
                    <th scope="col-2">Status</th>
                    <th scope="col-2">Rating</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin fdkjnfvlkfndl</td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                      Status
                      </button></td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Litecoin</td>

                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>

                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                     <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Ethereum</td>
                     <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Ethereum</td>
                     <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                     <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                     <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                     <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                </tbody>
              </table>
              </div>
                  <!--Task Completed -->


              </div>
              </div>
            </div>
          </div>

      </div>
      </div>
      <!-- contant area-->

      <!-- Modal to check tasks completed and rate artisan -->


<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Comfirm Completion of Task</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
        <div class="row ">
          <div class="col-6">
            Confirm Completion
            <span class="switch">
              <input type="checkbox" name="tsk_finish" class="switch">
              <label for="switch-id">Completed</label>
            </span>
          </div>
          <div class="col-6">
        <div class="star-rating">
                    <span class="fa fa-star-o" data-rating="1"></span>
                    <span class="fa fa-star-o" data-rating="2"></span>
                    <span class="fa fa-star-o" data-rating="3"></span>
                    <span class="fa fa-star-o" data-rating="4"></span>
                    <span class="fa fa-star-o" data-rating="5"></span>
                    <input type="hidden" name="whatever2" class="rating-value" value="1.9">
                  </div>
                </div>

                  </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
 
      <!-- End of modal -->
    </div>
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
