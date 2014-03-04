<footer class="content-info" role="contentinfo">
  <div class="container">
	  <div class="col-md-6">
		  <?php wp_nav_menu(array('theme_location' => 'footer_navigation', 'after' => '<span class="delimiter">//</span>', 'menu_class' => 'footer-navbar')); ?>
		  <div class="clearfix"></div>
	    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
	  </div>
	  <div class="col-md-6">
		  <div class="socialicons pull-right">
		    <a href="http://twitter.com/artofadventurin" target="_blank" class="aoaicon-twitter"></a>
		    <a href="https://www.facebook.com/artofadventuring" target="_blank" class="aoaicon-facebook"></a>
		    <a href="http://instagram.com/artofadventurin" target="_blank" class="aoaicon-instagram"></a>
		    <a href="https://plus.google.com/+MichaelTieso/posts" target="_blank" class="aoaicon-google-plus"></a>
		    <a href="http://feeds.artofadventuring.com/artofadventuring" target="_blank" class="aoaicon-feed"></a>
		  </div>
	  </div>
  </div>
</footer>

<?php wp_footer(); ?>
