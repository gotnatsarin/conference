$(document).ready(function() {
    var AM = "09:00 - 12:00 น.";
    var PM = "13:00 - 16:00 น.";
    var user_id = $('#user_id').val();
    $.ajax({
        type: 'GET',
        url: 'query/resultbooking.php',
        data: {
            user_id: user_id,
        },
        success: function(data) {
            var new_data = JSON.parse(data).resultBookingObj;
            console.log(new_data)
            if (data == "null") {

            } else {
                new_data.forEach(((element, index) => {
                    $('#tablebody').append(`<tr>
                    <td class="col-3 text-center" >${element['topic']}</td>
                    <td class="col-3"> 
                    <div class="p-1 text-center">${element['room_name']}</div>
                    </td>
                    <td class="col-2 text-center">${element['user_fullname']}</td>
                    <td class="col-2 text-center"><div>${element['booking_date']}</div>
                    <p class="text-center mt-1">${(element['period_t'] == 0)? (AM):(PM) }</p>
                    </td>
                    <td class="col-2 text-center"><input type="button" class="btn btn-success" onclick="windown.print();" value="print"></td>
                    </tr>`)
                    console.log(element)
                }));

            }
        }
    });
});
