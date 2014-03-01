<header class="banner container" role="banner">
  <div class="row">
    <div class="col-sm-6">
      <div class="logo">
          <a class="brand" href="<?php echo home_url('/') ?>"><img alt="<?php bloginfo('name'); ?>" src="http://artofadventuring.com/wp-content/uploads/2013/07/Art_of_Adventuring.png"></a>
      </div>
    </div>
    <div class="col-sm-6 header-right">
      <?php get_search_form(); ?>
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills navbar-default'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>