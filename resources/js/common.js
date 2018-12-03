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

    $(".nav-tabs li a").click(function(){

      $(".dropdown-toggle").text($(this).text());
      $(".dropdown-toggle").val($(this).text());

   });

});
