$(document).ready(function() {
    $('#myModal').modal({ backdrop: 'static', keyboard: false })
    $('#submit').click(function() {
        var pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g
        if ($('#email').val() == "") {
            $('#error_message').html('กรุณาระบุอีเมล');
            $('#email').addClass('border border-danger');
        } else if (!pattern.test($('#email').val())) {
            $('#error_message').html('อีเมลไม่ถูกต้อง');
            $('#email').addClass('border border-danger');
        } else {
            $.ajax({
                type: 'GET',
                url: 'query/forgot_pass.php',
                data: {
                    email: $("#email").val(),
                },
                success: function(data) {
                    new_data = JSON.parse(data)
                    if (new_data.status == "true") {
                        $('#error_message').html('');
                        $('#password').val('');
                        $('#confirmpassword').val('');
                        $('#email').removeClass('border border-danger');
                        $('#userid').val(new_data.id);
                        $("#myToast").toast("hide");
                        $('#myModal').modal('show');
                        $('#email').attr('type', 'password');
                    } else {
                        $('#error_message').html('');
                        $('#email').removeClass('border border-danger');
                        $("#myToast").toast("show");
                    }
                }
            });
        }
    });

    $('#email').keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger');
            $('#error_message').html('This field is require');
        } else {
            $('#error_message').html('');
            $(this).removeClass('border border-danger');
        }
    });

    $('#password').focus(function() {
        $('#password_error_message').html('');
    });

    $('#confirmpassword').focus(function() {
        $('#password_error_message').html('');
    });

    $('#closeModal').click(function() {
        $('#myModal').modal('hide');
        $('#password_error_message').html('');
        $('#email').attr('type', 'text');
        $('#email').val('');
    });

    $('#submitforsave').click(function() {
        if ($('#password').val() != $('#confirmpassword').val()) {
            $('#password').val('');
            $('#confirmpassword').val('');
            $('#password_error_message').html('กรุณาระบุรหัสผ่านให้ตรงกัน');
        } else {
            $.ajax({
                type: 'POST',
                url: 'query/reset_password.php',
                data: {
                    userid: $("#userid").val(),
                    password: $("#password").val(),
                },
                success: function(data) {
                    $("#myModal").hide()
                    $("#changed_success").toast("show")
                    setTimeout(
                        function() {
                            window.location.href = 'index.php';
                        }, 2000)
                }
            });
        }
    });

});