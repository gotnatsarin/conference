<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
  <title><?php echo ($_GET['id_building']==0) ? "อาคารอำนวยการ": "อาคารเฉลิมพระเกียรติ"; ?></title>
</head>
<body>
    <?php require('components/navbar.php'); ?>
      <br/>
      <div class="container">
        <div>
          <h6>จองห้องประชุม >>> <?php echo ($_GET['id_building']==0) ? "อาคารอำนวยการ": "อาคารเฉลิมพระเกียรติ"; ?></h6>
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
                  <tbody id="tablebody"></tbody>
                  </tbody>
                </table>
              </form>
          </div>
      </div>
      <input type="hidden" id="id_building" value="<?php echo $_GET['id_building']; ?>"></input>
      <script src=ajax/show_building.js></script>
</body>
</html>