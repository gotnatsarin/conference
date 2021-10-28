$(document).ready(function() {
    var AM = "09:00 - 12:00 น.";
    var PM = "13:00 - 16:00 น.";
    var user_id = $('#user_id').val();
    var id = null;

    const deleteThisbook = () => {
        $('#cancelbooked').modal('hide')
        $.ajax({
            type: 'POST',
            url: 'query/cancelbooking.php',
            data: {
                id: id,
            },
            success: function(data) {
                if (data == "true") {
                    $.ajax({
                        type: 'GET',
                        url: 'query/resultbooking.php',
                        data: {
                            user_id: user_id,
                        },
                        success: function(data) {
                            $(`tbody tr`).remove()
                            try {
                                var new_data = JSON.parse(data).resultBookingObj;
                                console.log(new_data)
                                if (data == "null") {} else {
                                    new_data.forEach(((element, index) => {
                                        var dd = new Date(element['booking_date'])
                                        var shortdate = dd.getDate() + "/" + (dd.getMonth() + 1) + "/" + dd.getFullYear()
                                        $('#tablebody').append(`<tr>
                                      <td class="text-center" >${++index}</td>
                                      <td class="text-center" >${element['topic']}</td>
                                      <td class=""> 
                                      <div class="p-1 text-center">${element['room_name']}</div>
                                      </td>
                                      <td class="text-center">${element['user_fullname']}</td>
                                      <td class="text-center"><div>${shortdate}</div>
                                      <p class="text-center mt-1">${(element['period_t'] == 0)? (AM):(PM) }</p>
                                      </td>
                                      <td class="col-2 text-center">
                                      <button id="cancel_booking" value=${element['id']} type='button' class='btn btn-danger'>ยกเลิกจอง</button>
                                      <a href="form_print.php?id=${element['id']}" target="_blank"><button class="btn btn-success">print</button></a>
                                      </td>
                                      </tr>`)
                                    }));
                                }
                            } catch {
                                console.log("Empty")
                            }
                        }
                    });
                    $("#delete_success").toast("show")
                } else {
                    $("#delete_fail").toast("show")
                }
            }
        });
    };


    $('#form_result a').addClass('active');
    $.ajax({
        type: 'GET',
        url: 'query/resultbooking.php',
        data: {
            user_id: user_id,
        },
        success: function(data) {
            var new_data = JSON.parse(data).resultBookingObj;
            console.log(new_data)
            if (data == "null") {} else {
                new_data.forEach(((element, index) => {
                    var dd = new Date(element['booking_date'])
                    var shortdate = dd.getDate() + "/" + (dd.getMonth() + 1) + "/" + dd.getFullYear()
                    $('#tablebody').append(`<tr>
                    <td class="text-center" >${++index}</td>
                    <td class="text-center" >${element['topic']}</td>
                    <td class=""> 
                    <div class="p-1 text-center">${element['room_name']}</div>
                    </td>
                    <td class="text-center">${element['user_fullname']}</td>
                    <td class="text-center"><div>${shortdate}</div>
                    <p class="text-center mt-1">${(element['period_t'] == 0)? (AM):(PM) }</p>
                    </td>
                    <td class="col-2 text-center">
                    <button id="cancel_booking" value=${element['id']} type='button' class='btn btn-danger'>ยกเลิกจอง</button>
                    <a href="form_print.php?id=${element['id']}" target="_blank"><button class="btn btn-success">print</button></a>
                    </td>
                    </tr>`)
                }));
            }
        }
    });

    $('#confirm').click(function() {
        deleteThisbook();

    });
    $(document).on("click", "#cancel_booking", function() {
        id = $(this).val();
        $('#cancelbooked').modal('show')
    });
});