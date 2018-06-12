<?php

get_template_part('includes/header');

	while(have_posts()):the_post();
		?>
		<header class="top-single-header">
			<h1><?php the_title(); ?></h1>
		</header>
		
		<?php if(has_post_thumbnail()): ?>

		<div class="container-fluid pre-content">
			<div class="row">
				<figure class="container thumb-container">
					<?php the_post_thumbnail('full'); ?>
				</figure>
			</div>
		</div>

	<?php endif; ?>

		<div class="main-content container">
			<div class="row top-information">
				<div class="col-md-7 side-leader">
					<?php the_content(); ?>
				</div>
				<div class="col-md-5 side-leader">
					<?php if(get_field('logo_field')):?>
						<figure class="logo-emp">
							<img src="<?php the_field('image_field'); ?>">
						</figure>
					<?php endif; ?>
				</div>	
			</div>
		</div>
<?php

	endwhile;

get_template_part('includes/footer'); ?>
