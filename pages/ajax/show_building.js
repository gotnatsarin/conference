$(document).ready(function() {
    var id_building = $('#id_building').val();

    $.ajax({
        type: "GET",
        url: "query/showroombybuilding.php",
        data: {
            id_building: id_building
        },
        success: function(data) {
            console.log(data)
            if (data == "null") {
                $('.container').remove()
                $.get('components/404_notfound.php', function(data) {
                    $('body').append(data);
                });
            } else {
                var new_data = JSON.parse(data).roomByBuildingObj;
                new_data.forEach(((element, index) => {
                    $('#tablebody').append(`<tr>
                    <th scope='row'>${++index}</th>
                    <td class="text-center">#</td>
                    <td class="text-center">
                      <h6>${element['room_name']}</h6>
                      <p>จำนวน ${element['room_capacity']} คน</p>
                    </td>
                    <td class="text-center">
                    <a href="form_booking.php" class="btn btn-success btn-lg"> เลือก </a> &nbsp;
                       <a href="#" class="btn btn-primary btn-lg"> รายละเอียด</a>
                    </td>
                    </tr>`)
                    console.log(element)
                }));
            }
        }
    });


});