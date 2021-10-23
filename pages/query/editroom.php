<?php
require('connect.php');
$room_id = $_POST['room_id'];
$room_name = $_POST['room_name'];
$room_place = $_POST['room_place'];
$room_capacity = $_POST['room_capacity'];
$room_desc = $_POST['room_desc'];
$room_img = $_POST['room_img'];


$query = "UPDATE `room` SET `room_name`='$room_name',`room_place`='$room_place',`room_capacity`='$room_capacity',`room_desc`='$room_desc',`room_img`='$room_img' WHERE room_id = '$room_id'";
$result = mysqli_query($conn,$query);

?>