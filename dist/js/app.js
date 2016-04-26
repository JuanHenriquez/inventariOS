(function($){
    
    // Materialize Plugins
    $('.parallax').parallax();
    $(".button-collapse").sideNav();
    
    // OWL Carousel Plugin
    $(".owl-carousel").owlCarousel({
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            685: {
                items: 2
            },
            900: {
                items: 3
            }
        }
    });

    $('#btn-left').click(function() {
        $('.owl-carousel').trigger('prev.owl.carousel');
    });

    $('#btn-right').click(function() {
        $('.owl-carousel').trigger('next.owl.carousel');
    });


})(jQuery);
