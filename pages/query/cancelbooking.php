<?php 
require('connect.php');
$id = $_POST['id'];

$query = "DELETE FROM `report_booking` WHERE id = '$id'";
$result2 = mysqli_query($conn,$query);
if($result2){
  echo "true";
}else{
  echo "false";
}

?>