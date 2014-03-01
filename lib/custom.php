<?php
/**
 * Custom functions
 */

/* ==========================================================================
   Hide Category from Facet
  ========================================================================== */

function my_facetwp_index_row( $params ) {
    $excluded = array( 'USA' );

    // Ignore this value if it's in the above list
    if ( 'front_page' == $params['facet_name'] && in_array( $params['facet_display_value'], $excluded ) ) {
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
    	<span class="glyphicon glyphicon-info-sign"></span>
			'.$content.'
    </div>';  
}
add_shortcode("infobox", "infobox_shortcode");