(function($) {
    "use strict";

    //slider for work slider
	$('.work-slider').slick({
        autoplay: true,
        dots: false,
		arrows:false,
        speed: 800,
        fade: true,
        pauseOnHover: false,
        pauseOnFocus: false
    });
	
	//isotope setting(portfolio gallery)
        var $container = $('.port-gallery-body');
        $container.imagesLoaded(function() {
            $container.isotope();
        });
   
    // script popup image
    $('.popup-gallery').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

})(jQuery);