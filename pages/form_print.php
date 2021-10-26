<?php
require('query/connect.php');
$id = $_GET['id'];
$sql = "SELECT * FROM report_booking WHERE id = '$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$time =null;
if($row['period_t']==0){
  $time = "8.00-12.00 น.";
}else{
  $time = "13.00-16.00 น.";
}


?>
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
      require('mdb_js.php');
      require('mdb_css.php'); 
    ?>
    <style>
      body {
    /* background: rgb(204,204,204);  */
    }
    page {
      background: white;
      display: block;
      margin: 0 auto;
      margin-bottom: 0.5cm;
      /* box-shadow: 0 0 0 rgba(0,0,0,0.5); */
    }
    page[size="A4"] {  
      width: 21cm;
      height: 29.7cm; 
    }
    page[size="A4"][layout="landscape"] {
      width: 29.7cm;
      height: 21cm;  
    }
    @media print {
      body, page {
        margin: 0;
        box-shadow: 0;
      }
      #print {
      display: none;
      }
    }
    </style>
    <title>พิมพ์ผลการจอง</title>
  </head>
  <body>
    <!-- <button type="button" id="print" >Print</button> -->
      <page size="A4">
        </br>
        <div class="row mt-5">
          <div class="col-3"></div>
            <div class="col-6 text-center">
              <center><img src="../img/logo.png" class="mt-5 mb-3" style="width:100px;height:100px;"><center>
              <b style="font-size : 24px;"class="text-center mb-5">แบบฟอร์มผลการจองห้องประชุม</b> </br>
                <div class="text-end mt-5">
                <p><b >ชื่อห้องประชุม : </b><?php echo $row['room_name']; ?></p>
                <p><b >หัวข้อ : </b><?php echo $row['topic']; ?></p>
                <p><b>ใช้ประชุมในวันที่ :</b> <?php echo $row['booking_date']; ?></p>
                <p><b >เวลา : </b> <?php echo $time; ?></p>
                <p><b>ชื่อผู้จอง : </b><?php echo $row['user_fullname']; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  
                </div>
                  <div class="col-5 text-center mt-5">
                    <p style="font-size : 16px;">ลงชื่อ...............................................ผู้จอง</p>
                    <p><?php  echo "(". $row['user_fullname'].")";  ?></p>
                  </div> &nbsp;
                  <div class="col-5 text-center mt-5">
                  <p style="font-size : 16px;">ลงชื่อ...............................................ผู้ดูแลระบบ</p>
                  <p>(..........................................................)</p>
                  </div>
                  
                </div>

        </div>
        
        
      </page>
    <script>
      $(document).ready(function() {
        window.print()
        window.onafterprint = window.close;	
        // $('#print').click(function() {
        //   window.print()
        // });
      });
    </script>
  </body>
</html>