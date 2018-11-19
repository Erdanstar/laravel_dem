$(document).ready(function() {

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 1
    });
    $('select[name="question_id"]').on('change', function() {
        var countryId = $(this).val();
        if (countryId) {
            $.ajax({
                url: '/admin/questions/get/' + countryId,
                type: "GET",
                dataType: "json",
                beforeSend: function() {
                    $('#loader').css("visibility", "visible");
                },

                success: function(data) {

                    $('select[name="correct"]').empty();

                    $.each(data, function(key, value) {

                        $('select[name="correct"]').append('<option value="' + key + '">' + value + '</option>');

                    });
                },
                complete: function() {
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="correct"]').empty();
        }

    });

});
