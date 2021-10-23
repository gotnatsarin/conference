<?php 
require('connect.php');
$query = "SELECT * FROM room ORDER BY `room`.`room_place` ASC";
$result = mysqli_query($conn,$query);
$room =array();
while($r = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $rows['roomObj'][] = $r;
}
print json_encode($rows,JSON_UNESCAPED_UNICODE);
mysqli_close($conn);
?>