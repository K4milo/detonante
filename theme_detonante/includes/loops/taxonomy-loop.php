<div class="container taxonomies-wrapper">
	<?php
		$_terms = get_terms( array('tipo-emprendimiento') );

		foreach($_terms as $term):

		$term_id = 	$term->term_id;
		$term_image = get_field('icon_taxtonomy_empr', 'tipo-emprendimiento'.'_'.$term_id); 
			
	?>
	
	<div id="emprendimiento-<?php echo $term_id; ?>" class="taxonomy-item col-md-4 taxonomy-<?php echo $term->slug; ?>">
		<a href="/tipo-emprendimiento/<?php echo $term->slug; ?>/">
			<figure>
				<img src="<?php echo $term_image; ?>" alt="icon-<?php echo $term->slug; ?>"/>
			</figure>
			<h3><?php echo $term->name; ?></h3>
		</a>
	</div>

	<?php
		endforeach;
	?>
</div>


