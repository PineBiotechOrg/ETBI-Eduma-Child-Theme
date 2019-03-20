<?php

?>

<div id="user-menu-dropdown-container" class="menu-item">

	<a href="<?php echo esc_url( etbi_notifications_link() ); ?>" id="user-notifications-top">
		<?php if( etbi_unread_notifications_count() > 0 ) : ?>
			<span class="badge <?php echo esc_attr( $notification_class ); ?>"><?php echo esc_html( etbi_unread_notifications_count() ); ?></span>
		<?php else : ?>
			<i class="fa fa-bell"></i>
		<?php endif; ?>
	</a>

	<a href="<?php echo esc_url( $user_link ); ?>" id="user-menu-trigger" class="link link-secondary dropdown-trigger" onclick="event.preventDefault();" aria-expanded="false" aria-controls="user-menu">

		<span class="user etbi-username"><?php echo esc_html( $user_name ); ?></span>

		<?php echo etbi_get_avatar( array( 'height' => 21, 'width' => 21 ) ); ?>

	</a>

	<div id="user-menu" class="dropdown" aria-hidden="true">

		<div class="dropdown-header">

			<span class="user-dropdown-item close">

				<a href="#close-user-menu" id="user-menu-dropdown-close" class="link link-secondary dropdown-close">

					<i class="fa fa-close icon icon-left"></i>

					<small><?php _e( 'Close', 'canvas' ) ?></small>

				</a>

			</span>
			
		</div>

		<div class="dropdown-body">

			<?php echo etbi_get_user_links(); ?>
			
			<?php do_action( 'etbi_user_dropdown_menu_body' ); ?>

		</div>

	</div>

</div>