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
<nav class="navbar" style="background-color:grey;">
  <div class="container-fluid">
    <a class="navbar-brand" href="../pages/main.php">
      <img
        src="../img/logo.png"
        class="me-2"
        height="40"
        alt=""
        loading="lazy"
      />
      <small class=" text-light">WE MEET Booking</small>
    </a>
    <h5 class=" text-light">ยินดีต้อนรับคุณ : <?php echo $s_login_username; ?></h5>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="form_building_meeting_room.php">จองห้องประชุม</a>
        </li>
        <li class="nav-item">
        <a class="nav-link "  href="form_booking_result.php">ผลการจอง</a>
        </li>


      </ul>
    </div>
  </div>
</nav>
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
                          <td class="text-center">#</td>
                          <td class="text-center">อาคารอำนวยการ</td>
                          <td class="text-center">
                            <a href="form_building.php?id_building=0" class="btn btn-success btn-lg">เลือก</a>
                          </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                          <td class="text-center">#</td>
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
</body>
<script>
        $(document).ready(function() {
          $('#nav_booking').addClass('active');
        });
        </script>
</html>