<?php 
require('connect.php');
$room_name = $_POST['room_name'];
$room_building = $_POST['roombuilding'];
$room_capacity = $_POST['room_capacity'];
$room_desc = $_POST['room_desc'];

if($room_building == 0){
  $room_place = "อาคารอำนวยการ";
}elseif ($room_building == 1) {
  $room_place = "อาคารเฉลิมพระเกียรติ";
}

$query = "INSERT INTO room(room_name,room_building, room_place, room_capacity, room_desc) VALUES ('$room_name','$room_building','$room_place','$room_capacity','$room_desc')";
$result = mysqli_query($conn,$query);
if($result){
  echo "true";
}else{
  //ถ้าชื่อห้องประชุมซ้ำ จะตอบกลับไปว่า false
  echo "false";
}
?>