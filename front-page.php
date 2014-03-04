<?php get_template_part('templates/page', 'header'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<?php echo do_shortcode('[facetwp template="front_page"]'); ?>
			<?php echo do_shortcode('[facetwp pager="true"]'); ?>
		</div>
	  <aside class="sidebar col-sm-4" role="complementary">
      <?php include roots_sidebar_path(); ?>
    </aside><!-- /.sidebar -->
	</div>
</div>

