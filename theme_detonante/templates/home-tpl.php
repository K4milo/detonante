<?php

/*
  Template Name: Home
*/

get_template_part('includes/header');

	while(have_posts()):the_post();

		//Slideshow
		get_template_part('includes/blocks/main','slider'); 


	endwhile;

get_template_part('includes/footer'); ?>
