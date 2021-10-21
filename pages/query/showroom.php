<?php 
require('connect.php');
$query = "SELECT * FROM room";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  echo $row['room_name'];
}

mysqli_close($conn);
?>
