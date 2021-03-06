<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
  <title>เพิ่มห้องประชุม</title>
</head>
<body>
    <?php require('components/navbar.php'); ?>
      <br/>
      <div class="container">
        <div class="toast bg-danger text-white" data-bs-animation="true" id="myToast" data-bs-delay="2000" data-bs-autohide="true">
          <div class="toast-header bg-danger text-white">
            <strong class="me-auto"><i class="bi-gift-fill"></i>ผิดพลาด</strong>
          </div>
          <div class="toast-body">
            ชื่อห้องประชุมที่ระบุ ถูกใช้งานแล้ว กรุณาตรวจสอบอีกครั้ง
          </div>
        </div>

        <div class="toast bg-success text-white" data-bs-animation="true" id="myToast_success" data-bs-delay="2000" data-bs-autohide="true">
            <div class="toast-header bg-success text-white">
              <strong class="me-auto"><i class="bi-gift-fill"></i>สำเร็จ</strong>
            </div>
          <div class="toast-body">
            เพิ่มห้องประชุมเสร็จสิ้น
          </div>
        </div>

        <div>
          <h5>เพิ่มห้องประชุม</h5>
        </div>
          <div>
            
              <div class="row">
                <div class="col-2">
                </div>
                <div class="card col-8 border">
                  <div class="card-header text-center">
                    เพิ่มห้องประชุม
                  </div>
                  <div class="card-body">
                    <div class="card-text text-center">
                    <form method="post" enctype="multipart/form-data" id="myform">
                      <input type="text" class="form-control" name="room_name" id="room_name" placeholder="ชื่อห้องประชุม" aria-label="name" aria-describedby="email-addon">
                    </div>
                    <div class="text-center" >
                      <label style="color: red;font-size: 13px;" id="roomname_error_message"></label>
                    </div>
                    <div class="text-center">
                      <select id="room_building" name="room_building" class="form-select" aria-label="Default select example">
                        <option selected>ชื่ออาคาร</option>
                        <option value="0">อาคารอำนวยการ</option>
                        <option value="1">อาคารเฉลิมพระเกียรติ</option>
                      </select>
                    </div>
                    <div class="text-center" >
                      <label style="color: red;font-size: 13px;" id="roombuilding_error_message"></label>
                    </div>
                    <div class="card-text text-center">
                      <input type="text" class="form-control" name="room_capacity" id="room_capacity" placeholder="ความจุ/จำนวน" aria-label="name" aria-describedby="email-addon">
                    </div>
                    <div class="text-center" >
                      <label style="color: red;font-size: 13px;" id="roomcapacity_error_message"></label>
                    </div>
                    <div class="card-text text-center mb-4">
                      <textarea type="text" class="form-control" name="room_desc" id="room_desc" placeholder="รายละเอียดเพิ่มเติม" aria-label="name" aria-describedby="email-addon"></textarea>
                    </div>
                    <div class="card-text text-center">
                      <form id="file">
                      <input type="file" class="form-control" name="file" id="file" placeholder="รูปภาพ" aria-label="name" aria-describedby="email-addon">
                      </form>
                    </div>
                    <div class="text-start mb-3">
                      <a href="form_manage_meeting_room.php" class="btn btn-danger btn-lg  mt-4">ย้อนกลับ</a>
                      <button class="btn btn-success btn-lg me-md-2" type="submit" id="addroom">บันทึก</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
        </div>
      </div>
    </body>
<script src="ajax/add_room.js"></script>

</html>