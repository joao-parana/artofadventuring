<footer class="content-info" role="contentinfo">
  <div class="container">
	  <div class="col-md-6">
		  <?php wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'footer-navbar')); ?>
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

<?php	if(is_single()) : ?>
	<script type="text/javascript">
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js?onload=onLoadCallback';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>

	<script async>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	<script type="text/javascript">
	(function(d){
	    var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
	    p.type = 'text/javascript';
	    p.async = true;
	    p.src = '//assets.pinterest.com/js/pinit.js';
	    f.parentNode.insertBefore(p, f);
	}(document));
	</script>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=117549151603649";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<?php endif; ?>




<?php wp_footer(); ?>
