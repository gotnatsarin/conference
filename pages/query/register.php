<?php 
require('connect.php');
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
$idEmployee = mysqli_real_escape_string($conn,$_POST['idEmployee']);
$department = mysqli_real_escape_string($conn,$_POST['department']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$Phone = mysqli_real_escape_string($conn,$_POST['Phone']);

// echo $username."<br>".$password."<br>".$fullname."<br>".$idEmployee."<br>".$department."<br>".$email."<br>".$Phone."<br>";

$key = "newDEVsince2021";
$hash_login_password = hash_hmac('sha256',$password,$key);

// $query_check = "SELECT * FROM user WHERE email ='$email'";
// $result_check = mysqli_query($conn,$query_check);
// $row = mysqli_fetch_array($result_check,MYSQLI_ASSOC);


$query = "INSERT INTO `user`(
`emp_id`,
`username`,
`password`,
`email`,
`full_name`,
`dep_name`,
`phone`,
`role`) VALUES ('$idEmployee','$username','$password','$email','$fullname','$department','$Phone','1')";
$result = mysqli_query($conn,$query);
if($result){
  echo "true";
}else{
  echo "false";
}
mysqli_close($conn);
?>