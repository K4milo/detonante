<?php

/*
  Template Name: Líderes
*/

get_template_part('includes/header');

	while(have_posts()):the_post();

		//Main Header
		get_template_part('includes/blocks/image','header');

		//Loop taxonomy 
		get_template_part('includes/loops/loop','lideres');

	endwhile;

get_template_part('includes/footer'); ?>