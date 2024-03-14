$(document).ready(function(){
    $('#state_dropdown').change(function() {
        var stateCode = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'code/PlaceData/get_cities.php',
            data: { state_code: stateCode },
            success: function(data) {
                $('#city_dropdown').empty();
                $.each(data, function(index, option) {
                    $('#city_dropdown').append($('<option>', {
                        value: option.value,
                        text: option.text
                    }));
                });
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });
});