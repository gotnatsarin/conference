<?php 
$email = $_POST['email'];
$password =$_POST['password'];

require('connect.php');
if(isset($email)){
  $query = "SELECT * FROM user WHERE email = '$email'";
  $result = mysqli_query($conn,$query);

  $row = mysqli_fetch_array($result ,MYSQLI_ASSOC);
  if($row['email']==$email){
    echo "true";
  }else{
    echo "false";
  }
}
?>