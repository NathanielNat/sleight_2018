  <?php
  include_once 'includes/connection.php';
  include 'includes/session.php';
  include 'includes/session_variables.php';

  include_once 'includes/filldashboard.inc.php';

    $tsk_total = art_assign($user_id);
    $tsk_comp = art_comp($user_id);


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
                    <a href="user_dashboard.php" class="list-group-item list-group-item-action">User Dashboard</a>
                    <a href="artisan_dashboard.php" class="list-group-item list-group-item-action active">Artisan Dashboard</a>
                  </div>
                  <hr>
                </div>



                  <div class="col-12">
                  <div class="list-group">
                    <p class="list-group-item mute"> <small> SETTINGS</small></p>
                    <a href="user_account.php" class="list-group-item list-group-item-action">Account</a>
                      <a href="taskform.php" class="list-group-item list-group-item-action">Create Task</a>
                       <a href="become_artisan.php" class="list-group-item list-group-item-action">Become Artisan</a>
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
              <h3 class="mt-5 cx-color">Dashboard</h3>
            </div>

          </div>


          <div class="row mb-4">
            <div class="col-4 col-12 col-lg-4"> </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
              <div class="card-cx-dash">
                <div class="card-body">
                  <h3 class="card-title text-right "><?= $tsk_total;?></h3>
                  <p class="card-text text-right">Total Task Assigned</p>
                </div>
              </div>
             </div>

             <div class="col-12 col-md-6 col-lg-4 mb-3">
               <div class="card-cx-dash2">
                 <div class="card-body">
                   <h3 class="card-title text-right"><?= $tsk_comp;?></h3>
                   <p class="card-text text-right">Total Task Completed</p>
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
                    <th scope="col-2">Date of Assignment</th>
                    <th scope="col-2">Client</th>
                    <th scope="col-2">location</th>
                    <th scope="col-2">Status</th>
                    <th scope="col-2">Rating</th>

                  </tr>
                </thead>

              <?php    include 'includes/art_dashboard.inc.php'; ?>

              </table>
              </div>
                  <!--Task Completed -->


              <!-- <div class="tab-pane fade table-responsive " id="tasks-assigned" role="tabpanel" aria-labelledby="pills-sell-tab">
                <table class="table  table-striped">
                <thead>
                  <tr>
                    <th scope="col-2">Order #</th>
                    <th scope="col-2">Date</th>
                    <th scope="col-2">E-Currency</th>
                    <th scope="col-2">USD</th>
                    <th scope="col-2">GHC</th>
                    <th scope="col-1">Status</th>
                    <th scope="col-1">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

              </div> -->


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

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
