<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
      require('mdb_js.php'); 
      require('mdb_css.php');
    ?>
    <title>ระบบจองห้องประชุม : Reserve Conference System</title>
  </head>
  <body>
      <!-- background -->
      <div class="bg-image" style="background-image: url('https://www.img.in.th/images/a7f91e28a2cb2a58f9900e77b6decea0.jpg'); height: 100vh">
      <div class="toast bg-danger text-white" data-bs-animation="true" id="myToast" data-bs-delay="2000" data-bs-autohide="true">
        <div class="toast-header bg-danger text-white">
          <strong class="me-auto"><i class="bi-gift-fill"></i>ผิดพลาด</strong>
        </div>
        <div class="toast-body">
          อีเมลไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง
        </div>
      </div>
        <br/><br/>
          <div class="loginBoxContent">
            <div class="loginBoxContent_text">
            <!-- Start Logo -->
              <div class="text-center">
              <img src="../img/logo.png" style="width: 100px; height: 100px" class=" shadow-2-strong" alt="" />
              </div>  
                <br/>
                <div class="text-center">
                  <h4>WE MEET Booking</h4>
                  <hr>
                </div> 
              <!-- End Logo -->
            
                <div class="text-center">
                  <h3>ลืมรหัสผ่าน</h3>
                </div>
                  <br/>
                <form action="#" style="text-align: center;">
                <!-- <form method="POST" action="query/forgot_pass.php" style="text-align: center;"> -->
                <div>
                <p>โปรดกรอกอีเมลให้ถูกต้องเพื่อนำไปใช้ในการยืนยันบัญชีและเปลี่ยนรหัสผ่าน</p>
                </div>
                    <!-- Username input -->
                  <div class="input-group">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-envelope"></i></span>
                    <input id="email" type="text" class="form-control rounded" placeholder="Email" aria-label="email" aria-describedby="username-addon" />
                  </div>
                  <div class="text-center" ><label style="color: red;font-size: 13px;" id="error_message"></label></div>
                    <!--  button -->
                    <button onclick="javascript:location.href='index.php'" class="btn btn-warning mt-4" type="button">ย้อนกลับ</button>
                    <button id="submit" type="submit" class="btn btn-primary  mt-4">เปลี่ยนรหัสผ่าน</button>
                </form>
              </div>
            </div>
      </div>
  </body>
  <script src="ajax/forgot_pass.js"></script>
</html>