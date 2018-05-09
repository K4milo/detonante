
<?php
	$video_url = get_field('url_video');
	$video_text = get_field('video_text_field');

	if($video_url):
?>
	<div class="container-fluid video-vimeo" id="videoVimeo">
		<div class="row video-wrapper">
			<iframe src="https://player.vimeo.com/video/<?php echo $video_url; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<?php if($video_text): ?>
				<h4><?php echo $video_text; ?></h4>
			<?php endif;?>
		</div>
	</div>
<?php
	endif;