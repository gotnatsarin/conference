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
          อีเมลซ้ำ
        </div>
      </div>
        </br></br></br>
        <div class="loginBoxContent">
          <div class="loginBoxContent_text">
            <!-- Start Logo -->
            <div class="text-center">
              <img src="../img/logo.png" style="width: 65px; height: 65px" class="shadow-2-strong" alt="" />
            </div>  
              <br/>
              <div class="text-center">
                <h6>WE MEET Booking</h6>
                <hr>
              </div>
            <!-- End Logo -->
                <div class="text-center">
                  <h5>Register</h5>
                </div>
                  <br/>
                <form action="javascript:void(0);" style="text-align: left;">

                    <!-- ทดลอง -->
                  <div class="input-group">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-user fa-xs"></i></span>
                    <input name="username" id="username" type="text" class="form-control rounded" placeholder="Username" aria-label="username">
                  </div>

                  <div class="text-center"><label style="color: red;font-size: 12px;" id="username_error_message"></label></div>
          
                  <div class="input-group">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-unlock-alt fa-xs"></i></span>
                    <input name="password" id="password" type="password" class="form-control rounded" placeholder="Password" aria-label="password" >
                  </div>

                  <div class="text-center"><label style="color: red;font-size: 12px;" id="password_error_message"></label></div>

                  <div class="input-group">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-file-signature fa-xs"></i></span>
                    <input name="fullname" id="fullname" type="text" class="form-control rounded" placeholder="Full Name" aria-label="fullname" >
                  </div>

                  <div class="text-center"><label style="color: red;font-size: 12px;" id="fullname_error_message"></label></div>
                  
                  <div class="input-group">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-list-ol fa-xs"></i></span>
                    <input name="idEmployee" id="idEmployee" type="text" class="form-control rounded" placeholder="Employee ID" aria-label="idEmployee"/>
                  </div>

                  <div class="text-center"><label style="color: red;font-size: 12px;" id="idEmployee_error_message"></label></div>

                  <div class="input-group">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-list-ol fa-xs"></i></span>
                    <input name="department" id="department" type="text" class="form-control rounded" placeholder="Department" aria-label="department">
                  </div>

                  <div class="text-center"><label style="color: red;font-size: 12px;" id="department_error_message"></label></div>

                  <div class="input-group">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-envelope fa-xs"></i></span>
                    <input name="email" id="email" type="email" class="form-control rounded" placeholder="Email" aria-label="email"/>
                  </div>

                  <div class="text-center"><label style="color: red;font-size: 12px;" id="email_error_message"></label></div>

                  <div class="input-group">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-phone-square-alt fa-xs"></i></span>
                    <input name="Phone" id="Phone" type="text" class="form-control rounded" placeholder="เบอร์โทรศัพท์" aria-label="phone"/>
                  </div>

                  <div class="text-center"><label style="color: red;font-size: 12px;" id="Phone_error_message"></label></div>

                  <!-- ทดลอง -->
                  <div class="text-center mt-2">
                    <button onclick="javascript:location.href='index.php'" class="btn btn-warning mt-4" type="button">ย้อนกลับ</button>
                    <button id="submit_reg" type="submit" class="btn btn-success mt-4">ยืนยัน</button>
                  </div>
                </form>
              </div>
            </div>
      </div>
  </body>
  <script src="ajax/form_register.js" ></script>
</html>