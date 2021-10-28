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
  <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">กรุณายืนยัน</h5>
        </div>
        <div class="modal-body">
          ท่านต้องการลบห้องประชุมหรือไม่ ?
        </div>
        <div class="modal-footer">
          <button type="button" id="closemodal" class="btn btn-danger" >ยกเลิก</button>
          <button type="button" id="confirmdelete" class="btn btn-success">ยืนยันการลบ</button>
        </div>
      </div>
    </div>
  </div>
  <br/>
  <div class="container">
    <div>
      <h5></h5>แสดงห้องประชุม</h5>
    </div>
    <div>
      <div class="text-left">
          <a href="form_add_meeting_room.php" class="btn btn-success btn-lg  mt-4"><i class="fas fa-plus">&nbsp; เพิ่มห้องประชุม</i></a>
      <div>
      </br>
      <table class="table table-hover border">
        <thead>
          <tr>
            <th>ลำดับที่</th>
            <th class="text-center">ชื่อห้องประชุม</th>
            <th class="text-center">อาคารที่ตั้ง</th>
            <th class="text-center">ขนาด/ความจุ</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody id="tablebody">
        </tbody>
      </table>
    </div>
  </div>

  <div class="toast bg-success text-white" data-bs-animation="true" id="delete_success" data-bs-autohide="true">
      <div class="toast-header bg-success text-white">
        <strong class="me-auto"><i class="bi-gift-fill"></i>สำเร็จ</strong>
      </div>
    <div class="toast-body">
      ลบห้องประชุมสำเร็จ
    </div>
  </div>

</body>
<script src="ajax/manage_meeting_room.js"></script>
</html>