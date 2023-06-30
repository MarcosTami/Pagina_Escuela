$(document).ready(function() {

    function load_data(query) {
        $.ajax({
            url: "buscar.php",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                $('#result').html(data);
            }
        });
    }

    load_data();
    
    $('#search_text').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });
});

