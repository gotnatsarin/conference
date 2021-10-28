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
                            <a href="" id="img1">
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
                            <a>
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
      <!-- Modal -->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">...</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
  <script>
        $(document).ready(function() {
          $('#nav_booking a').addClass('active');
        });
  </script>
</html>