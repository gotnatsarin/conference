<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
  <title>เพิ่มห้องประชุม</title>
</head>
<body>
    <?php require('components/navbar.php'); ?>
      <br/>
      <div class="container-fluid">
        <div>
          <h6>ปฏิทินห้องประชุม</h6>
        </div>
          <div>
            <h5>รายการห้องประชุม</h5>
          </div>
            <br>
            <div>
              <form >
                <div class="row">
                  <div class="col-3 text-center">
                    <?php require('components/menu.php'); ?>
                  </div>
                  <div class="col-9">
                    <div class="card card-body border rounded">
                      <div>
                        <form>
                          <table class="table table-hover border">
                            <thead>
                              <tr>
                                <th class="col-1">ลำดับที่</th>
                                <th class="text-center">วันที่</th>
                                <th class="text-center">เวลา</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                  <td class="text-center">2021-10-25</td>
                                  <td class="text-center">13:00-16:00 น.</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                    <td class="text-center">2021-10-25</td>
                                    <td class="text-center">13:00-16:00 น.</td>
                                </tr>
                              </tbody>
                            </table>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
          </div>
      </div>
</body>
<script src="ajax/add_room.js"></script>
</html>