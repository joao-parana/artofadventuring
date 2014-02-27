<header class="banner container" role="banner">
  <div class="row">
    <div class="col-sm-8">
      <div class="logo">
          <a class="brand" href="<?php echo home_url('/') ?>"><img alt="<?php bloginfo('name'); ?>" src="http://artofadventuring.com/wp-content/uploads/2013/07/Art_of_Adventuring.png"></a>
      </div>
    </div>
    <div class="col-sm-4">
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
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills navbar-default'));
          endif;
        ?>
      </nav>
      <?php get_search_form(); ?>
    </div>
  </div>
</header>
