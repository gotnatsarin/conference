<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
  <title>หน้าหลัก</title>
</head>
<body>
    <?php require('components/navbar.php'); ?>
    <input type="hidden" id="room_id" value="<?php echo $_GET['room_id']; ?>"></input>
      <br/>
      <div class="container-fluid">
        <div>
          <h6>ตารางการจองห้องประชุม</h6>
        </div>
          <div>
            <h5>รายการห้องประชุม</h5>
          </div>
            <br>
            <div>
              <form >
                <div class="row">
                  <div class="col-3 text-center">
                    <div class="list-group" id="nav">

                    </div>
                  </div>
                  <div class="col-9">
                    <div class="card card-body border rounded">
                      <div>
                        <table class="table table-hover border">
                          <thead>
                            <tr id="headtb">
                              <th class="col-1">ลำดับที่</th>
                              <th class="text-center">วันที่</th>
                              <th class="text-center">เวลา</th>
                            </tr>
                          </thead>
                          <tbody id="tbbody">

                            </tbody>
                          </table>
                         <div id="alert">


                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-1">
                  </div>
                </div>
              </form>
          </div>
      </div>
</body>
<!-- <script src="ajax/add_room.js"></script> -->
<script src="ajax/showroom.js"></script>
<script>

$(document).ready(function() {
$('#main').addClass(' active');
});
</script>
</html>