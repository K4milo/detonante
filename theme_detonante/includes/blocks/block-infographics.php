
<?php
	$title_quotes = get_field('text_title_field');
	$title_link = get_field('url_text_field');
	$counter = 0;

	if($title_quotes):
?>

	<div class="infographs-inline" id="infographsInline">
		
		<div class="quote-title">
			<h2>
				<img src="<?php bloginfo('template_url')?>/img/svgs/quote-left.svg" alt="quote">
					<a href="<?php echo $title_link; ?>"><?php echo $title_quotes; ?></a>
				<img src="<?php bloginfo('template_url')?>/img/svgs/quote-right.svg" alt="quote">
			</h2>
		</div>

		<div class="infographs-inline--wrapper no-gutter">
			<?php while(have_rows('items_corporativos')):the_row(); ?>
			<div class="col-md-6 inline-item" style="background-image: url(<?php the_sub_field("corporate_img_field")?>);">
				<h3>
					<a href="#" data-toggle="modal" data-target="#infograph-<?php echo $counter;?>">
						<?php the_sub_field('corporate_text_field'); ?>	
					</a>	
				</h3>
			</div>
			
			<!-- Modal content-->
			<div id="infograph-<?php echo $counter;?>" class="modal fade" role="dialog">
			  <div class="modal-dialog">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<img src="<?php the_sub_field('img_info_field')?>" alt="Image <?php the_sub_field('corporate_text_field'); ?>">
			  </div>
			</div>
			<?php $counter++; endwhile;?>	
		</div>

	</div>

<?php
	endif;