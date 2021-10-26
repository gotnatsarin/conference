<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en"></html>
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
          <h5></h5>จองห้องประชุม</h5>
        </div>
          <div>
            <h5>รายการ อาคารทั้งหมด</h5>
          </div>
          </br>
          <div>
            <form>
                  <table class="table table-hover border">
                    <thead>
                      <tr>
                        <th class="col-1">ลำดับที่</th>
                        <th class="text-center">รูปภาพ</th>
                        <th class="text-center">รายละเอียด</th>
                        <th class="text-center">จองห้อง</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                          <td class="text-center">#</td>
                          <td class="text-center">อาคารอำนวยการ</td>
                          <td class="text-center">
                            <a href="form_building.php?id_building=0" class="btn btn-success btn-lg">เลือก</a>
                          </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                          <td class="text-center">#</td>
                          <td class="text-center">อาคารเฉลิมพระเกียรติ</td>
                          <td class="text-center">
                            <a href="form_building.php?id_building=1" class="btn btn-success btn-lg">เลือก</a>
                          </td>
                      </tr>
                    </tbody>
                  </table>
            </form>
        </div>
      </div>
</body>
<script>
        $(document).ready(function() {
          $('#nav_booking').addClass(' active');
        });
        </script>
</html>