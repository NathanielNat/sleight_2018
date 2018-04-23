<?php
require 'session.php';
require 'connection.php';
include 'session_variables.php';
 
  $skills = explode(",", $skill);

  if (isset($_POST['skills'])) {
    // code...
  $type = $_POST['skills'];
  $sql = "SELECT * FROM artisan_skills WHERE type = '$type'";
  $q = $conn->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
   echo "<h4> Select Skills </h4>";
  while($row = $q->fetch()):
    $che = true;
    $ski = $row['name'];

    ?>
   <?php  foreach ($skills as  $sk):  ?>
   <?php if ($sk == $ski){ ?>
  <span>
    <input type="checkbox" name="skills_name[]" value="<?= $row['name'];?>" checked > <?= $row['name'];?>
  </span>
 <?php 
  $che = false;
  } ?>
   <?php  endforeach; ?>


   <?php if ($che == true){ ?>
   <span>
    <input type="checkbox" name="skills_name[]" value="<?= $row['name'];?>"  > <?= $row['name'];?>
  </span>
   <?php  } ?>

<?php
  endwhile;
}  
   ?>
