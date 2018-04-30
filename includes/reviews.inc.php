<?php




include 'connection.php';
if (isset($_POST['submit'])) {
$rating = 4;
$completed =$_POST['tsk_finish'];
$task_id = $_POST['tsk_id'];

$sql = $conn->prepare("UPDATE task SET rate=:rating, completed=:completed WHERE id =:tsk_id");

$sql->bindParam(':rating',$rating);
$sql->bindParam(':completed',$completed);
$sql->bindParam(':tsk_id',$task_id);

$sql->execute();
header("Location: user_dashboard.php");
exit();
}

?>
