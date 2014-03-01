<?php while (have_posts()) : the_post(); ?>

<?php
$cover_id = get_post_thumbnail_id();
$cover_url = wp_get_attachment_image_src($cover_id,'coverhero', true);
?>

<section id="coverhero" class="container-liquid" style="background: url('<?php echo $cover_url[0]; ?>') no-repeat fixed center;background-size: cover;">     
  <div class="coverhero-overlay"></div>
    <div class="coverhero-text">
      <div class="container coverhero-fulltext">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <article>
              <h1 class="entry-title"><?php the_title(); ?></h1>
              <?php get_template_part('templates/entry-meta'); ?>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-8 col-md-offset-2">
      <article <?php post_class(); ?>>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
        <div class="authorbox">
          <h3>Written By: <?php the_author_meta( 'display_name') ; ?></h3>
          <div class="row">
            <div class="col-sm-3">
              <?php echo get_avatar( $id_or_email, $size = '150' ); ?>
            </div>
            <div class="col-sm-9">
              <div class="authorbio">
                <?php the_author_meta( 'description' ); ?> 
              </div>
            </div>
          </div>
        </div>
        <section>
          <form class="header_newsletter" role="form">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Get Email Updates" required>
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Subscribe</button>
              </span>
            </div>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1"> Daily
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox2" value="option2"> Weekly
            </label>
          </form> <!-- /newsletter-group -->
        </section>

        <footer>
          <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
        </footer>
        
          <?php comments_template('/templates/comments.php'); ?>
      </article>
    </div>
  </div>
</div>
<?php endwhile; ?>
