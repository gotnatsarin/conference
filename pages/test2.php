<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ระบบจองห้องประชุม : Reserve Conference System</title>
      <?php 
      require('mdb_js.php');
      require('mdb_css.php'); 
      ?>
  </head>
  <body>
    <div class="m-4">
      <p><strong>Note:</strong> The toast message will not hide automatically as autohide option is set to false.</p>
      <button type="button" class="btn btn-primary" id="submit">Show Toast</button>
    </div>
    <div class="toast" data-bs-animation="true" id="myToast" data-bs-delay="5000" data-bs-autohide="true">
      <div class="toast-header">
        <strong class="me-auto"><i class="bi-gift-fill"></i> We miss you!</strong>
        <small>1 mins ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </div>
      <div class="toast-body">
        It's been a long time since you visited us. We've something special for you.
      </div>
    </div>
  </body>
  <script>
    $(document).ready(function(){
      $("#submit").click(function(){
        $("#myToast").toast("show");
      });
    });
  </script>
</html>