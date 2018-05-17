<?php

/*
  Template Name: Contacto
*/

get_template_part('includes/header');

	while(have_posts()):the_post();?>
	
	<div class="wrapper-contact container-fluid">
		<div class="row header-wrapper">
			<div class="caption">
				<?php the_excerpt(); ?>
			</div>
		</div>
		<div class="row form-wrapper">
			<div class="container">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

<?php
	endwhile;

get_template_part('includes/footer');
