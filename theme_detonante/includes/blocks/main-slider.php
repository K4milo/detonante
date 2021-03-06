
<?php
	$slider = get_field('items_slider');
	if($slider):
?>
	<div class="container-fluid hero-slider" id="mainSlider">
		<ul class="hero-slider--main-slider">
		<?php
		// Slider block
		while(have_rows('items_slider')): the_row(); ?>
			<li class="slider--item" style="background-image: url(<?php the_sub_field('image_field');?>)">
				<div class="caption-slider">
					<h3><?php the_sub_field('text_field');?></h3>
					<p><?php the_sub_field('bottom_field'); ?></p>
				</div>
			</li>
		<?php
		endwhile;
		?>
		</ul>
	</div>
<?php
	endif;