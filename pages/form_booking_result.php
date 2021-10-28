<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
  <title>ผลการจอง</title>
</head>
<body>
    <?php require('components/navbar.php'); ?>
      <br/>
      <div class="container-fluid">

        <div class="row">
          <div class="col-1"></div>
          <div class="col-10">

          <div>
            <h6>จองห้องประชุม >>> ผลการจอง</h6>
          </div>
          <div>
            <h5>รายการ ผลการจอง</h5>
          </div>
          </br>
          <div>
            <table class="table table-hover border" id="myfrm">
              <thead>
                <tr>
                  <th class="col-1 text-center">ลำดับที่</th>
                  <th class="col-3 text-center">หัวข้อ</th>
                  <th class="col-3 text-center">ชื่อห้อง</th>
                  <th class="col-2 text-center">ชื่อผู้จอง</th>
                  <th class="col-2 text-center">วันที่จอง</th>
                  <th class="col-1 text-center">พิมพ์</th>
                </tr>
              </thead>
              <tbody id="tablebody">
              </tbody>
            </table>
          </div>

          </div>
          <div class="col-1"></div>
        </div>     

      </div>
      <input type="hidden" id="user_id" value="<?php echo $session_login_id; ?>"></input>
      <script src=ajax/show_result.js></script>
</body>
</html>