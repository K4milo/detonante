(function ($) {
	
	"use strict";

	//Slider
	var slider_wrapper = $('.hero-slider--main-slider');

		if(slider_wrapper) {
			//trigger the slider
			slider_wrapper.slick({
				dots: true,
				infinite: false,
				speed: 300
			});
		}
	

}(jQuery));
