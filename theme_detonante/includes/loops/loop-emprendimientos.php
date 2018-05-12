<div class="taxonomy-products-loop">
<?php

	$cats = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy')); 

	$term_id = $cats->term_id;
	$taxonomy_name = $cats->taxonomy;
	$taxonomy_title = $cats->name;
	$taxonomy_slug = $cats->slug;
	
	$parent_query = new WP_Query( 
		array(
			'posts_per_page' => -1,
			'post_type' => 'emprendimiento',
			'tax_query' => array(
				array(
				'taxonomy' => $taxonomy_name,
				'field'    => 'slug',
				'terms'    => $taxonomy_slug
				),
			),
		)

	);

	if ($parent_query->have_posts()) :

	while($parent_query->have_posts()) : $parent_query->the_post(); ?>

	<div class="col-md-4">
		<a href="<?php the_permalink(); ?>">
			<figure class="logo">
				<img src="<?php the_field('logo_field'); ?>" alt="<?php the_title(); ?>">
			</figure>
			<h3><?php the_title(); ?></h3>
		</a>
	</div>

<?php endwhile; 
endif;?>
</div>