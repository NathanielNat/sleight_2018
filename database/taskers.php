<?php
require 'connection.php';

 $type = $_POST['rate_value'];
  $sql = "SELECT * FROM artisan_skills WHERE type = '$type'";
  $q = $conn->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
   echo "<h4> Select Skills </h4>";
  while($row = $q->fetch()):
    ?>
  <span><input type="checkbox" name="skills_name[]" value="<?= $row['name'];?>"><?= $row['name'];?></span>

<?php
  endwhile;

   ?>
