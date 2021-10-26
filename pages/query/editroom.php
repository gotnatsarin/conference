<?php
require('connect.php');
$room_id = $_POST['room_id'];
$room_name = $_POST['room_name'];
$room_building = $_POST['room_building'];
$room_capacity = $_POST['room_capacity'];
$room_desc = $_POST['room_desc'];
$room_img = $_POST['room_img'];
$room_place = "";
if($room_building==0){
  $room_place = "อาคารอำนวยการ";
}else{
  $room_place = "อาคารเฉลิมพระเกียรติ";
}

// echo $room_id."<br>".$room_name."<br>".$room_building."<br>".$room_place."<br>".$room_capacity."<br>".$room_desc."<br>";

$sql_checkroom = "SELECT * FROM room WHERE room_id != '$room_id' AND room_name = '$room_name'";
$result_checkroom = mysqli_query($conn,$sql_checkroom);
if(mysqli_num_rows($result_checkroom)>=1){
  echo "roomname is duplicate";
}else{
  $query = "UPDATE `room` SET `room_name`='$room_name',`room_building`='$room_building', `room_place`='$room_place',`room_capacity`='$room_capacity',`room_desc`='$room_desc' WHERE room_id = '$room_id'";
  $result = mysqli_query($conn,$query);
  if($result){
    echo "true";
  }else{
    echo "false";
  }
}

?>