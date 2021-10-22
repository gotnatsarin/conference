<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
  <title>จัดการห้องประชุม</title>
</head>
<body>
    <?php require('components/navbar.php'); ?>
      <br/>
      <div class="container">
        <div>
          <h5>แก้ไขห้องประชุม</h5>
        </div>
          <div>
            <form>
              <div class="row">
                <div class="col-2">
                </div>
                <div class="card col-8 border">
                  <div class="card-header text-center">
                    แก้ไขห้องประชุม
                  </div>
                  <div class="card-body">
                    <div class="card-text text-center">
                      <input type="text" class="form-control" id="room_name" placeholder="ชื่อห้องประชุม" aria-label="name" aria-describedby="email-addon">
                    </div>
                    <div class="text-center" >
                      <label style="color: red;font-size: 13px;" id="roomname_error_message"></label>
                    </div>
                    <div class="card-text text-center">
                      <input type="text" class="form-control" id="room_place" placeholder="ชื่ออาคาร" aria-label="name" aria-describedby="email-addon">
                    </div>
                    <div class="text-center" >
                      <label style="color: red;font-size: 13px;" id="roomplace_error_message"></label>
                    </div>
                    <div class="card-text text-center">
                      <input type="text" class="form-control" id="room_capacity" placeholder="ความจุ/จำนวน" aria-label="name" aria-describedby="email-addon">
                    </div>
                    <div class="text-center" >
                      <label style="color: red;font-size: 13px;" id="roomcapacity_error_message"></label>
                    </div>
                    <div class="card-text text-center mb-4">
                      <textarea type="text" class="form-control" id="room_desc" placeholder="รายละเอียดเพิ่มเติม" aria-label="name" aria-describedby="email-addon"></textarea>
                    </div>
                    <div class="card-text text-center">
                      <input type="file" class="form-control" id="room_img" placeholder="รูปภาพ" aria-label="name" aria-describedby="email-addon">
                    </div>
                    <div class="text-start mb-3">
                      <a href="form_manage_meeting_room.php" class="btn btn-danger btn-lg  mt-4">ย้อนกลับ</a>
                      <button class="btn btn-success btn-lg me-md-2" type="button" id="addroom">บันทึก</button>
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