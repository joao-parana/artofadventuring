<?php get_template_part('templates/page', 'header'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<?php echo do_shortcode('[facetwp template="front_page"]'); ?>
			<?php if ($wp_query->max_num_pages > 1) : ?>
			  <nav class="post-nav">
			    <ul class="pager">
			      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
			      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
			    </ul>
			  </nav>
			<?php endif; ?>
		</div>
	  <aside class="sidebar col-sm-4" role="complementary">
      <?php include roots_sidebar_path(); ?>
    </aside><!-- /.sidebar -->
	</div>
</div>

