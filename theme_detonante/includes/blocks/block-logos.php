
<?php
	$logos = get_field('logos_items');
	if($logos):
?>
	<div class="container-fluid logos-wrapper" id="mainLogos">
		<ul class="logos">
		<?php
		// Slider block
		while(have_rows('logos_items')): the_row(); ?>
			<li class="logo--item">
				<img src="<?php the_sub_field('logo_item');?>" alt="logo" />
			</li>
		<?php
		endwhile;
		?>
		</ul>
	</div>
<?php
	endif;