<?php get_template_part('includes/header');

  while(have_posts()):the_post();
    ?>
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
          <?php the_content(); ?>
    </div>
<?php

  endwhile;
  get_template_part('includes/footer'); ?>
