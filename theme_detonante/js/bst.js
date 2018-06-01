(function ($) {
	
	"use strict";

	//Slider  and coarousel scripts
	var slider_wrapper = $('.hero-slider--main-slider'),
		carousel_empr = $('.gallery-carousel'),
		carousel_empr_li = carousel_empr.find('li');

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
			slidesToScroll: 4,
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

	carousel_empr_li.each(function(index, el) {

		var $instance = $(this),
		$data = $instance.data('url');
		
		$instance.css('background-image','url('+ $data + ')');

	});

	

}(jQuery));
