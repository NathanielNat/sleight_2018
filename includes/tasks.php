<?php
require 'connection.php';

 $type = $_POST['skills'];
  $sql = "SELECT * FROM artisan_skills WHERE type = '$type'";
  $q = $conn->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
   echo "<h4> Select type of task </h4>";
  while($row = $q->fetch()):
    ?>
  <span><input type="checkbox" name="skills_name[]" value="<?= $row['name'];?>"><?= $row['name'];?></span>

<?php
  endwhile;

   ?>

   <?php

// $district  = $_POST['zone']
// $dis = "SELECT  FROM * districts ";
// $q_1 = $conn->query($dis);
// $q_1->setFetchMode(PDO::FETCH_ASSOC);
// while($loc = $q_1->fetch()):
    ?>
    <!-- <span>

      <option value="" name = "districts[]" value="="></option> </span> -->

    <?php
// endwhile;
    ?>
