<div class="container">
	<div class="row">
		<div class="col-md-9">
			<?php get_template_part('templates/page', 'header'); ?>
			<div class="site-content">
				<?php woocommerce_content(); ?>
			</div>
		</div>

		<div class="col-md-3">
			<?php dynamic_sidebar('sidebar-shop'); ?>
		</div>
	</div>
</div>

