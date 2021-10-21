<?php require('query/checklogin.php'); ?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
  <title>จัดการห้องประชุม</title>
</head>
<body>
    <?php require('components/navbar.php'); ?>
      <br/>
      <div class="container">
        <div>
          <p>เพิ่มห้องประชุม</p>
        </div>
          <div>
            <form>
              <div class="text-left">
                <a href="form_manage_meeting_room.php" class="btn btn-danger btn-lg  mt-4"><i class="fas fa-undo">&nbsp; ย้อนกลับ</i></a>
              <div>
                </br>
                  <div class="card">
                    <div class="card-header">เพิ่มห้องประชุม</div>
                    <div class="card-body">
                      <h5 class="card-title"></h5> <!-- มีอะไรให้ช่วยไหม -->
                      <p class="card-text">
                        With supporting text below as a natural lead-in to additional content.
                      </p>
                    </div>
                  </div>
            </form>
        </div>
      </div>
</body>
</html>