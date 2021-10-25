<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
  <style>
    /* Container */
    .container{
      margin: 0 auto;
      border: 0px solid black;
      width: 50%;
      height: 250px;
      border-radius: 3px;
      background-color: ghostwhite;
      text-align: center;
    }
    /* Preview */
    .preview{
      width: 100px;
      height: 100px;
      border: 1px solid black;
      margin: 0 auto;
      background: white;
    }

    .preview img{
      display: none;
    }
    /* Button */
    .button{
      border: 0px;
      background-color: deepskyblue;
      color: white;
      padding: 5px 15px;
      margin-left: 10px;
    }
  </style>
  <title>จัดการห้องประชุม</title>
</head>
<body>
<div class="container">
    <form method="post" action="" enctype="multipart/form-data" id="myform">
    <input type="text" id="name" class="mt-3">
        <div >
            <input type="file" id="file" name="file" />
            <input type="button" class="button" value="Upload" id="but_upload">
        </div>
    </form>
</div>
</body>
<script>
  $(document).ready(function(){

    $("#but_upload").click(function(){

        var fd = new FormData();
        var files = $('#file')[0].files;
        var name = $('#name').val();
        
        if(files.length > 0 ){
          fd.append('file',files[0]);
          fd.append('name',name);

          $.ajax({
              url: 'query/test.php',
              type: 'post',
              data: fd,
              contentType: false,
              processData: false,
              success: function(response){
                if(response != 0){
                    console.log(response)
                }else{
                    alert('file not uploaded');
                }
              },
          });
        }else{
          alert("Please select a file.");
        }
      });
    });
</script>
</html>