<?php 
require('connect.php');
$room_id = $_POST['room_id'];
$query = "SELECT * FROM room WHERE room_id = '$room_id'";
$result = mysqli_query($conn,$query);

while($r = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $rows['roomDetailObj'][] =$r;
}

print json_encode($rows,JSON_UNESCAPED_UNICODE);
mysqli_close($conn);
?>