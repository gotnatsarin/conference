$(document).ready(function() {
    var number = /^(0|[1-9][0-9]*)$/
    var room_id = $('#room_id').val();
    var user_id = $('#user_id').val();
    var room_place = null;
    var user_fullname = null;
    var room_name = null;
    var room_img = $('#room_img').val();
    $('#nav_booking a').addClass('active');

    $.ajax({
        type: 'GET',
        url: 'query/showformbooking.php',
        data: {
            room_id: room_id,
            user_id: user_id,
            room_img: room_img
        },
        success: function(data) {
            if (data == "null") {
                $('.container').remove();
                $.get('components/404_notfound.php', function(data) {
                    $('body').append(data);
                });
            } else {
                var new_datas = JSON.parse(data).roomAndUserObj
                room_place = new_datas[0].room_place
                console.log(new_datas)
                $('#room_name').text(new_datas[0].room_name)
                room_name = $('#room_name').text()
                $('#full_name').text(new_datas[0].full_name)
                user_fullname = $('#full_name').text()
                $('#dep_name').text(new_datas[0].dep_name)
                $('#phone').text(new_datas[0].phone)
                $('#room_img').attr('src',`picture/${new_datas[0].room_img}`)
            }
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

    $('#confirm').click(function() {
        $('#mymodal').modal('hide');
        var topic = $('#topic').val();
        var usefor = $('#book_for').val();
        var starttime = $('#start_time').val();
        var startdate = $('#start_date').val();

        $.ajax({
            type: 'POST',
            url: 'query/booking.php',
            data: {
                room_id: room_id,
                user_id: user_id,
                room_name: room_name,
                room_place: room_place,
                user_fullname: user_fullname,
                period: starttime,
                date: startdate,
                topic: topic,
                usefor: usefor,
            },
            success: function(data) {
                if (data == "true") {
                    $("#booked_success").toast("show");
                    setTimeout(
                        function() {
                            window.location.href = 'form_booking_result.php';
                        }, 2000)
                } else {
                    $("#booked_failed").toast("show");
                }
            }
        });
    });

    $('#submitbooking').click(function() {
        var topic = $('#topic').val();
        var usefor = $('#book_for').val();
        var starttime = $('#start_time').val();
        var startdate = $('#start_date').val();

        if (topic == "" || usefor == "" || starttime == "" || startdate == "") {
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
            $('#mymodal').modal('show');
        }
    });
});