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
                    test <?php require('components/calendar.php'); ?>
                  </div>
                </div>
              </form>
          </div>
      </div>
</body>
<script src="ajax/add_room.js"></script>
</html>