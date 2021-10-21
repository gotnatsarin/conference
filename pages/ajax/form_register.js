$(document).ready(function() {
    $('#submit_reg').click(function() {
        var message = "This field is require";
        var username = $('#username').val();
        var password = $('#password').val();
        var fullname = $('#fullname').val();
        var idEmployee = $('#idEmployee').val();
        var department = $('#department').val();
        var email = $('#email').val();
        var Phone = $('#Phone').val();

        if (username == "" || password == "" || fullname == "" || idEmployee == "" || department == "" || email == "" || Phone == "") {
            if (username == "") {
                $('#username').addClass('border border-danger');
                $('#username_error_message').html(message);
            }
            if (password == "") {
                $('#password').addClass('border border-danger');
                $('#password_error_message').html(message);
            }
            if (fullname == "") {
                $('#fullname').addClass('border border-danger')
                $('#fullname_error_message').html(message)
            }
            if (idEmployee == "") {
                $('#idEmployee').addClass('border border-danger')
                $('#idEmployee_error_message').html(message)
            }
            if (department == "") {
                $('#department').addClass('border border-danger')
                $('#department_error_message').html(message)
            }
            if (email == "") {
                $('#email').addClass('border border-danger')
                $('#email_error_message').html(message)
            }
            if (Phone == "") {
                $('#Phone').addClass('border border-danger')
                $('#Phone_error_message').html(message)
            }
        } else {
            $.ajax({
                type: 'POST',
                url: 'query/register.php',
                data: {
                    username: username,
                    password: password,
                    fullname: fullname,
                    idEmployee: idEmployee,
                    department: department,
                    email: email,
                    Phone: Phone
                },
                success: function(data) {
                    if (data == "true") {
                        window.location.href = 'index.php';
                    } else {
                        $("#myToast").toast("show");
                    }
                }
            });
        }
    });
});