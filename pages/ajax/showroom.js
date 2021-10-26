$(document).ready(function() {
    var room_id = $('#room_id').val();
    console.log(room_id)
    var time = null;
    var idactive = null;

    $.ajax({
        type: 'GET',
        url: 'query/showroom.php',
        data: {},
        success: function(data) {
            var new_data = JSON.parse(data).roomObj;
            console.log(new_data)
            new_data.forEach(((element, index) => {
                $('#nav').append(`
                <ul class="list-group">
                  <li class="list-group-item list-group-item-dark" id="${element['room_id']}">
                    <a class="nav-link text-dark text-end" href="main.php?room_id=${element['room_id']}">${element['room_name']}</a>
                  </li>
                </ul>
                `);

            }));
            try {
                $(`li.active a.text-light`).removeClass('text-light')
                $(`li.active`).removeClass('active')
                $(`li#${room_id}`).addClass('active')
                $(`li#${room_id} a`).removeClass('text-dark')
                $(`li#${room_id} a`).addClass('text-light')
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
                new_data2.forEach(((element2, index) => {
                    if (element2['period_t'] == 0) {
                        time = "9.00-12.00 น."
                    } else {
                        time = "13.00-16.00 น."
                    }
                    $('#tbbody').append(`<tr>
                    <th scope="row">${++index}</th>
                      <td class="text-center">${element2['booking_date']}</td>
                      <td class="text-center">${time}</td>
                    </tr>`);
                }));
            } catch {

            }

        }
    });

});