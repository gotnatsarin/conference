<?php 
require('connect.php');
$room_id = $_POST['room_id'];

$query = "DELETE FROM `room` WHERE room_id = '$room_id'";
$result = mysqli_query($conn,$query);
if($result){
  echo "true";
}else{
  echo "false";
}
?>