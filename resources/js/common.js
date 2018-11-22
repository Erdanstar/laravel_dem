$(document).ready(function() {

    $('.top-slider').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        dots: false,
        items: 1
    });
    $('.professions-owl').owlCarousel({
      items: 1,
      dots: false,
      nav: true
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
