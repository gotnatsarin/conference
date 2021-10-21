<?php 
require('connect.php');
$room_name = $_POST['room_name'];
$room_place = $_POST['room_place'];
$room_capacity = $_POST['room_capacity'];
$room_desc = $_POST['room_desc'];

// echo $room_name."<br>".$room_place."<br>".$room_capacity."<br>".$room_desc."<br>";


$query = "INSERT INTO room(room_name, room_place, room_capacity, room_desc) VALUES ('$room_name','$room_place','$room_capacity','$room_desc')";
$result = mysqli_query($conn,$query);
if($result){
  echo "true";
}else{
  echo "false";
}
?>