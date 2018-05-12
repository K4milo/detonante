<?php get_template_part('includes/header'); ?>

<?php 
    //Header
    get_template_part('includes/blocks/block','titleTaxonomy');  
?>

<div class="container">
  <?php

    //loop post
    get_template_part('includes/loops/loop','emprendimientos');    

  ?>
  
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
