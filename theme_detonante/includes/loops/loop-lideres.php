<div class="container loop-wrapper">
	<?php
		$parent_query = new WP_Query( 
			array(
				'posts_per_page' => -1,
				'post_type' => 'lideres'
			)
		);

	if ($parent_query->have_posts()):
			
	while($parent_query->have_posts()) : $parent_query->the_post(); ?>
	
	<div id="post-" class="post-item col-md-4">
		<article>
			<a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
			<figure class="thumbnail-image">
				<a href="<?php the_permalink(); ?>">
					<?php if (has_post_thumbnail()): ?>
						<img src="<?php the_post_thumbnail('medium'); ?>" alt="image <?php the_title(); ?>"/>
					<?php else: ?>
						<img src="<?php the_field('image_field'); ?>" alt="image <?php the_title(); ?>"/>
					<?php endif; ?>
				</a>
			</figure>
			<div class="txt-wrapper">
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="cta">Conoce más</a>
			</div>
		</article>
	</div>

	<?php
	endwhile;
		endif;
	?>
</div>