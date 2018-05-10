<?php

	$items_info = get_field('items_informativos');

	if($items_info):
?>
	
	<div id="itemsInformativos" class="items_informativos">
		
		<div class="container">
			<?php
				while(have_rows('items_informativos')): the_row();
			?>
				<div class="col-md-4 info--item">
					<figure class="icon-info">
						<img src="<?php the_sub_field('icono_informativo')?>" alt="Icono <?php the_sub_field('title_item_info_field')?>"/>
					</figure>
					<h3><?php the_sub_field('title_item_info_field')?></h3>
					<div class="text-wrap">
						<p><?php the_sub_field('par_item_info')?></p>
					</div>
					<a href="<?php the_sub_field('urk_item_info')?>" class="btn cta-info">
						Conoce Más <i class="fa fa-play" aria-hidden="true"></i>
					</a>
				</div>	
			<?php endwhile;?>
		</div>

	</div>
<?php

	endif;