<?php 
	$cats = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy')); 
	$term_id = $cats->term_id;
	$taxonomy_name = $cats->taxonomy;
	$taxonomy_slug = $cats->slug;
	$taxonomy_desc = $cats->description;

	$term_image = get_field('icon_taxtonomy_empr', 'tipo-emprendimiento'.'_'.$term_id); 


	if($cats):
?>
<header class="main-header">
	<div class="caption-header">
		<img src="<?php bloginfo('template_url')?>/img/svgs/quote-left.svg" class="quote-left" alt="quote">
		<img src="<?php bloginfo('template_url')?>/img/svgs/quote-right.svg" class="quote-right" alt="quote">
		<p><?php echo $taxonomy_desc;?></p>	
	</div>
</header>


<figure class="taxonomy-icon">
	<img src="<?php echo $term_image; ?>" alt="icon-<?php echo $taxonomy_slug; ?>"/>
	<h2><?php echo $cats->name; ?></h2>
</figure>

<?php endif;