<?php 
require('connect.php');

$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$key = "";
$hash_login_password = hash_hmac('sha256',$password,$key);

$sql = "SELECT * FROM user WHERE username=? AND password=?";
$stmt = mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"ss",$username, $password);
mysqli_stmt_execute($stmt);
$result_user = mysqli_stmt_get_result($stmt);
if ($result_user->num_rows ==1 ){
  session_start();
  $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
  mysqli_close($conn);
  $_SESSION['login_id'] = $row_user['id'];
  if ($row_user['role'] == 0) {
    $_SESSION['is_admin'] = "yes";
    echo "true";
  } else {
    $_SESSION['is_admin'] = "no";
    echo "true";
  }
} else {
 echo "false";
}

?>