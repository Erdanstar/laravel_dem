$(window).on('load', function() {

    $('.top-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 8000,
        items: 1
    });
    $('.professions-owl').owlCarousel({
        items: 1,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
    });
    $('.actually-professions-owl').owlCarousel({
        items: 1,
        width: 100,
        autoplay: true,
        autoplayTimeout: 11000,
        dots: true,
    });

    $("#formsto li a").click(function(){

      $(".dropdown-toggle").text($(this).text());
      $(".dropdown-toggle").val($(this).text());

   });

});
