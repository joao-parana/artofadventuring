<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<?php while (have_posts()) : the_post(); ?>
			  <?php the_content(); ?>
			  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
			<?php endwhile; ?>
		</div>
	  <aside class="sidebar col-sm-4" role="complementary">
      <?php dynamic_sidebar('sidebar-primary'); ?>
    </aside><!-- /.sidebar -->
	</div>
</div>