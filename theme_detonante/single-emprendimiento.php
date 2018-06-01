<?php

/*
	Variable fields

	logo_field
	url_page_field
	items_contacto
		contact_type
		contact_text
		vinculo_de_contacto
	gallery_items
		item_image
		caption_item
	items_infograficos
		image_info_item

*/

get_template_part('includes/header'); 

	while(have_posts()):the_post(); ?>
	
	<?php if (has_post_thumbnail()): ?>
	<header class="top-single-header" style="background: url('<?php the_post_thumbnail_url('full'); ?> '); background-size: cover;">
		<h1><?php the_title(); ?></h1>
	</header>
	<?php else: ?>
	<header class="top-single-header">
		<h1><?php the_title(); ?></h1>
	</header>
	<?php endif; ?>

	<div class="main-content container">
		<div class="row top-information">
			<div class="col-md-6 side-profile">
				<?php the_content(); ?>
			</div>
			<div class="col-md-6 side-profile">
				
				<?php if(get_field('logo_field')):?>
					<figure class="logo-emp">
						<img src="<?php the_field('logo_field'); ?>">
					</figure>
				<?php endif; ?>
				
				<?php if(get_field('items_contacto')):?>
				<div class="contact-items">	
					<h4>Contacto</h4>
					<ul>
						<?php while(have_rows('items_contacto')): the_row(); ?>
							<li class="item-contact item-<?php the_sub_field('contact_type'); ?>">
								<i class="fa fa-<?php the_sub_field('contact_type'); ?>" aria-hidden="true"></i>
								<a href="<?php the_sub_field('vinculo_de_contacto'); ?>" target="_blank">
									<?php the_sub_field('contact_text'); ?>
								</a>
							</li>
						<?php endwhile;?>
					</ul>
					<?php if(get_field('url_page_field')):?>
						<a href="<?php the_field('url_page_field')?>" class="btn btn-yellow" target="_blank">Ver página <i class="fa fa-play" aria-hidden="true"></i></a>
					<?php endif; ?>	
				</div>
				<?php endif; ?>
			</div>	
		</div>
		<div class="row gallery-contact">
			<?php if(get_field('gallery_items')):?>

				<ul class="gallery-carousel">
					<?php while(have_rows('gallery_items')): the_row(); ?>
						<li class="item-gallery" style="background-image: url(<?php the_sub_field('item_image'); ?>)" data-url="<?php the_sub_field('item_image'); ?>">
							<?php if(get_sub_field('caption_item')):?>
							<div class="caption-slide">
								<?php the_sub_field('caption_item'); ?>
							</div>
						<?php endif; ?>
						</li>
					<?php endwhile;?>
				</ul>

			<?php endif; ?>
		</div>
		<div class="row single-infographics">
			<?php if(get_field('items_infograficos')):?>
				<?php while(have_rows('items_infograficos')): the_row(); ?>
					<div class="col-md-6 side-infographs">
						<img src="<?php the_sub_field('image_info_item'); ?>" alt="<?php the_title(); ?>">
					</div>
				<?php endwhile;?>
			<?php endif; ?>
		</div>
	</div>


	<?php
	endwhile;

get_template_part('includes/footer'); ?>
