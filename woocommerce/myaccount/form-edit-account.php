<?php
/**
 * Edit account form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;
?>

<?php wc_print_notices(); ?>

<form action="" method="post">

	<div class="row">
	  <div class="col-lg-6">
	    <div class="input-group">
	      <input type="text" class="form-control" placeholder="First Name" name="account_first_name" id="account_first_name" value="<?php esc_attr_e( $user->first_name ); ?>" />
	    </div>
	  </div>
	  <div class="col-lg-6">
	    <div class="input-group">
	      <input type="text" class="form-control" name="account_last_name" id="account_last_name" value="<?php esc_attr_e( $user->last_name ); ?>" />
	    </div>
	  </div>
	</div>

	<p class="form-row form-row-wide">
		<label for="account_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="email" class="input-text" name="account_email" id="account_email" value="<?php esc_attr_e( $user->user_email ); ?>" />
	</p>
	<p class="form-row form-row-first">
		<label for="password_1"><?php _e( 'Password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
		<input type="password" class="input-text" name="password_1" id="password_1" />
	</p>
	<p class="form-row form-row-last">
		<label for="password_2"><?php _e( 'Confirm new password', 'woocommerce' ); ?></label>
		<input type="password" class="input-text" name="password_2" id="password_2" />
	</p>
	<div class="clear"></div>

	<p><input type="submit" class="button" name="save_account_details" value="<?php _e( 'Save changes', 'woocommerce' ); ?>" /></p>

	<?php wp_nonce_field( 'save_account_details' ); ?>
	<input type="hidden" name="action" value="save_account_details" />
</form>