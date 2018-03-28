<?php
  include_once 'includes/dbh.php';
  include 'database/users.php';
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
        <a class="nav-link" href="#">Login</a>
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
                    <a href="artisan_dashboard.php" class="list-group-item list-group-item-action active">Dashboard</a>
                  </div>
                  <hr>
                </div>



                  <div class="col-12">
                  <div class="list-group">
                    <p class="list-group-item mute"> <small> SETTINGS</small></p>
                    <a href="artisan_account.php" class="list-group-item list-group-item-action">Account  </a>
                    <a href="securitycenter.html" class="list-group-item list-group-item-action">Availability</a>

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
              <h3 class="mt-5 cx-color">Dashboard</h3>
            </div>

          </div>


          <div class="row mb-4">
            <div class="col-4 col-12 col-lg-4"> </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
              <div class="card-cx-dash">
                <div class="card-body">
                  <h3 class="card-title text-right ">GHC 120</h3>
                  <p class="card-text text-right">Total Buy Oders</p>
                </div>
              </div>
             </div>

             <div class="col-12 col-md-6 col-lg-4 mb-3">
               <div class="card-cx-dash2">
                 <div class="card-body">
                   <h3 class="card-title text-right">GHC 120</h3>
                   <p class="card-text text-right">Total Sell Oders</p>
                 </div>
               </div>
              </div>
          </div>

          <div class="row cx-dash-pad ">
            <div class="col-12">
              <div class="col-md-12 converter-opad">
                <ul class="nav nav-pills nav-fill wcbg mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item nav-omag ">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Recent Buy Orders</a>
                  </li>
                  <li class="nav-item nav-omag">
                    <a class="nav-link" id="pills-sell-tab" data-toggle="pill" href="#pills-sell" role="tab" aria-controls="pills-sell" aria-selected="false">Recent Sell Orders</a>
                  </li>
                </ul>
            <div class="tab-content plrtd " id="pills-tabContent">
              <!-- Buy panel -->
              <div class="tab-pane fade show active table-responsive " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <table class="table  table-striped">
                <thead>
                  <tr>
                    <th scope="col-2">Task #</th>
                    <th scope="col-2">Date</th>
                    <th scope="col-2">Client</th>
                    <th scope="col-2">location</th>
                    <th scope="col-2">GHC</th>
                    <th scope="col-1">Status</th>
                    <th scope="col-1">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Litecoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Ethereum</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Ethereum</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                </tbody>
              </table>
              </div>
                  <!-- Buy panel -->

              <!-- sell panel -->
              <div class="tab-pane fade table-responsive " id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab">
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
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                  <tr>
                    <th scope="row">0025</th>
                    <td>25/08/2018</td>
                    <td>Bitcoin</td>
                    <td>100</td>
                    <td>446.99</td>
                    <td>Completed</td>
                    <td>Sent</td>
                  </tr>
                </tbody>
              </table>
              </div>
              <!-- sell panel -->

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
