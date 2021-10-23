<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
  <title>จองห้องประชุม</title>
</head>
<body>
    <?php require('components/navbar.php'); ?>
      <br/>
      <div class="container">
        <div>
          <h6>จองห้องประชุม</h6>
        </div>
          <div></div>
            <h5>รายการห้องประชุม</h5>
          </div>
            <br>
            <div>
              <form >
                <div class="row">
                  <div class="col-4 text-center">
                    รูปภาพ
                  </div>
                  <div class="col-5 ">
                    <div class="card card-body border ">
                      <div class="row">
                        <div class="col-6">
                          <lable>ชื่อห้อง</lable>
                          <!-- <input type="text" class="form-control" id="room_name" aria-label="name" aria-describedby="email-addon" disabled="disabled"> -->
                          <div>
                            <label id="room_name"></label>
                          </div>
                          <label style="color: red;font-size: 13px;"></label>
                        </div>
                        <div class="col-6">
                          <lable>จำนวนผู้เข้าประชุม</lable>
                          <input type="text" maxlength="9" class="form-control" id="booking_capacity" placeholder="จำนวนผู้เข้าประชุม" aria-label="name" aria-describedby="email-addon">
                          <label id="capacity_error" style="color: red;font-size: 13px;"></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <lable>หัวข้อ</lable>
                          <input type="text" class="form-control" id="topic" placeholder="หัวข้อที่จะประชุม" aria-label="name" aria-describedby="email-addon">
                          <label id="topic_error" style="color: red;font-size: 13px;"></label>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <lable>ชื่อผู้จอง</lable>
                          <!-- <input type="text" class="form-control" id="full_name" aria-label="name" aria-describedby="email-addon" disabled="disabled"> -->
                          <div>
                            <label id="full_name"></label>
                          </div>
                          <label style="color: red;font-size: 13px;"></label>
                        </div>
                        <div class="col-6">
                          <lable>โทรศัพท์</lable>
                          <!-- <input type="text" class="form-control" id="phone" aria-label="name" aria-describedby="email-addon" disabled="disabled" > -->
                          <div>
                            <label id="phone"></label>
                          </div>
                          <label style="color: red;font-size: 13px;"></label>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <lable>ใช้สำหรับ</lable>
                          <input type="text" class="form-control" id="book_for"  aria-label="name" aria-describedby="email-addon">
                          <label id="usedfor_error" style="color: red;font-size: 13px;"></label>
                        </div> 
                        <div class="col-6">
                          <lable>แผนกที่ขอใช้</lable>
                          <!-- <input type="text" class="form-control" id="dep_name"  aria-label="name" aria-describedby="email-addon" disabled="disabled"> -->
                          <div>
                            <label id="dep_name"></label>
                          </div>
                          <label style="color: red;font-size: 13px;"></label>
                        </div> 
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <lable>วันที่ต้องการใช้งาน</lable>
                          <input type="date" class="form-control" id="start_date"  aria-label="name" aria-describedby="email-addon">
                          <label id="date_error" style="color: red;font-size: 13px;"></label>
                        </div>
                        <div class="col-6">
                          <lable>เวลาเริ่มต้น</lable>
                          <select id="start_time" class="form-select" aria-label="Default select example">
                            <option selected value="">ช่วงเวลาที่ต้องการจอง</option>
                            <option value="0">เช้า</option>
                            <option value="1">บ่าย</option>
                          </select>
                          <label id="time_error" style="color: red;font-size: 13px;"></label>
                        </div>
                      </div>
                      <div class="row mt-3 mb-3">
                        <div class="col-12 text-start ">
                          <label style="color: #000080;font-size: 14px;">ช่วงเช้าเวลา 09:00 น. - 12:00 น. || ช่วงบ่ายเวลา 13:00 น. - 16:00 น.</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 text-start mb-2">
                          <a href="form_building.php" class="btn btn-danger btn-lg">ย้อนกลับ</a>
                          <button class="btn btn-success btn-lg " type="button" id="submitbooking">ยืนยันการจอง</button>
                        </div>
                      </div>
                      </div>
                  </div>
                </div>
              </form>
          </div>
      </div>
</body>
<script src="ajax/booking.js"></script>
</html>