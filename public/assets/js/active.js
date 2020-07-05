(function($){
	"use strict";
	jQuery(document).on('ready', function () {

        // Project Slides
		$('.project-slides').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			smartSpeed: 2000,
			margin: 30,
			autoplayHoverPause: true,
			autoplay: true,
			navText: [
                "<i class='flaticon-back'></i>",
                "<i class='flaticon-right'></i>"
            ],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 2
				},
				768: {
					items: 2
				},
				1200: {
					items: 4
				}
			}
		});

		// Video Popup
		$('.popup-youtube').magnificPopup({
			disableOn: 320,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});

		// Feedback Slides
		$('.feedback-slides').owlCarousel({
			loop: true,
			nav: true,
			dots: true,
			margin: 30,
			smartSpeed: 2000,
			autoplayHoverPause: true,
			autoplay: true,
			items: 1,
			navText: [
                "<i class='flaticon-back'></i>",
                "<i class='flaticon-right'></i>"
            ],
		});

		// Partner Slides
		$('.partner-slides').owlCarousel({
			loop: true,
			nav: false,
			dots: false,
			smartSpeed: 2000,
			margin: 30,
			autoplayHoverPause: true,
			autoplay: true,
			navText: [
                "<i class='flaticon-back'></i>",
                "<i class='flaticon-right'></i>"
            ],
			responsive: {
				0: {
					items: 2
				},
				576: {
					items: 3
				},
				768: {
					items: 4
				},
				1200: {
					items: 6
				}
			}
		});

		// Team Slides
		$('.team-slides').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			smartSpeed: 2000,
			margin: 15,
			autoplayHoverPause: true,
			autoplay: true,
			navText: [
                "<i class='flaticon-back'></i>",
                "<i class='flaticon-right'></i>"
            ],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 2
				},
				768: {
					items: 2
				},
				1200: {
					items: 5
				}
			}
		});

		// Blog Slides
		$('.blog-slides').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			smartSpeed: 2000,
			margin: 30,
			autoplayHoverPause: true,
			autoplay: true,
			navText: [
                "<i class='flaticon-back'></i>",
                "<i class='flaticon-right'></i>"
            ],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 2
				},
				768: {
					items: 2
				},
				1200: {
					items: 3
				}
			}
		});

		// Services Details Slides
		$('.services-image-slides').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			items: 1,
			smartSpeed: 2000,
			autoplayHoverPause: true,
			autoplay: true,
		});

		// FAQ Accordion
        $(function() {
            $('.accordion').find('.accordion-title').on('click', function(){
                // Adds Active Class
                $(this).toggleClass('active');
                // Expand or Collapse This Panel
                $(this).next().slideToggle('fast');
                // Hide The Other Panels
                $('.accordion-content').not($(this).next()).slideUp('fast');
                // Removes Active Class From Other Titles
                $('.accordion-title').not($(this)).removeClass('active');		
            });
		});

		// Go to Top
        $(function(){
            //Scroll event
            $(window).on('scroll', function(){
                var scrolled = $(window).scrollTop();
                if (scrolled > 300) $('.go-top').fadeIn('slow');
                if (scrolled < 300) $('.go-top').fadeOut('slow');
            });  
            //Click event
            $('.go-top').on('click', function() {
                $("html, body").animate({ scrollTop: "0" },  500);
            });
		});

	});

	// Lax JS
	window.onload = function() {
		lax.setup() // init
		const updateLax = () => {
			lax.update(window.scrollY)
			window.requestAnimationFrame(updateLax)
		}
		window.requestAnimationFrame(updateLax)
    }

	// Preloader JS
    jQuery(window).on('load', function() {
        $('.uk-preloader').fadeOut();
    });
}(jQuery));