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
        <br/><br/>
        <div class="loginBoxContent">
          <div class="loginBoxContent_text">
            <!-- Start Logo -->
            <div class="text-center">
              <img src="../img/logo.png" style="width: 100px; height: 100px" class="shadow-2-strong" alt="" />
            </div>  
              <br/>
              <div class="text-center">
                <h5>WE MEET Booking</h5>
                <hr>
              </div> 
            <!-- End Logo --> 
                <div class="text-center">
                  <h4>Register</h4>
                </div>
                  <br/>
                <form method="POST" style="text-align: left;">

                    <!-- ทดลอง -->
                  <div class="input-group mb-3">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-user"></i></span>
                    <input id="username" type="text" class="form-control rounded" placeholder="Username" aria-label="username" onblur="this.value=removeSpaces(this.value);"
                      aria-describedby="username-addon"/>
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-unlock-alt"></i></span>
                    <input id="password" type="password" class="form-control rounded" placeholder="Password" aria-label="password" onblur="this.value=removeSpaces(this.value);"
                      aria-describedby="password-addon"/>
                  </div>
                  
                  <div class="input-group mb-3">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-signature"></i></span>
                    <input id="firstname" type="firstname" class="form-control rounded" placeholder="ชื่อ" aria-label="firstname" onblur="this.value=removeSpaces(this.value);"
                      aria-describedby="firstname-addon"/>
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-signature"></i></span>
                    <input id="lastname" type="lastname" class="form-control rounded" placeholder="นามสกุล" aria-label="lastname" onblur="this.value=removeSpaces(this.value);"
                      aria-describedby="lastname-addon"/>
                  </div>
                  
                  <div class="input-group mb-3">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-list-ol"></i></span>
                    <input id="idEmployee" type="password" class="form-control rounded" placeholder="รหัสพนักงาน" aria-label="idEmployee" onblur="this.value=removeSpaces(this.value);"
                      aria-describedby="idEmployee-addon"/>
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-list-ol"></i></span>
                    <input id="idEmployee" type="password" class="form-control rounded" placeholder="แผนก" aria-label="idEmployee" onblur="this.value=removeSpaces(this.value);"
                      aria-describedby="idEmployee-addon"/>
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-envelope"></i></span>
                    <input id="email" type="email" class="form-control rounded" placeholder="Email" aria-label="email" onblur="this.value=removeSpaces(this.value);"
                      aria-describedby="password-addon"/>
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text border-0" id="search-addon"><i class="fas fa-phone-square-alt"></i></span>
                    <input id="Phone" type="text" class="form-control rounded" placeholder="เบอร์โทรศัพท์" aria-label="phone" onblur="this.value=removeSpaces(this.value);"
                      aria-describedby="password-addon"/>
                  </div>
                  <!-- ทดลอง -->
                  <div class="text-center">
                    <button onclick="javascript:location.href='index.php'" class="btn btn-warning mt-4" type="button">ย้อนกลับ</button>
                    <button type="submit" class="btn btn-success mt-4">ยืนยัน</button>
                  </div>
                </form>
              </div>
            </div>
      </div>
  </body>
</html>