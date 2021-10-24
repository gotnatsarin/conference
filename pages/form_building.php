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

      <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
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
              <table class="table table-hover border">
                <thead>
                  <tr>
                    <th class="col-1">ลำดับที่</th>
                    <th class=" col-6 text-center">รายละเอียด</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody id="tablebody"></tbody>
                </tbody>
              </table>
          </div>
        </div>
        <div class="col-1"></div>
      </div>
      </div>
      <input type="hidden" id="id_building" value="<?php echo $_GET['id_building']; ?>"></input>

      <div id="Modal_Desc" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
          <h5 class="modal-title">รายละเอียด</h5>
          </div>
        <div class="modal-body">
        <!-- <img id="image_modal" width="300"> -->
        
        <div class="row">
          <div class="col-8">
            <p class="">รูปภาพ</p>
          </div>
          <div class="col-4">

          <div class="row">
            <div class="col-12">
              <p style="font-weight: bold" class="">อาคาร</p>
              <p id="building" class=""></p>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <p style="font-weight: bold" class="">ความจุห้องประชุม</p>
              <p id="capacity" class=""></p>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <p style="font-weight: bold" class="">รายละเอียดเพิ่มเติม</p>
              <p id="desc" class=""></p>
            </div>
          </div>

          </div>
        </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="javascript:$('#Modal_Desc').modal('hide');">Close</button>
        </div>
      </div>
    </div>

  <script src=ajax/show_building.js></script>

</body>
</html>