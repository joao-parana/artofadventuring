<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      <?php get_search_form(); ?>
    </nav>
  </div>
</header>

<div class="container">
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
</div>