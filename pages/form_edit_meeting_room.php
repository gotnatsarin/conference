<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
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
          <form method="post" enctype="multipart/form-data" id="myform">
          <input type="hidden" id="room_id" value="<?php echo $_GET['id']; ?>"/>
          <input type="hidden" id="old_name" />
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
                    <div class="text-center">
                      <select id ="room_building" class="form-select" aria-label="Default select example">
                        <option disabled>ชื่ออาคาร</option>
                        <option value="0">อาคารอำนวยการ</option>
                        <option value="1">อาคารเฉลิมพระเกียรติ</option>
                      </select>
                    </div>
                    <div class="text-center" >
                      <label style="color: red;font-size: 13px;" id="roombuilding_error_message"></label>
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
                      <input type="file" class="form-control" name="file" id="file" placeholder="รูปภาพ" aria-label="name" aria-describedby="email-addon">
                    </div>
                    <div class="text-start mb-3">
                      <a href="form_manage_meeting_room.php" class="btn btn-danger btn-lg  mt-4">ย้อนกลับ</a>
                      <button class="btn btn-success btn-lg me-md-2" type="button" id="editroom">บันทึก</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
        </div>
      </div>
  <div class="toast bg-success text-white" data-bs-animation="true" id="editSuccessToast" data-bs-autohide="true">
      <div class="toast-header bg-success text-white">
        <strong class="me-auto"><i class="bi-gift-fill"></i>สำเร็จ</strong>
      </div>
    <div class="toast-body">
      แก้ไขห้องประชุมสำเร็จแล้ว
    </div>
  </div>

  <div class="toast bg-danger text-white" data-bs-animation="true" id="editFailToast" data-bs-delay="2000" data-bs-autohide="true">
      <div class="toast-header bg-danger text-white">
        <strong class="me-auto"><i class="bi-gift-fill"></i>ผิดพลาด</strong>
      </div>
      <div class="toast-body">
        ไม่สามารถแก้ไขห้องประชุมได้ กรุณาลองใหม่อีกครั้ง
      </div>
  </div>

    <div class="toast bg-danger text-white" data-bs-animation="true" id="roomDuplicateToast" data-bs-delay="2000" data-bs-autohide="true">
        <div class="toast-header bg-danger text-white">
          <strong class="me-auto"><i class="bi-gift-fill"></i>ผิดพลาด</strong>
        </div>
        <div class="toast-body">
        ไม่สามารถแก้ไขห้องประชุมได้ กรุณาลองใหม่อีกครั้ง
        </div>
    </div>

</body>
<script src="ajax/editroom.js"></script>
</html>