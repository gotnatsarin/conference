$(document).ready(function() {
    var AM = "08:00 - 12:00 น.";
    var PM = "13:00 - 16:00 น.";
    var user_id = $('#user_id').val();
    $('#form_result a').addClass('active');
    $.ajax({
        type: 'GET',
        url: 'query/resultbooking.php',
        data: {
            user_id: user_id,
        },
        success: function(data) {
            var new_data = JSON.parse(data).resultBookingObj;
            if (data == "null") {
            } else {
                new_data.forEach(((element, index) => {
                    $('#tablebody').append(`<tr>
                    <td class="text-center" >${++index}</td>
                    <td class="text-center" >${element['topic']}</td>
                    <td class=""> 
                    <div class="p-1 text-center">${element['room_name']}</div>
                    </td>
                    <td class="text-center">${element['user_fullname']}</td>
                    <td class="text-center"><div>${element['booking_date']}</div>
                    <p class="text-center mt-1">${(element['period_t'] == 0)? (AM):(PM) }</p>
                    </td>
                    <td class="col-2 text-center">
                    <a href="form_print.php?id=${element['id']}" target="_blank"><button class="btn btn-success">print</button></a>
                    </td>
                    </tr>`)
                }));
            }
        }
    });
});