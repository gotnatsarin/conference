<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
  <title>อาคารอำนวยการ</title>
</head>
<body>
    <?php require('components/navbar.php'); ?>
      <br/>
      <div class="container">
        <div>
          <h6>จองห้องประชุม >>> อาคารอำนวยการ</h6>
        </div>
          <div>
            <h5>รายการ ห้องประชุมทั้งหมด</h5>
          </div>
            <div class="text-end mb-3">
              <a href="form_building_meeting_room.php" class="btn btn-danger btn-lg  mt-4">ย้อนกลับ</a>
            </div>
            </br>
            <div>
              <form>
                    <table class="table table-hover border">
                      <thead>
                        <tr>
                          <th class="col-1">ลำดับที่</th>
                          <th class="text-center">รูปภาพ</th>
                          <th class=" col-6 text-center">รายละเอียด</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                            <td class="text-center">#</td>
                            <td class="text-center">
                              <h6>ห้องประชุมพิกุล 1</h6>
                              <p>จำนวน 50 คน</p>
                            </td>
                            <td class="text-center">
                              <a href="#" class="btn btn-success"><i class="fas fa-check">&nbsp; เลือก </i></a> &nbsp;
                              <a href="#" class="btn btn-primary"><i class="fas fa-info-circle">&nbsp; รายละเอียด </i></a>
                            </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                            <td class="text-center">#</td>
                            <td class="text-center">
                              <h6>ห้องประชุมพิกุล 2</h6>
                              <p>จำนวน 50 คน</p>
                            </td>
                            <td class="text-center">
                              <a href="#" class="btn btn-success"><i class="fas fa-check">&nbsp; เลือก </i></a>  &nbsp;
                              <a href="#" class="btn btn-primary"><i class="fas fa-info-circle">&nbsp; รายละเอียด</i>
                            </td>
                        </tr>
                      </tbody>
                    </table>
              </form>
          </div>
      </div>
</body>
</html>