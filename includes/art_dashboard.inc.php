<?php

include 'connection.php';


$sqlr = "SELECT * FROM task WHERE artisan_id = $user_id";

$p =  $conn->query($sqlr);
$qCount = $p->rowCount();
$p->setFetchMode(PDO::FETCH_ASSOC);

 ?>

 <tbody>
   <?php

   while($tsk = $p->fetch()):
     $cust_id  = $tsk['customer_id'];
     $cust_name = filldash($cust_id);
     $tsk_id = $tsk['id'];
     $tsk_comp = $tsk['completed'];
     $tsk_loc = $tsk['location'];
     $tsk_rate = $tsk['rate'];
     ?>
   <tr>
     <td><?= $tsk['created_at']; ?></td>
     <td><?= $cust_name;?></td>
     <td> <?= $tsk_loc;?></td>
     <td id="tsk_comp" > <?php if ($tsk_comp  == 0  ): ?>
       <form action="includes/email.php" method="POST">
         <input type="hidden" name="cust_id" value="<?= $cust_id ; ?>">
          <input type="hidden" name="tsk_id" value="<?= $tsk_id ; ?>">

         <button type="submit" name="submit" class="btn btn-primary">
           Cancel

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

<?php  endwhile; ?>
