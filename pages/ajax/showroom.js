$(document).ready(function() {
    var room_id = $('#room_id').val();
    var room_name = null;
    console.log(room_id)
    var time = null;
    var idactive = null;
    $.ajax({
        type: 'GET',
        url: 'query/showroom.php',
        data: {},
        success: function(data) {
            var new_data = JSON.parse(data).roomObj;
            new_data.forEach(((element, index) => {
                $('#nav').append(`

                  <a class="list-group-item list-group-item-action list-group-item-dark text-end" id="${element['room_id']}" href="main.php?room_id=${element['room_id']}">${element['room_name']}</a>
                `);

            }));
            try {
                $(`a#${room_id}`).addClass('active')
                $(`a#${room_id} a`).removeClass('text-dark')
                $(`a#${room_id} a`).addClass('text-light')
            } catch {

            }

        }
    });

    $.ajax({
        type: 'GET',
        url: 'query/showbooked.php',
        data: {
            room_id: room_id,
        },
        success: function(data) {
            try {
                var new_data2 = JSON.parse(data).bookedObj;
                console.log(new_data2.room_name)
                new_data2.forEach(((element2, index) => {
                    if (element2['period_t'] == 0) {
                        time = "9.00-12.00 น."
                    } else {
                        time = "13.00-16.00 น."
                    }
                    var dd = new Date(element2['booking_date'])
                    var shortdate = dd.getDate() + "/" + (dd.getMonth() + 1) + "/" + dd.getFullYear()
                    $('#tbbody').append(`<tr>
                    <th scope="row">${++index}</th>
                      <td class="text-center">${shortdate}</td>
                      <td class="text-center">${time}</td>
                    </tr>`);
                }));

            } catch {
                $('#alert').append(`
              <div class="alert alert-info" role="alert">
              <i class="fas fa-info-circle me-3"></i> <b>${new_data2.room_name}:</b> ไม่พบข้อมูลการจอง
              </div>`);
            }


        }
    });

});