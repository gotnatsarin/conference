<?php 
require('connect.php');
if(isset($_GET['id_building'])){
$room_building = $_GET['id_building'];

$query = "SELECT * FROM room WHERE room_building = '$room_building'";
$result = mysqli_query($conn,$query);
$room =array();
while($r = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $rows['roomByBuildingObj'][] = $r;
}
$json =  json_encode($rows,JSON_UNESCAPED_UNICODE);
echo $json;
}else{
  echo "No ID has been found";
}
mysqli_close($conn);
?>