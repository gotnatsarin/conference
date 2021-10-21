<!-- Image and text -->
<nav class="navbar navbar-dark" style="background-color:grey;">
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

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarLeftAlignExample"
      aria-controls="navbarLeftAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="text-start">
      <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link  text-light" aria-current="page" href="main.php">หน้าหลัก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-light" aria-current="page" href="#">จองห้องประชุม</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-light" aria-current="page" href="#">พิมพ์ผลการจอง</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-light" aria-current="page" href="form_manage_meeting_room.php">จัดการห้องประชุม</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-light" aria-current="page" href="#">แก้ไข/อนุมัติการจอง</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-light" aria-current="page" href="#">แก้ไขผลการจอง</a>
            </li>
            <li class="nav-item">
              <a class="nav-link actve text-light" aria-current="page" href="query/logout.php">ออกจากระบบ</a>
            </li>
            <li class="nav-item text-end">
              
            </li>
          </ul>
            <!-- Left links -->
        </div>
    </div>  
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>

