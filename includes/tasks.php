

<?php
require 'connection.php';
  if (isset($_POST['skills'])) {
    // code...
  $type = $_POST['skills'];
  $sql = "SELECT * FROM artisan_skills WHERE type = '$type'";
  $q = $conn->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
   echo "<h4>  Select type of task  </h4>";
  while($row = $q->fetch()):
    ?>
  <span><input class="messageCheckbox" type="checkbox" name="skills_name[]" value="<?= $row['name'];?>"><?= $row['name'];?></span>

<?php
  endwhile;
}
   ?>
