<?php 
  require('connect.php');
  $room_name = $_POST['room_name'];
  $room_building = $_POST['roombuilding'];
  $room_capacity = $_POST['room_capacity'];
  $room_desc = $_POST['room_desc'];
  $newname = null;

  if(isset($_FILES['img']['name'])){

    /* Getting file name */
    $filename = $_FILES['img']['name'];
    /* Location */
    $location = "../picture/".$filename;
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    $newname = $room_name.".".$imageFileType;
    $location = "../picture/".$newname;
 
    /* Valid extensions */
    $valid_extensions = array("jpg","jpeg","png");
 
    /* Check file extension */
    if(in_array(strtolower($imageFileType), $valid_extensions)) {

       /* Upload file */
       move_uploaded_file($_FILES['img']['tmp_name'],$location);
    }

 }
 

  if($room_building == 0){
    $room_place = "อาคารอำนวยการ";
  }elseif ($room_building == 1) {
    $room_place = "อาคารเฉลิมพระเกียรติ";
  }

  $query = "INSERT INTO room(room_name,room_building, room_place, room_capacity, room_desc, room_img) VALUES ('$room_name','$room_building','$room_place','$room_capacity','$room_desc','$newname')";
  $result = mysqli_query($conn,$query);
  if($result){
    echo "true";
  }else{
    //ถ้าชื่อห้องประชุมซ้ำ จะตอบกลับไปว่า false
    echo "false";
  }

?>