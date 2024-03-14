$(document).ready(function() {
    $.ajax({
        url: 'code/PlaceData/get_states.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $.each(data, function(index, option) {
                $('#state_dropdown').append($('<option>', {
                    value: option.value,
                    text: option.text
                }));
            });
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });
});
