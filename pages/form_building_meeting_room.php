<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
  <title>จองห้องประชุม</title>
  <style>
    .testbtn {
    background-color: transparent;
    background-repeat: no-repeat;
    border: none;
    overflow: hidden;
    outline: none;
    }
  </style>
</head>
<body>
  
    <?php require('components/navbar.php'); ?>
    <br/>
    <div class="container">
      <div>
        <h5>จองห้องประชุม</h5>
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
                      <td class="text-center">
                        <a href="#" id="img2">
                          <img
                            src="../img/อาคารอำนวยการ.jpeg"
                            class="img-thumbnail"
                            style="width:70px;"
                          />
                        </a>
                      </td>
                      <td class="text-center">อาคารอำนวยการ</td>
                      <td class="text-center">
                        <a href="form_building.php?id_building=0" class="btn btn-success btn-lg">เลือก</a>
                      </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                      <td class="text-center">
                        <a href="#" id="img1">
                          <img
                            src="../img/อาคารเฉลิมพระเกียรติ.jpeg"
                            class="img-thumbnail"
                            style="width:70px;"
                          />
                        </a>
                      </td>
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
<!-- Modal อำนวยการ-->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">อาคารอำนวยการ</h5>
      </div>
      <div class="modal-body text-center">
      <img src="../img/อาคารอำนวยการ.jpeg" class="img-fluid rounded" style="width:95%;" alt="..." />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Modal อาคารเฉลิมพระเกียรติ-->
<div
  class="modal fade"
  id="exampleModal2"
  tabindex="-1"
  aria-labelledby="exampleModalLabel2"
  aria-hidden="true"
>
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">อาคารเฉลิมพระเกียรติ</h5>
      </div>
      <div class="modal-body text-center">
      <img src="../img/อาคารเฉลิมพระเกียรติ.jpeg" class="img-fluid rounded" style="width:95%;" alt="..." />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>
</body>
  <script>
        $(document).ready(function() {
           $('#nav_booking a').addClass('active');
           $('#img1').click(function(){
            $('#exampleModal2').modal('show');
           });
           $('#img2').click(function(){
            $('#exampleModal').modal('show');
           });
          
        });
  </script>
</html>