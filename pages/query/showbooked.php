<?php 
require('connect.php');
$room_id = $_GET['room_id'];

$query = "SELECT booking_date,period_t FROM report_booking WHERE room_id = '$room_id' ORDER BY booking_date DESC";
$result = mysqli_query($conn,$query);



if(mysqli_num_rows($result)>=1){
  while($r = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $rows['bookedObj'][] =$r;
  }
  print json_encode($rows,JSON_UNESCAPED_UNICODE);
}else{
  $query2 = "SELECT room_name FROM room WHERE room_id =  '$room_id'";
  $result2 = mysqli_query($conn,$query2);
  $roomname = mysqli_fetch_array($result2,MYSQLI_ASSOC);
  $roomname = $roomname['room_name'];
  print json_encode(array("bookedObj"=>array("room_name"=>$roomname)));
}


mysqli_close($conn);
?>