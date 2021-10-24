<html>
  <head>
  <?php require('mdb_js.php'); ?>
  <?php require('mdb_css.php'); ?>
    <title>test fias</title>
  </head>
  <body>
    <div id="modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
        </div>
        <div class="modal-body text-center">
        <img id="image_modal" width="300">
          <p id="modaltext">Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="javascript:$('#modal').modal('hide');">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>

    </div>
    <button id="modaltest" type="button" class="btn btn-primary">test</button>
  </body>
  <script>
    var data_arr = [
      {
        'name': "test1"
      },{
        'name': "test2"
      }
    ]
    $(document).ready(function() {
      $('#modaltest').click(function(){
        $('#image_modal').attr(`src`,`https://scontent.fbkk5-4.fna.fbcdn.net/v/t39.30808-6/s720x720/246689868_3113066932347223_5351799476498145764_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=xBz23uMN6AoAX_33x6u&_nc_ht=scontent.fbkk5-4.fna&oh=6df83389e2318d714f288a72df6ae4f2&oe=617A89CA`)
        $('#modaltext').text('คือลือ')
        $('#modal').modal('show');
      });
    });
  </script>
</html>