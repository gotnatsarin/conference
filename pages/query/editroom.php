<?php
require('connect.php');
$room_id = $_POST['room_id'];
$room_name = $_POST['room_name'];
$old_name = $_POST['old_name'];
$room_building = $_POST['room_building'];
$room_capacity = $_POST['room_capacity'];
$room_desc = $_POST['room_desc'];
$room_img = $_POST['room_img'];
$room_place = "";
$newname = null;

if($room_building==0){
  $room_place = "อาคารอำนวยการ";
}else{
  $room_place = "อาคารเฉลิมพระเกียรติ";
}

$sql_checkroom = "SELECT * FROM room WHERE room_id != '$room_id' AND room_name = '$room_name'";
$result_checkroom = mysqli_query($conn,$sql_checkroom);
if(mysqli_num_rows($result_checkroom)>=1){
  echo "roomname is duplicate";
}else{
  if(isset($_FILES['img']['name'])){
    if($old_name != "" || $old_name != null){
      $old_location = "../picture/".$old_name;
      unlink($old_location);
    }

    /* Getting file name */
    $filename = $_FILES['img']['name'];
    /* Location */
    $location = "../picture/".$filename;
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);
    $newname = $room_name.".".$imageFileType;
    $location = "../picture/".$newname;
    $query = "UPDATE `room` SET `room_name`='$room_name',`room_building`='$room_building', `room_place`='$room_place',`room_capacity`='$room_capacity',`room_desc`='$room_desc',`room_img`='$newname' WHERE room_id = '$room_id'";
    /* Valid extensions */
    $valid_extensions = array("jpg","jpeg","png");
    /* Check file extension */
    if(in_array(strtolower($imageFileType), $valid_extensions)) {
       /* Upload file */
       move_uploaded_file($_FILES['img']['tmp_name'],$location);
    }
  }else{
    $query = "UPDATE `room` SET `room_name`='$room_name',`room_building`='$room_building', `room_place`='$room_place',`room_capacity`='$room_capacity',`room_desc`='$room_desc' WHERE room_id = '$room_id'";
  }
  $result = mysqli_query($conn,$query);
  if($result){
    echo "true";
  }else{
    echo "false";
  }
}
mysqli_close($conn);
?>