<?php
require 'includes/connection.php';


 if (isset($_POST['category'])) {
 $art_cat = $_POST['category'];
 $task_loction = $_POST['taskloction'];
 $descr = $_POST['descr'];
 $district = $_POST['district'];
 $due = $_POST['due'];

if(isset($_POST['skills'])){
	$job_type = $_POST['skills'];
  $job_type = implode(',', $job_type);
}

$dist = $_POST['district'];

//$sqlm = "SELECT * FROM users WHERE user_type = 1 AND category  = '$art_cat' AND skills IN ('$job_type') AND district = '$dist' ";

 $sqlm = "SELECT * FROM users WHERE user_type = 1 AND category  = '$art_cat' ";
 $z = $conn->query($sqlm);
 $zCount = $z->rowCount();
 $z->setFetchMode(PDO::FETCH_ASSOC);

?>
  <?php
                    // Fetchng available artisas into an associative array
                      if ($zCount > 0):
                        while ($art = $z->fetch()):
                    ?>
    <!-- Artisan Recomendations to customer -->
    <div class="account-pane mt-3" id="find_art">
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-12">
            <?php
                              if(empty($art['profile_pic'])):
                                 ?>
              <img src="user_pics/default.png" alt="<?= $art['user_name']; ?>" class="img-fluid acc_photo img-cx2 acc_photo">

              <?php else:

                                ?>

              <img src="<?= $art['profile_pic']; ?>" alt="No picture" class="img-fluid acc_photo img-cx2 acc_photo">

              <?php endif ?>


              <h4 class="cx-color mt-2 text-center" id="artisan_name"> <?= $art['user_name']; ?></h4>
              <h5 class="cx-color mt-2 text-center" id="artisan_name"> <?= $art['user_tel']; ?></h5>


          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
            <p> <i class="glyphicon glyphicon-briefcase"></i> <b>89</b>-- Number of tasks completed </p>
            <p> <i class="glyphicon glyphicon-star mb-0"></i> <b>4.5</b>-- Average Rating </p>
            <p class="cx-color mb-1">How Can I help</p>
            <p>
              <?= $art['brief']; ?>
            </p>
            <a class="btn btn-large btn-cx4 " href="#" id="post" data-toggle="modal" data-target="#<?= $art['id'];?>" onclick="">Select and continue </a>
          </div>
        </div>
      </div>
    </div>

    <!--End Of Recommended Artisans  -->



    <!-- Confirm artisan MOdal -->
    <div class="suggest"></div>

     <form action="includes/taskform.inc.php" method="POST" >
    <div class="modal fade bd-example-modal-lg" id="<?= $art['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirm Your Task</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body task-modal pl-5 pr-5">

            <h4 class="cx-color mb-4">Your Schedule <?= $art['id'];?></h4>
            <div class="row">

              <div class="col-md-7" style="border-right: #35b9e5 1px solid !important;">
                <p>You have reqsted for a service from</p>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <?php
                    if(empty($art['profile_pic'])):
                       ?>
                      <img src="user_pics/default.png" alt="<?= $art['user_name']; ?>" class="img-fluid acc_photo img-cx2 acc_photo">

                      <?php else:

                      ?>

                      <img src="<?= $art['profile_pic']; ?>" alt="No picture" class="img-fluid acc_photo img-cx2 acc_photo">

                      <?php endif ?>

                  </div>
             <input type="hidden" name="artisan_id" value="<?= $art['id'];?>">
             <input type="hidden" name="artisan" value=" <?= $art['name']; ?>">
             <input type="hidden" name="task_loction" value=" <?= $task_loction; ?>">
             <input type="hidden" name="descr" value=" <?= $descr ;?>">
             <input type="hidden" name="district" value=" <?= $district; ?>">
             <input type="hidden" name="due" value="<? $due; ?>">
             
                 

                  <div class="col-md-6 mt-5 ">
                    <h4 class="cx-color"> <?= $art['user_name'];?></h4>
                    <h5 class="cx-color"> <?= $art['user_tel'];?></h5>
                  </div>
                </div>
                <br/>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>  I work mainly in the -  <strong><?= $art['district'];?> </strong> and other surrounding districts
                  

              </div>
              <div class="col-md-5 ">
                <h5 class="cx-color"> About Your Artisan</h5>
                <p name="brief"  class="mb-2"> <?= $art['brief'];?></p>  

                 <p> <i class="glyphicon glyphicon-briefcase"></i> <b>89</b>-- Number of tasks completed </p>
            <p> <i class="glyphicon glyphicon-star mb-0"></i> <b>4.5</b>-- Average Rating </p>
              </div>
            </div>
            <div class="col-md-12">
              <h5 class="cx-color">Confirm your schedule and send a mail to the artisan or cancel</h5>
            </div>

          </div>
          <div class="modal-footer">
            <div class="row">
              <div class="col-md-4 ">
                <button type="submit" class="btn btn-outline-primary" href="#" style="cursor: pointer;" name="submit">Send Mail</button>
              </div>
              <div class="col-md-4 offset-md-2">
                <button type="submit" class="btn btn-outline-danger" href="#" style="cursor: pointer;">Cancel</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    </form>


    <?php endwhile ?>

  
    <?php endif?>

    <?php

              } else{ echo "Please Select   skill";}

            ?>
