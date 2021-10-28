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
    <div class="modal fade" id="cancelbooked" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">กรุณายืนยัน</h5>
            </div>
            <div class="modal-body">
              ท่านต้องการยกเลิกการจองห้องประชุมห้องนี้หรือไม่ ?
            </div>
            <div class="modal-footer">
              <button type="button" onclick="javascript:$('#cancelbooked').modal('hide');" class="btn btn-danger" >ย้อนกลับ</button>
              <button type="button" id="confirm" class="btn btn-success">ยืนยันการยกเลิก</button>
            </div>
         </div>
        </div>
      </div>

    <?php require('components/navbar.php'); ?>
      <br/>
      <div class="container-fluid">

        <div class="row">
          <div class="col-12">

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
                  <th class="col-2 text-center">ชื่อห้อง</th>
                  <th class="col-2 text-center">ชื่อผู้จอง</th>
                  <th class="col-2 text-center">วันที่จอง</th>
                  <th class="col-2 text-center">Action</th>
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

      <div class="toast bg-success text-white" data-bs-animation="true" id="delete_success" data-bs-delay="2000" data-bs-autohide="true">
        <div class="toast-header bg-success text-white">
          <strong class="me-auto"><i class="bi-gift-fill"></i>สำเร็จ</strong>
        </div>
        <div class="toast-body">
        ยกเลิกการจองเรียบร้อยแล้ว
        </div>
      </div>

  </body>
  <script src="ajax/show_result.js"></script>
</html>