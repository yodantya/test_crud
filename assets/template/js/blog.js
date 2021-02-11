(function($) {
    "use strict";


    //isotope setting(blog masonry)
    var $container = $('.blog-mason');
    $container.imagesLoaded(function() {
        $container.isotope();
    });
	
	//slider for blog slider
	$('.blog-slider').slick({
        autoplay: true,
        dots: false,
        nextArrow: '<i class="fa fa-arrow-right"></i>',
        prevArrow: '<i class="fa fa-arrow-left"></i>',
        speed: 800,
        fade: true,
        pauseOnHover: false,
        pauseOnFocus: false
    });
	
})(jQuery);