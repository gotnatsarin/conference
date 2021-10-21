$(document).ready(function() {
    var message = "กรุณาระบุข้อมูลให้ครบ";
    $('#addroom').click(function() {
        var roomname = $('#room_name').val();
        var roomplace = $('#room_place').val();
        var roomcapacity = $('#room_capacity').val();
        var roomdesc = $('#room_desc').val();
        var roomimg = $('#room_img').val();

        if (roomname == "" || roomplace == "" || roomcapacity == "") {
            if (roomname == "") {
                $('#room_name').addClass('border border-danger')
                $('#roomname_error_message').html(message)
            }
            if (roomplace == "") {
                $('#room_place').addClass('border border-danger')
                $('#roomplace_error_message').html(message)
            }
            if (roomcapacity == "") {
                $('#room_capacity').addClass('border border-danger')
                $('#roomcapacity_error_message').html(message)
            }

        } else {
            $.ajax({
                type: 'POST',
                url: 'query/addroom.php',
                data: {
                    room_name: roomname,
                    room_place: roomplace,
                    room_capacity: roomcapacity,
                    room_desc: roomdesc,
                },
                success: function(data) {
                    if (data == "true") {
                        alert('เรียบร้อย')
                    } else {
                        $("#myToast").toast("show");
                    }
                }
            });
        }
    });

    $("#room_name").keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger')
            $('#roomname_error_message').html(message)
        } else {
            $('#roomname_error_message').html('')
            $(this).removeClass('border border-danger')
        }
    });

    $("#room_place").keyup(function() {
        if ($(this).val() == "") {
            $(this).addClass('border border-danger')
            $('#roomplace_error_message').html(message)
        } else {
            $('#roomplace_error_message').html('')
            $(this).removeClass('border border-danger')
        }
    });

    $("#room_capacity").keyup(function() {
        let pattern = /^(0|[1-9][0-9]*)$/
        if ($(this).val() == "") {
            $(this).addClass('border border-danger')
            $('#roomcapacity_error_message').html(message)
        } else if (false == (pattern.test($(this).val()))) {
            $(this).addClass('border border-danger')
            $('#roomcapacity_error_message').html('กรุณาใส่ตัวเลขเท่านั้น')
        } else {
            $('#roomcapacity_error_message').html('')
            $(this).removeClass('border border-danger')
        }
    });

});