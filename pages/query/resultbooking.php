<?php 
require('connect.php');
$user_id = $_GET['user_id'];

$query = "SELECT * FROM report_booking WHERE user_id = '$user_id '";
$result = mysqli_query($conn,$query);

while($r = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $rows['resultBookingObj'][]=$r ;
}
print json_encode($rows,JSON_UNESCAPED_UNICODE);
mysqli_close($conn);

?>