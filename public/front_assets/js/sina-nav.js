/**
 * Template name: Sina-nav Multi Purpose Menu
 * Template URI: https://github.com/shaonsina/sina-nav-4
 * Version: 2.1
 * Author: shaonsina
 */

(function ($) {
	'use strict';
	$.fn.sinaNav = function () {
		return this.each( function() {
			var getNav		= $(this),
				top 		= getNav.data('top') || getNav.offset().top,
				mdTop 		= getNav.data('md-top') || getNav.offset().top,
				xlTop 		= getNav.data('xl-top') || getNav.offset().top,
				navigation 	= getNav.find('.sina-menu'),
				getWindow 	= $(window).outerWidth(),
				anim 		= getNav.data('animate-prefix') || '',
				getIn 		= navigation.data('in'),
				getOut 		= navigation.data('out');

				$(window).on('resize', function(){
					getWindow 	= $(window).outerWidth();
				});
            
			// Widget-bar
			// ---------------------------------
			getNav.find('.extension-nav').each(function(){
				$('.widget-bar-btn > a', this).on('click', function(e){
					e.preventDefault();
					getNav.children('.sina-nav-overlay').fadeIn(400);
					getNav.children('.widget-bar').toggleClass('on');
				});
			});
			getNav.find('.widget-bar .close-widget-bar').on('click', function(e){
				e.preventDefault();
				getNav.children('.widget-bar').removeClass('on');
				getNav.children('.sina-nav-overlay').fadeOut(600);
			});
			getNav.children('.sina-nav-overlay').on('click', function() {
				getNav.children('.widget-bar').removeClass('on');
				$(this).fadeOut(600);
			});

			// Toggle Button
			getNav.find('.navbar-toggle').on('click', function(){
				$('.fa', this).toggleClass('fa-bars').toggleClass('fa-times');
			});


		});
	}
	// Initialize
	$('.sina-nav').sinaNav();
}(jQuery));