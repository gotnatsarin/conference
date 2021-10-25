<?php 
require('connect.php');
$room_id = $_POST['room_id'];

$find_room = "SELECT * FROM `room` WHERE room_id = '$room_id'";
$result = mysqli_query($conn,$find_room);

$row =  mysqli_fetch_array($result,MYSQLI_ASSOC);
if($row['room_img']!=null){
  $location = "../picture/".$row['room_img'];
  unlink($location);
}
$query = "DELETE FROM `room` WHERE room_id = '$room_id'";
$result2 = mysqli_query($conn,$query);
if($result2){
  echo "true";
}else{
  echo "false";
}

?>