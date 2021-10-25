$(document).ready(function() {
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

        }
    }
  });
});