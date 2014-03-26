<?php
/**
 * Checkout coupon form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

if ( ! WC()->cart->coupons_enabled() )
	return;

$info_message = apply_filters( 'woocommerce_checkout_coupon_message', __( 'Have a coupon?', 'woocommerce' ) );
$info_message .= ' <a href="#" class="showcoupon">' . __( 'Click here to enter your code', 'woocommerce' ) . '</a>';
wc_print_notice( $info_message, 'notice' );
?>

<form class="checkout_coupon" method="post" style="display:none">
	<div class="row">
	  <div class="col-lg-6">
	    <div class="input-group">
	      <input type="text" name="coupon_code" class="form-control" placeholder="<?php _e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />
	    	<span class="input-group-btn">
	        <button type="submit" class="btn btn-default" name="apply_coupon" value="<?php _e( 'Apply Coupon', 'woocommerce' ); ?>" >Go!</button>
	      </span>
	    </div>
	  </div>
	</div>
	<div class="clear"></div>
</form>