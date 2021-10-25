$(document).ready(function() {
    var message = "กรุณาระบุข้อมูลให้ครบ";
    $('#addroom').click(function() {
        var roomname = $('#room_name').val();
        var roomcapacity = $('#room_capacity').val();
        var roomdesc = $('#room_desc').val();
        var roomimg = $('#room_img').val();
        var roombuilding = $('#room_building').val();
        var img = $('#file')[0].files;

        if (roomname == "" || roombuilding == "ชื่ออาคาร" || roomcapacity == "") {
            if (roomname == "") {
                $('#room_name').addClass('border border-danger')
                $('#roomname_error_message').html(message)
            }
            if (roombuilding == "ชื่ออาคาร") {
                $('#room_building').addClass('border border-danger')
                $('#roombuilding_error_message').html('กรุณาเลือกอาคารที่ต้องการ')
            }
            if (roomcapacity == "") {
                $('#room_capacity').addClass('border border-danger')
                $('#roomcapacity_error_message').html(message)
            }
        } else {
            formdata = new FormData()
            formdata.append('room_name', roomname)
            formdata.append('roombuilding', roombuilding)
            formdata.append('room_capacity', roomcapacity)
            formdata.append('room_desc', roomdesc)
            formdata.append('img', img[0])

            $.ajax({
                type: 'post',
                url: 'query/addroom.php',
                data: formdata,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data)
                    if (data == "true") {
                        $("#myToast_success").toast("show");
                        setTimeout(
                            function() {
                                window.location.href = 'form_manage_meeting_room.php';
                            }, 2000);
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

    $("#room_building").change(function() {
        if ($(this).val() == "ชื่ออาคาร") {
            $(this).addClass('border border-danger')
            $('#roombuilding_error_message').html('กรุณาเลือกอาคารที่ต้องการ')
        } else {
            $('#roombuilding_error_message').html('')
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