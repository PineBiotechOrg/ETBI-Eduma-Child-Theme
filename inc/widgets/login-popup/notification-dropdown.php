<?php

if ( ! is_user_logged_in() ) {
	return;
}

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

// do not show this widget.
if ( $count <= 0 && empty( $instance['show_empty'] ) ) {
	return;
}



echo "<div class='etbi-notification-list bp-notification-widget-notifications-list'>";

	echo '<ul class="bp-notification-list">';

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

	echo '</ul>';

	if ( $count > 0 ) {
	    $clear_text = __( 'clearing...', 'buddypress-notifications-widget' );
		echo '<br /><a data-clear-text="' . $clear_text .'" class="bp-notifications-widget-clear-link" href="' . bp_loggedin_user_domain() . '?clear-all=true' . '&_wpnonce=' . wp_create_nonce( 'bp-notifications-widget-clear-all-' . bp_loggedin_user_id() ) . '">' . __( '[x] Clear All Notifications', 'buddypress-notifications-widget' ) . '</a>';
	}

echo '</div>';