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

      <td>Rating</td>

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
          Modal body..
          <div class="row">
            <div class="col-6">
              Confirm Completion
              <?= $tsk_id?>
              <span class="switch">
                <input type="checkbox" name="tsk_finish" class="switch" id="comp" value="1" required>
                <label for="switch-id">Completed</label>
              </span>
            </div>
            <div class="col-6">
          <div class="star-rating" >
                      <span class="fa fa-star-o" data-rating="1"></span>
                      <span class="fa fa-star-o" data-rating="2"></span>
                      <span class="fa fa-star-o" data-rating="3"></span>
                      <span class="fa fa-star-o" data-rating="4"></span>
                      <span class="fa fa-star-o" data-rating="5"></span>
                      <input type="hidden" name="whatever2" class="rating-value" id="rate">
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
