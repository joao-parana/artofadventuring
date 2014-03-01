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
              <div class="categorylist">Posted in: <?php echo get_the_category_list(' // '); ?></div>
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
          <form class="article_newsletter" method="post" name="mc-embedded-subscribe-form" role="form" action="http://artofadventuring.us2.list-manage.com/subscribe/post?u=1014ab0bbffc2795b59456be0&amp;id=6a468de608">
          <h3>Get Email Updates on New Articles</h3>
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Get Email Updates" required>
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Subscribe</button>
              </span>
            </div>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="group[5][1]" value="1"> Daily
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox2" ame="group[5][2]" value="2" checked> Weekly
            </label>
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_1014ab0bbffc2795b59456be0_6a468de608" value=""></div>
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
