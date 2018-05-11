(function ($) {
	
	"use strict";

	//Slider  and coarousel scripts
	var slider_wrapper = $('.hero-slider--main-slider'),
		carousel_empr = $('.gallery-carousel');

	if(slider_wrapper) {
		//trigger the slider
		slider_wrapper.slick({
			dots: true,
			infinite: false,
			speed: 300
		});
	}

	if(carousel_empr) {
		carousel_empr.slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true,
		        dots: true
		      }
		    }
		  ]
		});
	}

	

}(jQuery));
