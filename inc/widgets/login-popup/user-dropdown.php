<?php
	// let us get the notifications for the user.
	if ( function_exists( 'bp_notifications_get_notifications_for_user' ) ) {
		$notifications = bp_notifications_get_notifications_for_user( get_current_user_id(), 'string' );
	} else {
		$notifications = bp_core_get_notifications_for_user( get_current_user_id(), 'string' );
	}

	// will be set to false if there are no notifications.
	if ( empty( $notifications ) ) {
		$count = 0;
	} else {
		$count = count( $notifications );
	}
?>

<div id="user-menu-dropdown-container" class="menu-item">

	<a href="<?php echo esc_url( etbi_notifications_link() ); ?>" id="notification-menu-trigger" class="dropdown-trigger" onClick="event.preventDefault();">
		<?php if( etbi_unread_notifications_count() > 0 ) : ?>
			<span class="badge <?php echo esc_attr( $notification_class ); ?>"><?php echo esc_html( etbi_unread_notifications_count() ); ?></span>
		<?php else : ?>
			<i class="fa fa-bell"></i>
		<?php endif; ?>
	</a>

	<div id="notification-menu" class='etbi-notification-list dropdown bp-notification-widget-notifications-list'>

	<ul class="bp-notification-list">

		<?php 

		if ( $notifications ) {

			$counter = 0;

			for ( $i = 0; $i < $count; $i ++ ) {

				$notification_item = '';
				if ( is_array( $notifications[ $i ] ) ) {
					$notification_item = sprintf( '<a href="%s">%s</a>', $notifications[ $i ]['link'], $notifications[ $i ]['text'] );
				} else {
					$notification_item = $notifications[ $i ];
				}


				$alt = ( 0 == $counter % 2 ) ? ' class="alt"' : ''; ?>

		        <li <?php echo $alt ?>><?php echo $notification_item ?></li>

				<?php $counter ++;
			}
		} else { ?>

		    <li><?php _e( "You don't have any new notification.", 'etbit' ); ?></li>

			<?php
		}

		?>

	</ul>

	<?php

		if ( $count > 0 ) {
		    $clear_text = __( 'clearing...', 'buddypress-notifications-widget' );
			echo '<br /><a data-clear-text="' . $clear_text .'" class="bp-notifications-widget-clear-link" href="' . bp_loggedin_user_domain() . '?clear-all=true' . '&_wpnonce=' . wp_create_nonce( 'bp-notifications-widget-clear-all-' . bp_loggedin_user_id() ) . '">' . __( '[x] Clear All Notifications', 'buddypress-notifications-widget' ) . '</a>';
		}

	?>

	</div>

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