<?php 
  require('connect.php');
  $room_id = $_POST['room_id'];
  $room_name = $_POST['room_name'];
  $room_place = $_POST['room_place'];
  $user_id = $_POST['user_id'];
  $user_fullname = $_POST['user_fullname'];
  $period = $_POST['period'];
  $date = $_POST['date'];

  $find_booking = "SELECT * FROM report_booking WHERE booking_date = '$date' AND period_t = '$period' ";
  $result_find = mysqli_query($conn,$find_booking);

  if(mysqli_num_rows($result_find)>=1){
    echo "false";
  }else{

  $query = "INSERT INTO report_booking(
    `room_id`, `user_id`, `room_name`, `room_place`, `user_fullname`, `period_t`,`booking_date`
    ) VALUES (
      '$room_id','$user_id','$room_name','$room_place','$user_fullname','$period','$date'
      )";

  $result = mysqli_query($conn,$query);
  if($result){
    echo "true";
  }
}
?>