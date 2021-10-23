$(document).ready(function() {
    var number = /^(0|[1-9][0-9]*)$/

    $("#booking_capacity").keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger');
            $('#capacity_error').html('กรุณาระบุข้อมูลให้ครบ');
        } else if (!number.test($(this).val())) {
            $(this).addClass('border border-danger');
            $('#capacity_error').html('กรุณากรอกเฉพาะตัวเลข');
        } else {
            $('#capacity_error').html('');
            $(this).removeClass('border border-danger');
        }
    });

    $("#topic").keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger');
            $('#topic_error').html('กรุณาระบุข้อมูลให้ครบ');
        } else {
            $('#topic_error').html('');
            $(this).removeClass('border border-danger');
        }
    });

    $("#book_for").keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger');
            $('#usedfor_error').html('กรุณาระบุข้อมูลให้ครบ');
        } else {
            $('#usedfor_error').html('');
            $(this).removeClass('border border-danger');
        }
    });

    $("#start_time").change(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger');
            $('#time_error').html('กรุณาระบุข้อมูลให้ครบ');
        } else {
            $('#time_error').html('');
            $(this).removeClass('border border-danger');
        }
    });

    $("#start_date").change(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger');
            $('#date_error').html('กรุณาระบุข้อมูลให้ครบ');
        } else {
            $('#date_error').html('');
            $(this).removeClass('border border-danger');
        }
    });

    $('#submitbooking').click(function() {
        var booking_capacity = $('#booking_capacity').val();
        var topic = $('#topic').val();
        var usefor = $('#book_for').val();
        var starttime = $('#start_time').val();
        var startdate = $('#start_date').val();

        if (booking_capacity == "" || topic == "" || usefor == "" || starttime == "" || startdate == "") {
            if (booking_capacity == "") {
                $('#booking_capacity').addClass('border border-danger');
                $('#capacity_error').html('กรุณาระบุข้อมูลให้ครบ');
            }
            if (topic == "") {
                $('#topic').addClass('border border-danger');
                $('#topic_error').html('กรุณาระบุข้อมูลให้ครบ');
            }
            if (usefor == "") {
                $('#book_for').addClass('border border-danger');
                $('#usedfor_error').html('กรุณาระบุข้อมูลให้ครบ');
            }
            if (starttime == "") {
                $('#start_time').addClass('border border-danger');
                $('#time_error').html('กรุณาเลือกเวลาที่ต้องการจอง');
            }
            if (startdate == "") {
                $('#start_date').addClass('border border-danger');
                $('#date_error').html('กรุณาเลือกวันที่ต้องการจอง');
            }
        } else {
            // $.ajax({
            //     type: 'POST',
            //     url: 'query/login.php',
            //     data: {
            //         username: $("#username").val(),
            //         password: $("#password").val(),
            //     },
            //     success: function(data) {
            //         if (data == "true") {
            //             window.location.href = 'main.php';
            //         } else {
            //             $("#myToast").toast("show");
            //         }
            //     }
            // });
        }
    });
});