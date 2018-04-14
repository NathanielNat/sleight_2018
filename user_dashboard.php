<?php
  include_once 'includes/connection.php';
  include 'includes/users.php';
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

   <nav class="navbar navbar-expand-lg navbar-light sleight-headbg fixed-top">
    <div class="container">
 <a href="index.html"><img src="img/sleight.png" class="img-fluid navbar-brand" width="104" height="68"></a>
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
                <p> Artisan Category (Painter)</p>
                </div>

                <div class="col-12 mt-1">
                  <div class="list-group">
                    <a href="customer_dashboard.php" class="list-group-item list-group-item-action active">Dashboard</a>
                  </div>
                  <hr>
                </div>



                  <div class="col-12">
                  <div class="list-group">
                    <p class="list-group-item mute"> <small> SETTINGS</small></p>
                    <a href="user_account.php" class="list-group-item list-group-item-action">Account</a>
                      <a href="taskform.php" class="list-group-item list-group-item-action">Create Task</a>
                      <a href="become_artisan.php" class="list-group-item list-group-item-action">Become an artisan</a>
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
            <div class="col-md-6 mb-4">
              <h3 class="mt-5 cx-color">Client's  Dashboard</h3>
            </div>

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
                    <td>Completed</td>
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
    </div>
  </div>
</section>
<!-- dashboard -->
</body>
</html>
