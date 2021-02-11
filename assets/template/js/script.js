(function($) {
    "use strict";

	
    $(window).on("load", function() { // makes sure the whole site is loaded
	
        //move to hash after loading
        if (window.location.hash) {
            var menuheigt = $(".for-sticky").height();
            $('html, body').stop().animate({
                scrollTop: $(window.location.hash).offset().top - menuheigt
            }, 300, 'linear');
        }
		
		//script for mobile menu
		$.fatNav();

        //isotope setting(portfolio)
        var $container = $('.portfolio-body');
        $container.imagesLoaded(function() {
            $container.isotope();
        });

        // Custom transform modifier for Stellar.js
        $.stellar.positionProperty.transform3d = {
            setPosition: function(element, newLeft, originalLeft, newTop, originalTop) {
                var distance = newTop - originalTop;
                element.css('transform', 'translate3d(0, ' + distance + 'px, 0');
            }
        };
        if (Modernizr.touch) {
            //add class on touch device
            $('body').addClass('no-para');
        } else {
            //stellar/parallax trigger
            $.stellar({
                positionProperty: 'transform3d',
                horizontalScrolling: false,
                hideDistantElements: false,
                responsive: true
            });
        }
		//margin for footer
		$('.transparent').css('height', $('.footer-two').outerHeight() + 'px');
    });


    //slider for home slider
    $('.home-slider').slick({
        autoplay: true,
        dots: false,
        autoplay: true,
        nextArrow: '<i class="fa fa-long-arrow-right"></i>',
        prevArrow: '<i class="fa fa-long-arrow-left"></i>',
        speed: 800,
        fade: true,
        pauseOnHover: false,
        pauseOnFocus: false
    });
	
	//slider for page slider
    $('.page-head-slider').slick({
        autoplay: true,
        dots: false,
        autoplay: true,
		arrows: false,
        speed: 800,
        fade: true,
        pauseOnHover: false,
        pauseOnFocus: false
    });

    // script popup image
    $('.popup-img').magnificPopup({
        type: 'image'
    });


    //create menu for tablet/mobile
	$(".menu-box .navigation").clone(false).find("ul,li").removeAttr("id").remove(".sub-menu").appendTo($(".fat-list"));
    //remove empty href
    $(".fat-list a[href='#']").parent().remove();
    $(".fat-list .sub-menu").remove();
    //remove empty ul on mobile menu
    $('.fat-list ul').not(':has(li)').remove();


    //menu for tablet/mobile,slider button, about button scrolling
    $('.fat-list a,.slider-btn,.content-btn').on('click', function() {
        var $anchor = $(this);
        var menuheigt = $(".for-sticky").height();
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - menuheigt
        }, 800, 'linear');
    });



    //sticky navigation
    $(".for-sticky").sticky({
        topSpacing: 0
    });

    // Video responsive
    $("body").fitVids();

    //script for navigation(superfish)
    $('.menu-box ul').superfish({
        delay: 400, //delay on mouseout
        animation: {
            opacity: 'show',
            height: 'show'
        }, // fade-in and slide-down animation
        animationOut: {
            opacity: 'hide',
            height: 'hide'
        },
        speed: 200, //  animation speed
        speedOut: 200,
        autoArrows: false // disable generation of arrow mark-up
    })




    // testimonial slider 
    $('.testi-slider').slick({
        autoplay: true,
        dots: false,
        autoplay: true,
        nextArrow: '<i class="fa fa-long-arrow-right"></i>',
        prevArrow: '<i class="fa fa-long-arrow-left"></i>',
        speed: 800,
        fade: true,
        pauseOnHover: false,
        pauseOnFocus: false
    });
	
	//slider client slider
    $('.client-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });


    // filter items when filter link is clicked
    var $container = $('.portfolio-body');
    $('.port-filter a').on('click', function() {
        var selector = $(this).attr('data-filter');
        $container.isotope({
            itemSelector: '.port-item',
            filter: selector
        });
        return false;
    });

    //adding active state to portfolio filtr
    $(".port-filter a").on('click', function() {
        $(".port-filter a").removeClass("active");
        $(this).addClass("active");
        setTimeout("$.stellar('refresh');", 600); //refresh stellar alignment
    });

	
	//run functions on window resize
	$(window).on('resize', function () {
		$('.transparent').css('height', $('.footer-two').outerHeight() + 'px');
	});

})(jQuery);