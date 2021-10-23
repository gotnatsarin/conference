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
<?php require("components/navbar.php"); ?>

<button type="button" id="exam" class="btn btn-danger" >ทดสอบ</button>
</body>
<script>
  $(document).ready(function(){
    $('#exam').click(function(){
      $('#exam').remove()
      $('body').append(`<?php require("components/404_notfound.php"); ?>`)
    });
  });
</script>
</html>