<footer class="container-fluid site-footer">
  
  <div class="row contact-widget">
     <?php dynamic_sidebar('widget-contact'); ?> 
  </div>
  

  <div class="row footer-columns">
    <div class="container">
      
        <?php dynamic_sidebar('footer-column-1'); ?>
      
      
        <?php dynamic_sidebar('footer-column-2'); ?>
      
      
        <?php dynamic_sidebar('footer-column-3'); ?>
      
    </div>
  </div>
  
  <div class="row footer-copyright">
    <div class="site-sub-footer">
      <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
