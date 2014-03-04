<?php
/**
 * Custom functions
 */

/* ==========================================================================
   Hide Category from Facet
  ========================================================================== */

function my_facetwp_index_row( $params ) {
    $destinations = get_terms( 'category', array( 'child_of' => 429, 'fields' => 'ids' ) );
    if ( 'category' == $params['facet_name'] && in_array( $params['facet_value'], $destinations ) ) {
        return false;
    }
    return $params;
}
add_filter( 'facetwp_index_row', 'my_facetwp_index_row' );

/* ==========================================================================
   Custom Widget for Author Box
  ========================================================================== */
class NewsletterWidget extends WP_Widget
{
  function NewsletterWidget()
  {
    $widget_ops = array('classname' => 'NewsletterWidget', 'description' => 'Mailchimp Box' );
    $this->WP_Widget('NewsletterWidget', 'Newsletter Widget', $widget_ops);
  }
 
  function widget($args, $instance)
  {
    echo '
     <form style="margin-bottom:30px" class="article_newsletter" method="post" name="mc-embedded-subscribe-form" role="form" action="http://artofadventuring.us2.list-manage.com/subscribe/post?u=1014ab0bbffc2795b59456be0&amp;id=6a468de608">
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
    ';
  }
}
add_action( 'widgets_init', create_function('', 'return register_widget("NewsletterWidget");') );

/* ==========================================================================
   Disclosure Shortcode
  ========================================================================== */
function disclosure_shortcode( $atts, $content = null ) {  
    return '
    <div class="disclosure">
			'.$content.'
    </div>';  
}
add_shortcode("disclosure", "disclosure_shortcode");

/* ==========================================================================
   Question Shortcode
  ========================================================================== */
function question_shortcode( $atts, $content = null ) {  
    return '
    <div class="question">
    	<span class="glyphicon glyphicon-question-sign"></span>
			'.$content.'
    </div>';  
}
add_shortcode("question", "question_shortcode");

/* ==========================================================================
   Infobox Shortcode
  ========================================================================== */
function infobox_shortcode( $atts, $content = null ) {  
    return '
    <div class="infobox">
  		<span class="glyphicon glyphicon-info-sign"></span></br>
  		'.$content.'
    </div>';  
}
add_shortcode("infobox", "infobox_shortcode");

/* ==========================================================================
   Category Exclude
   Controlled by text input under dashboard->settings->reading -> 'Exclude Categories from Home'
  ========================================================================== */

class custom_exclude_categories {
    public function custom_exclude_categories() {
        $this->__construct();
    }
    public function __construct() {
        add_action('admin_init',array($this,'register_setting'),10,0);
        add_action('admin_menu', array($this,'admin_option_setup'),10,0);
        add_action('pre_get_posts',array($this,'pre_get_posts'),20,1);
    }
    public function register_setting() {
        register_setting('reading','excluded_categories');
    }
    public function admin_option_setup() {
        add_settings_field( 'excluded_categories_field', __('Exclude Categories from Home', 'custom_lang'), array($this,'excluded_categories_field'), 'reading', 'default' );
    }
    public function excluded_categories_field() {
        $value = get_option('excluded_categories');
        echo '<p><input type="text" class="large-text code" id="excluded_categories" name="excluded_categories" value="'. $value .'" /></p>';
        echo '<p class="description">'. __('Enter here comma separated IDs of the categories, if you want them to be excluded from the home page of your blog.','custom_lang') .'</p>';
    }
    public function pre_get_posts(&$query) {
        if (!$query->is_admin && ($query->is_home || ($query->is_feed && !$query->is_category)) && (!isset($query->query_vars['suppress_filters']) || false === $query->query_vars['suppress_filters']) && !$query->is_preview) {
            if(get_option('excluded_categories') != '') {
                $excluded = get_option('excluded_categories');
                $excluded_arr = explode(',',$excluded);
                $query->set('category__not_in', array_map('intval',$excluded_arr));
            }
        }
    }
}
$custom_exclude_categories = new custom_exclude_categories;