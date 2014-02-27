<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>

	<div class="row">
		<div class="col-sm-5">
			<?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
		</div>
		<div class="col-sm-7">
		  <div class="entry-summary">
	    	<?php the_excerpt(); ?>
	  	</div>
		</div>
	</div>
</article>
