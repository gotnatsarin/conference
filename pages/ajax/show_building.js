$(document).ready(function() {
    var data_arr = "";
    var id_building = $('#id_building').val();
    $('#nav_booking a').addClass('active');

    $.ajax({
        type: "GET",
        url: "query/showroombybuilding.php",
        data: {
            id_building: id_building
        },
        success: function(data) {
            if (data == "null") {
                $('.container').remove();
                $.get('components/404_notfound.php', function(data) {
                    $('body').append(data);
                });
            } else {
                let new_data = JSON.parse(data).roomByBuildingObj;
                data_arr = data
                console.log(data_arr)
                new_data.forEach(((element, index) => {
                    $('#tablebody').append(`<tr>
                    <th scope='row'>${++index}</th>
                    <td class="text-center">
                      <h6>${element['room_name']}</h6>
                      <p> ${element['room_desc']} </p>
                    </td>
                    <td class="text-center">
                    <a href="form_booking.php?room_id=${element['room_id']}" class="btn btn-success btn-lg"> เลือก </a> &nbsp;
                       <button type="button" value="${index}" id="btn_des" class="btn btn-primary btn-lg"> รายละเอียด</button>
                    </td>
                    </tr>`);
                    console.log(element);
                }));
            }
        }
    });

    $(document).on("click", "#btn_des", function() {
        let new_data = JSON.parse(data_arr).roomByBuildingObj;
        index_arr = $(this).val()-1
        console.log(index_arr)
        console.log(`picture/${new_data[index_arr].room_img}`);
            // $('#image_modal').attr(`src`, ``)
        $('#Modal_Desc').modal('show');
        $('#building').html(new_data[index_arr].room_place);
        $('#capacity').html(`${new_data[index_arr].room_capacity} ที่นั่ง`);
        $('#desc').html(new_data[index_arr].room_desc);
        $('#room_img').attr('src',`picture/${new_data[index_arr].room_img}`);
    });
});