$(document).ready(function() {
    var message = "กรุณาระบุข้อมูลให้ครบ";
    var pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g
    var phoneno = /^[0-9]*$/
    var usernamecheck = /[^a-zA-Z0-9_]/

    $('#username').keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger')
            $('#username_error_message').html(message)
        } else if (usernamecheck.test($('#username').val())) {
            $('#username').addClass('border border-danger');
            $('#username_error_message').html('ชื่อผู้ใช้ต้องมีตัวอักษร (a-z) ตัวเลข (0-9)');
        } else {
            $('#username_error_message').html('')
            $(this).removeClass('border border-danger')
        }
    });

    $('#password').keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger')
            $('#password_error_message').html(message)
        } else {
            $('#password_error_message').html('')
            $(this).removeClass('border border-danger')
        }
    });

    $('#confirmPassword').keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger')
            $('#confirm_password_error_message').html(message)
        } else {
            $('#confirm_password_error_message').html('')
            $(this).removeClass('border border-danger')
        }
    });

    $('#Fullname').keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger')
            $('#fullname_error_message').html(message)
        } else {
            $('#fullname_error_message').html('')
            $(this).removeClass('border border-danger')
        }
    });

    $('#idEmployee').keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger')
            $('#idEmployee_error_message').html(message)
        } else {
            $('#idEmployee_error_message').html('')
            $(this).removeClass('border border-danger')
        }
    });

    $('#department').keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger')
            $('#department_error_message').html(message)
        } else {
            $('#department_error_message').html('')
            $(this).removeClass('border border-danger')
        }
    });

    $('#email').keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger')
            $('#email_error_message').html(message)
        } else {
            $('#email_error_message').html('')
            $(this).removeClass('border border-danger')
        }
    });

    $('#Phone').keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger')
            $('#Phone_error_message').html(message)
        } else if (!phoneno.test($(this).val())) {
            $('#Phone').addClass('border border-danger')
            $('#Phone_error_message').html('หมายเลขโทรศัพท์ไม่ถูกต้อง')
        } else {
            $('#Phone_error_message').html('')
            $(this).removeClass('border border-danger')
        }
    });

    $('#submit_reg').click(function() {
        var username = $('#username').val();
        var password = $('#password').val();
        var confirmPassword = $('#confirmPassword').val();
        var fullname = $('#Fullname').val();
        var idEmployee = $('#idEmployee').val();
        var department = $('#department').val();
        var email = $('#email').val();
        var Phone = $('#Phone').val();

        $('#password').focus(function() {
            $('#password_error_message').html('');
        });

        $('#confirmPassword').focus(function() {
            $('#password_error_message').html('');
        });

        if (username == "" || password == "" || confirmPassword == "" || password != confirmPassword || fullname == "" || idEmployee == "" || department == "" || email == "" || Phone == "") {
            if (username == "") {
                $('#username').addClass('border border-danger');
                $('#username_error_message').html(message);
            }
            if (password == "") {
                $('#password').addClass('border border-danger');
                $('#password_error_message').html(message);
            }
            if (confirmPassword == "") {
                $('#confirmPassword').addClass('border border-danger');
                $('#confirm_password_error_message').html(message);
            }
            if (password != confirmPassword) {
                $('#password').val('');
                $('#confirmPassword').val('');
                $('#password_error_message').html('กรุณาระบุรหัสผ่านให้ตรงกัน');
                $('#confirm_password_error_message').html('กรุณาระบุรหัสผ่านให้ตรงกัน');
            }
            if (fullname == "") {
                $('#Fullname').addClass('border border-danger');
                $('#fullname_error_message').html(message);
            }
            if (idEmployee == "") {
                $('#idEmployee').addClass('border border-danger');
                $('#idEmployee_error_message').html(message);
            }
            if (department == "") {
                $('#department').addClass('border border-danger');
                $('#department_error_message').html(message);
            }
            if (email == "") {
                $('#email').addClass('border border-danger');
                $('#email_error_message').html(message);
            }
            if (Phone == "") {
                $('#Phone').addClass('border border-danger');
                $('#Phone_error_message').html(message);
            }
        } else if (Phone.length != 10 || !pattern.test($('#email').val())) {
            if (Phone.length != 10) {
                $('#Phone').addClass('border border-danger');
                $('#Phone_error_message').html('กรุณากรอกหมายเลขโทรศัพท์ให้ครบ');
            }
            if (!pattern.test($('#email').val())) {
                $('#email').addClass('border border-danger');
                $('#email_error_message').html('อีเมลไม่ถูกต้อง');
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
                        $("#myToast_success").toast("show")
                        setTimeout(
                            function() {
                                window.location.href = 'index.php';
                            }, 2000);
                    } else {
                        $("#myToast_reg").toast("show");
                    }
                }
            });
        }
    });
});