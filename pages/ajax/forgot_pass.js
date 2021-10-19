$(document).ready(function(){
  $('#submit').click(function(){
    var pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g
    if($('#email').val() == ""){
      $('#error_message').html('This field is require')
      $('#email').addClass('border border-danger')
    }else if(!pattern.test($('#email').val())){
      $('#error_message').html('Contain validation email')
      $('#email').addClass('border border-danger')
    }else{
      $('#error_message').html('')
      $('#email').removeClass('border border-danger')
      $("#myToast").toast("show");
    }
  });

  $('#email').keyup(function(){
    if($(this).val() == ""){
      $(this).addClass('border border-danger')
      $('#error_message').html('This field is require')
    }else{
      $('#error_message').html('')
      $(this).removeClass('border border-danger')
    }
  });


});