<?php

include 'connection.php';


  $sqlr = "SELECT * FROM task WHERE customer_id = $user_id";

  $p =  $conn->query($sqlr);
  $qCount = $p->rowCount();
  $p->setFetchMode(PDO::FETCH_ASSOC);

  ?>

  <tbody>
    <?php

    while($tsk = $p->fetch()):
      $art_id  = $tsk['artisan_id'];
      $art_name = filldash($art_id);
      $tsk_id = $tsk['id'];
      $tsk_comp = $tsk['completed'];
      $tsk_rate = $tsk['rate'];
      ?>
    <tr>
      <td><?= $tsk['scheduled_date']; ?></td>
      <td><?= $art_name;?></td>
      <td id="tsk_comp" > <?php if ($tsk_comp  == 0  ): ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?= $tsk_id?>">
          Status
          </button>

        <?php else:  ?>
        <b> Completed</b>
      <?php  endif;?></td>

      <td>
        <?php if ($tsk_comp  == 0  ): ?>
          <p>Rating</p>
          <?php else:  ?>

        <?= $tsk_rate;?>
      <?php  endif;?>
    </td>

    </tr>
  </tbody>


  <!-- The Modal -->
  <div class="modal fade" id="<?= $tsk_id?>">
    <div class="modal-dialog">
      <div class="modal-content">

        <form  action="includes/reviews.inc.php" method="POST">
  <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Comfirm Completion of Task</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->

          <input type="hidden" name="tsk_id" value="<?= $tsk_id; ?>">

        <div class="modal-body">

          <div class="row">
            <div class="col-6">
              Confirm Completion

              <span class="switch">
                <input type="checkbox" name="tsk_finish" class="switch" id="comp" value="1" required>
                <label for="switch-id">Completed</label>
              </span>
            </div>
            <div class="col-6">
              <div class="container">
                <!-- <div class="rate"> -->
                  <div class="star-rating">
                    <span class="fa fa-star-o fa-2x " data-rating="1" id="stars"></span>
                    <span class="fa fa-star-o fa-2x" data-rating="2" id="stars"></span>
                    <span class="fa fa-star-o fa-2x" data-rating="3" id="stars"></span>
                    <span class="fa fa-star-o fa-2x" data-rating="4" id="stars"></span>
                    <span class="fa fa-star-o fa-2x" data-rating="5" id="stars"></span>
                    <input type="hidden" name="rate" class="rating-value" id="rate">
                  </div>

                <!-- </div> -->

              </div>


                  </div>

                    </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" name="submit" >Submit</button>
        </div>

</form>
      </div>
    </div>
  </div>


        <!-- End of modal -->
<?php endwhile ; ?>
