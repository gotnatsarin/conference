<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
 <!--  Flatpicker Styles  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
  <title>จองห้องประชุม</title>
</head>
<body>
    <?php require('components/navbar.php'); ?>
    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">กรุณายืนยัน</h5>
          </div>
          <div class="modal-body">
            ท่านต้องการจองห้องประชุมหรือไม่ ?
          </div>
          <div class="modal-footer">
            <button type="button" onclick="javascript:$('#mymodal').modal('hide');" class="btn btn-danger" >ยกเลิก</button>
            <button type="button" id="confirm" class="btn btn-success">ยืนยันการจอง</button>
          </div>
        </div>
      </div>
    </div>
      <br/>
      <div class="container">
        <div>
          <h6>จองห้องประชุม</h6>
        </div>
          <div>
            <h5>รายการห้องประชุม</h5>
          </div>
            <br>
            <div>
              <form>
                <div class="row">
                  <div class="col-6">
                    <div class="row col-12 text-center">
                      <b class="mb-4">รูปภาพ</b> </br>
                        <img id="room_img" style="width: 700px">
                    </div>
                  </div>


                  <div class="col-6 ">
                    <div class="card card-body border ">
                      <div class="row">
                        <div class="col-6">
                          <b><lable>ชื่อห้อง</lable></b>
                          <div>
                            <label id="room_name"></label>
                          </div>
                          <label style="color: red;font-size: 13px;"></label>
                        </div>
                        <div class="col-6">
                          <b><lable>ชื่อผู้จอง</lable></b>
                          <div>
                            <label id="full_name"></label>
                          </div>
                          <label style="color: red;font-size: 13px;"></label>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-6">
                        <b><lable>แผนกที่ขอใช้</lable></b>
                          <div>
                            <label id="dep_name"></label>
                          </div>
                          <label style="color: red;font-size: 13px;"></label>
                        </div> 
                        <div class="col-6">
                          <b><lable>โทรศัพท์</lable></b>
                          <div>
                            <label id="phone"></label>
                          </div>
                          <label style="color: red;font-size: 13px;"></label>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <input type="hidden" id="room_id" value="<?php echo $_GET['room_id']; ?>">
                          <input type="hidden" id="user_id" value="<?php echo $session_login_id; ?>">
                          <input type="hidden" id="room_place">
                          <b><lable>หัวข้อ</lable></b>
                          <input type="text" class="form-control" id="topic" placeholder="ระบุหัวข้อที่ขอใช้" aria-label="name" aria-describedby="email-addon">
                          <label id="topic_error" style="color: red;font-size: 13px;"></label>
                        </div>
                        <div class="col-6">
                          <b><lable>ใช้สำหรับ</lable></b>
                          <input type="text" class="form-control" id="book_for" placeholder="ระบุประเภท"  aria-label="name" aria-describedby="email-addon">
                          <label id="usedfor_error" style="color: red;font-size: 13px;"></label>
                        </div> 
                      </div>
                      <div class="row">
                        <div class="col-6">
                        <b><lable>วันที่ต้องการใช้งาน</lable></b>
                          <input id="start_date" class="form-select"  placeholder="YYYY/MM/DD" data-input>
                          <label id="date_error" style="color: red;font-size: 13px;"></label>
                        </div>
                        <div class="col-6">
                          <b><lable>ช่วงเวลา</lable></b>
                          <select id="start_time" class="form-select" aria-label="Default select example">
                            <option selected value="">ระบุช่วงเวลาที่ต้องการ</option>
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
                        <div class="col-12 text-start">
                          <a href="form_building.php" class="btn btn-danger btn-lg">ย้อนกลับ</a>
                          <button class="btn btn-success btn-lg " type="button" id="submitbooking">จอง</button>
                        </div>
                      </div>
                      </div>
                  </div>
                </div>
              </form>
          </div>
      </div>
      <div class="toast bg-success text-white" data-bs-animation="true" id="booked_success" data-bs-delay="2000" data-bs-autohide="true">
          <div class="toast-header bg-success text-white">
          <strong class="me-auto"><i class="bi-gift-fill"></i>สำเร็จ</strong>
          </div>
        <div class="toast-body">
        จองเสร็จสิ้น
        </div>
      </div>
        <div class="toast bg-danger text-white" data-bs-animation="true" id="booked_failed" data-bs-delay="2000" data-bs-autohide="true">
          <div class="toast-header bg-danger text-white">
            <strong class="me-auto"><i class="bi-gift-fill"></i>ผิดพลาด</strong>
          </div>
          <div class="toast-body">
            จองห้องประชุมไม่สำเร็จ
          </div>
        </div>
         <!--  Flatpickr  -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
        
</body>
<script>
    $("#start_date").flatpickr({
    enableTime: false,
    dateFormat: "Y-m-d",
    "disable": [
        function(date) {
           return (date.getDay() === 0 || date.getDay() === 6);  // disable weekends
        }
    ],
    "locale": {
        "firstDayOfWeek": 1 // set start day of week to Monday
    }
});
  </script>
<script src="ajax/booking.js"></script>
</html>