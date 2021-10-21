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
          <h5></h5>แสดงห้องประชุม</h5>
        </div>
          <div>
            <form>
              <div class="text-left">
                  <a href="form_add_manage_meeting_room.php" class="btn btn-success btn-lg  mt-4"><i class="fas fa-plus">&nbsp; เพิ่มห้องประชุม</i></a>
              <div>
                </br>
                  <table class="table table-hover border">
                    <thead>
                      <tr>
                        <th>ลำดับที่</th>
                        <th class="text-center">รูปภาพ</th>
                        <th class="text-center">ชื่อห้องประชุม</th>
                        <th class="text-center">อาคารที่ตั้ง</th>
                        <th class="text-center">ขนาด/ความจุ</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td class="text-center">#</td>
                        <td class="text-center">ห้องประชุมกัญญารัตน์</td>
                        <td class="text-center">อาคารกรีน</td>
                        <td class="text-center">3 คน</td>
                        <td class="text-center">
                          <a href="form_edit_manage_meeting_room.php" class="btn btn-warning">แก้ไข</a>&nbsp;
                          <button id="submit" type="submit" class="btn btn-danger">ลบ</button></td>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td class="text-center">#</td>
                        <td class="text-center">ห้องประชุมกัญญารัตน์</td>
                        <td class="text-center">อาคารกรีน</td>
                        <td class="text-center">3 คน</td>
                        <td class="text-center">
                          <a href="form_edit_manage_meeting_room.php" class="btn btn-warning">แก้ไข</a>&nbsp;
                          <button id="submit" type="submit" class="btn btn-danger">ลบ</button></td>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </form>
        </div>
      </div>
</body>
</html>