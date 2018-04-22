<?php
include 'connection.php';

$art_type = $_POST['artisan_cat'];
$skills = $_POST['skills_name[]';
$district  =$_POST['district'];
$loc = $_POST['task_loction'];
$descr = $_POST['descr'];
$due_date = $_POST['due'];
$artisan_id = $_POST['artisan_id'];
$customer_id =$_POST['user_id'];

$sql = "SELECT * FROM artisan WHERE category = $art_type AND  skills IN $skills AND district = $district ";

$q = $conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
$row = $q->fetch();

while ($row)
?>
<div class="col-md-7 mb-4">
<div class="account-pane mt-3" >
  <div class="row">
    <div class="col-md-6">
          <div class="col-md-12">
            <!-- artisan_picture -->
            <img src="img/path3.jpg" alt="" class="img-fluid acc_photo img-cx2 acc_photo">
              <h4 class="cx-color mt-2 text-center" id="artisan_name"><?= $artisan_name; ?></h4>

          </div>
    </div>
    <div class="col-md-6">
      <div class="col-md-12">
    <p> <i class="glyphicon glyphicon-briefcase"></i> <b>89</b>-- Number of tasks completed </p>
    <p> <i class="glyphicon glyphicon-star mb-0"></i> <b>4.5</b>-- Average Rating </p>
    <p class="cx-color mb-1">How Can I help</p>
    <p><?=$brief; ?> </p>
     <a class="btn btn-large btn-cx4 " href="#" id="post" data-toggle="modal" data-target="#exampleModal">Select and continue </a>


      </div>
    </div>


  </div>
</div>
<?php
  endwhile
 ?>
