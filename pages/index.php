<?php 
  session_start();
  if (isset($_SESSION['login_id'])) {
    header( "location: main.php" );
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php require('mdb_js.php'); ?>
      <?php require('mdb_css.php'); ?>
      <title>ระบบจองห้องประชุม : Reserve Conference System</title>
  </head>
  <body>
    <div class="bg-image" style="background-image: url('https://www.img.in.th/images/a7f91e28a2cb2a58f9900e77b6decea0.jpg'); height: 100vh">
      <div class="toast bg-danger text-white" data-bs-animation="true" id="myToast" data-bs-delay="2000" data-bs-autohide="true">
        <div class="toast-header bg-danger text-white">
          <strong class="me-auto"><i class="bi-gift-fill"></i>ผิดพลาด</strong>
        </div>
        <div class="toast-body">
          ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง
        </div>
      </div>
      <br/><br/>
        <div class="loginBoxContent">
          <div class="loginBoxContent_text">
            <div class="text-center">
              <img src="../img/logo.png" style="width: 100px; height: 100px" class=" shadow-2-strong" alt="" />
            </div>  
                <br/>
                <div class="text-center">
                  <h4>WE MEET Booking</h4>
                  <hr>
                </div> 
              <div class="text-center">
                <h2>เข้าสู่ระบบ</h2>
              </div>
                <br/>
                <form action="javascript:void(0);" style="text-align: left;">
                  <div class="input-group">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-user"></i></span>
                    <input id="username" type="text" class="form-control rounded" placeholder="Username" aria-label="username" aria-describedby="username-addon"/>
                  </div>
                  <div class="text-center" ><label style="color: red;font-size: 13px;" id="username_error_message"></label></div>
                  <div class="input-group">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-unlock-alt"></i></span> 
                    <input id="password" type="password" class="form-control rounded"  placeholder="Password" aria-label="password" aria-describedby="password-addon" />
                  </div>
                  <div class="text-center" ><label style="color: red;font-size: 13px;" id="password_error_message"></label></div>
                  <div class="text-center">
                    <button id="submit" type="submit" class="btn btn-success btn-lg mt-4">เข้าสู่ระบบ</button>
                  <div>
                </form>
                <br/>
                <figcaption class="figure-caption text-center"><a href="forgot_pass.php">ลืมรหัสผ่าน</a> || <a href="form_register.php">สมัครสมาชิก</a></figcaption>
              </div>          
        </div>

  </body>
  <script src="ajax/login.js"></script>
</html>