<?php 
require('connect.php');
$room_id = $_GET['room_id'];
$user_id = $_GET['user_id'];


$query = "SELECT * FROM user,room WHERE id = '$user_id' AND room_id = '$room_id'";
$result = mysqli_query($conn,$query);

while($r = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $rows['roomAndUserObj'][] = $r;
}

print json_encode($rows,JSON_UNESCAPED_UNICODE);
mysqli_close($conn);

?>