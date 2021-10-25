<?php 
require('connect.php');
$room_id = $_GET['room_id'];

$query = "SELECT booking_date,period_t FROM report_booking WHERE room_id = '$room_id'";
$result = mysqli_query($conn,$query);

while($r = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $rows['bookedObj'][] =$r;
}
print json_encode($rows,JSON_UNESCAPED_UNICODE);
mysqli_close($conn);
?>