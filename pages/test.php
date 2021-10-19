<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Stop Hiding Bootstrap Toast Automatically Via Data Attributes</title>
<?php 
require('mdb_css.php');
require('mdb_js.php');
?>
<style>
/* Style for positioning toast */
.toast{
    position: absolute; 
    top: 10px; 
    right: 40%;
}
</style>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myToast").toast("show");
    });
});
</script>
</head>
<body>
  <div class="m-4">
  	<p><strong>Note:</strong> The toast message will not hide automatically as autohide option is set to false.</p>
	  <button type="button" class="btn btn-primary" id="myBtn">Show Toast</button>
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
</html>