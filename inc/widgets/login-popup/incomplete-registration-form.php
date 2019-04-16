<?php
	global $wp;
	$user_id = $current_user->ID;

?>

<form id="incomplete-registration-form" action="<?php echo esc_url( home_url($wp->request) ); ?>" method="post" class="wpcf7-form" style="padding: 3em;">

	<?php wp_nonce_field( 'incomplete_registration_form_'.$user_id, 'incomplete_registration_form' ); ?>
	<label for="first_name">
		<?php _e( 'First Name', 'etbi' ); ?>
	</label>

	<input type="hidden" name="user_id" value="<?php echo esc_attr( $user_id ); ?>">

	<p>
		<span class="wpcf7-form-control-wrap first-name">
			<input type="text" name="first_name" required="true" aria-required="true" aria-invalid="false" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required">
		</span>
	</p>

	<label for="last_name">
		<?php _e( 'Last Name', 'etbi' ); ?>
	</label>
	
	<p>
		<span class="wpcf7-form-control-wrap last-name">
			<input type="text" name="last_name" required="true" aria-required="true" aria-invalid="false" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required">
		</span>
	</p>

	<button type="submit"><?php _e( 'Submit', 'etbi' ); ?></button>
</form>