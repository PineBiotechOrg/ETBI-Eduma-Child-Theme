<?php 
// ARE LINKS ENABLED FUNCTIONs

if( ! function_exists( 'etbi_get_avatar' ) ) {

	function etbi_get_avatar( $args = array() ) {

		$user_avatar = '';

		$defaults = array( 

			'height'		=> 21,
			'width'			=> 21,
			'type'			=> 'thumb',
			'icon'			=> 'user',
			'icon_size'		=> 'sm'

		);

		$args = wp_parse_args( $args, $defaults );

		if ( function_exists('bp_is_active') && is_user_logged_in() && get_option( 'show_avatars' ) ) {

			$type 		= $args['type'];
			$height 	= $args['height'];
			$width		= $args['width'];

			$user_avatar = bp_get_loggedin_user_avatar( 'type='.$type.'&width='.$width.'&height='.$height );

		} elseif ( is_user_logged_in() && get_option( 'show_avatars' ) ) {

			$user_id = get_current_user_id();

			$user_avatar = get_avatar( $user_id, $args['height'] );

		}

		return $user_avatar;

	}

}

if( ! function_exists( 'etbi_is_profile_link_enabled' ) ) {

	function etbi_is_profile_link_enabled() {

		if( is_user_logged_in() ) {

			if( function_exists('bp_is_active') ) {

				if( bp_is_active( 'xprofile' ) ) {

					return true;

				}

				return false;

			}

		}

		return false;

	}

}


if( ! function_exists( 'etbi_is_notifications_link_enabled' ) ) {

	function etbi_is_notifications_link_enabled() {

		if( is_user_logged_in() ) {

			if( function_exists('bp_is_active') ) {

				if( bp_is_active( 'notifications' ) ) {

					return true;

				}

				return false;

			}

		}

		return false;

	}

}

if( ! function_exists( 'etbi_is_messages_link_enabled' ) ) {

	function etbi_is_messages_link_enabled() {

		if( is_user_logged_in() ) {

			if( function_exists('bp_is_active') ) {

				if( bp_is_active( 'messages' ) ) {

					return true;

				}

				return false;

			}

		}

		return false;

	}

}


if( ! function_exists( 'etbi_is_account_link_enabled' ) ) {

	function etbi_is_account_link_enabled() {

		if( is_user_logged_in() ) {

			if( function_exists('bp_is_active') ) {

				if( bp_is_active('settings') || get_option( 'woocommerce_myaccount_page_id' ) ) {

					return true;

				}

				return false;

			}

		}

		return false;

	}

}

if( ! function_exists( 'etbi_is_logout_link_enabled' ) ) {

	function etbi_is_logout_link_enabled() {

		if( is_user_logged_in() ) {

			return true;

		}

		return false;

	}

}

if( ! function_exists( 'etbi_is_login_link_enabled' ) ) {

	function etbi_is_login_link_enabled() {

		if( ! is_user_logged_in() ) {

			return true;

		}

		return false;

	}

}


if( ! function_exists( 'etbi_is_registration_link_enabled' ) ) {

	function etbi_is_registration_link_enabled() {

		if( ! is_user_logged_in() && get_option( 'users_can_register' ) ) {

			return true;

		}

		return false;

	}

}


// etbi user menu link functions

if( ! function_exists( 'etbi_profile_link' ) ) {

	function etbi_profile_link() {

		if( is_user_logged_in() ) {

			$profile_link = '#profile';

			if( function_exists('bp_is_active') && bp_is_active( 'xprofile' ) ) {

				$profile_link = bp_get_loggedin_user_link();

			}

			return apply_filters( 'etbi_profile_link', $profile_link );

		}

		return wp_login_url( get_permalink() );

	}

}

if( ! function_exists( 'etbi_notifications_link' ) ) {

	function etbi_notifications_link() {

		if( is_user_logged_in() ) {

			$notifications_link = '#notifications';

			$user_id = get_current_user_id();

			if( function_exists('bp_is_active') && bp_is_active( 'notifications' ) ) {

				$notifications_link = bp_get_notifications_permalink( $user_id );

			}

			return apply_filters( 'etbi_notifications_link', $notifications_link );

		}

		return wp_login_url( get_permalink() );

	}

}

if( ! function_exists( 'etbi_messages_link' ) ) {

	function etbi_messages_link() {

		if( is_user_logged_in() ) {

			$messages_link = '#messages';

			if( function_exists('bp_is_active') && bp_is_active( 'messages' ) ) {

				$messages_link = bp_loggedin_user_domain().bp_get_messages_slug();

			}

			return apply_filters( 'etbi_messages_link', $messages_link );

		}

		return wp_login_url( get_permalink() );

	}

}

if( ! function_exists( 'etbi_account_link' ) ) {

	function etbi_account_link() {

		if( is_user_logged_in() ) {

			$account_link = '#account';

			if( function_exists('bp_is_active') && bp_is_active( 'settings' ) ) {

				$account_link = bp_loggedin_user_domain().bp_get_settings_slug();

			} elseif( etbi_is_woocommerce_activated() && get_option('woocommerce_myaccount_page_id') ) {

				$account_link = get_permalink( get_option('woocommerce_myaccount_page_id') );

			}

			return apply_filters( 'etbi_account_link', $account_link );

		}

		return wp_login_url( get_permalink() );

	}

}


if( ! function_exists( 'etbi_unread_notifications_count' ) ) {

	function etbi_unread_notifications_count() {

		$unread_notifications_count = 0;

		if( is_user_logged_in() ) {

			$user_id = get_current_user_id();

			if( function_exists('bp_is_active') && bp_is_active( 'notifications' ) ) {

				$unread_notifications_count = bp_notifications_get_unread_notification_count( $user_id );

			}

		}

		return apply_filters( 'etbi_unread_notifications_count', $unread_notifications_count );

	}

}


if( ! function_exists( 'etbi_unread_messages_count' ) ) {

	function etbi_unread_messages_count() {

		$unread_message_count = 0;

		if( is_user_logged_in() ) {

			$user_id = get_current_user_id();

			if( function_exists('bp_is_active') && bp_is_active( 'messages' ) ) {

				$unread_message_count = bp_get_total_unread_messages_count( $user_id );

			}

		}

		return apply_filters( 'etbi_unread_messages_count', $unread_message_count );

	}

}


if( !function_exists( 'etbi_sort_user_links' ) ) {


	function etbi_sort_user_links( $items ) {

		$sorted = array();

		foreach ( $items as $key => $item ) {

			if( ! $item['enabled'] ) {

				continue;

			}
			
			$position = 99;

			if( isset( $item['position'] ) ) {

				$position = (int) $item['position'];

			}

			if( isset( $sorted[ $position ] ) ) {

				$sorted_keys = array_keys( $sorted );

				do {

					$position += 1;

				} while( in_array( $position, $sorted_keys ) );

			}

			$item['key'] = $key;

			$sorted[ $position ] = $item;

		}

		ksort( $sorted );

		return $sorted;

	}


}

if( ! function_exists('etbi_get_logout_link') ) {

	function etbi_get_logout_link() {

		$logout_link = wp_logout_url( apply_filters( 'thim_default_logout_redirect', ( ! empty( $_SERVER['HTTPS'] ) ? "https" : "http" ) . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ) );

		return apply_filters( 'etbi_logout_link', $logout_link );

	}

}


if( ! function_exists( 'etbi_get_user_link_items' ) ) {

	function etbi_get_user_link_items() {

		return apply_filters( 'etbi_user_links', array( 

			'wp-admin'			=> array(
										'icon'		=> array( 'name' => 'tachometer', 'size' => 'sm' ),
										'text'		=> __('Admin', 'etbi'),
										'link'		=> get_admin_url(),
										'enabled'	=> ( current_user_can( 'edit_posts' ) && ! is_admin_bar_showing() ),
										'position'	=> 5
									),

			'profile'			=> array(
										'icon'		=> array( 'name' => 'user', 'size' => 'sm' ),
										'text'		=> __('Profile', 'etbi'),
										'link'		=> etbi_profile_link(),
										'enabled'	=> etbi_is_profile_link_enabled(),
										'position'	=> 10
									),
			'notifications'		=> array(
										'icon'		=> array( 'name' => 'bell', 'size' => 'sm' ),
										'text'		=> __('Notifications', 'etbi'),
										'link'		=> etbi_notifications_link(),
										'enabled'	=> false, //etbi_is_notifications_link_enabled(),
										'position'	=> 20,
										'count'		=> etbi_unread_notifications_count()
									),
			'messages'			=> array(
										'icon'		=> array( 'name' => 'envelope', 'size' => 'sm' ),
										'text'		=> __('Messages', 'etbi'),
										'link'		=> etbi_messages_link(),
										'enabled'	=> etbi_is_messages_link_enabled(),
										'position'	=> 30,
										'count'		=> etbi_unread_messages_count()
									),
			'account'			=> array(
										'icon'		=> array( 'name' => 'cog', 'size' => 'sm' ),
										'text'		=> __('Account', 'etbi'),
										'link'		=> etbi_account_link(),
										'enabled'	=> etbi_is_account_link_enabled(),
										'position'	=> 40
									),
			'logout'			=> array(
										'icon'		=> array( 'name' => 'sign-out', 'size' => 'sm' ),
										'text'		=> __('Log out', 'etbi'),
										'link'		=> etbi_get_logout_link(),
										'enabled'	=> etbi_is_logout_link_enabled(),
										'position'  => 50
									)

		) );

	}

}


if( ! function_exists( 'etbi_get_user_links' ) ) {

	function etbi_get_user_links( $args = array() ) {

		$default = array( 
			'notification_count'	=> false,
			'message_count'			=> false
		 );

		$args = wp_parse_args( $args, $default );

		$container = '';

		$user_links = etbi_sort_user_links( etbi_get_user_link_items() );

		foreach( $user_links as $key => $user_link ) {

			$key = $user_link['key'];

			$user_link = apply_filters( 'etbi_'. $key .'_link_item', $user_link );

			// $icon = etbi_get_svg_icon( array(

			// 	'icon'	=> $user_link['icon']['name'],
			// 	'size'	=> $user_link['icon']['size']

			// ) );

			$icon = '';

			$unread_badge = '';

			if( ( $key == 'notifications' && $user_link['count'] > 0 ) || ( $key == 'messages' && $user_link['count'] > 0 ) ) {

				$count = ( $user_link['count'] ) ? $user_link['count'] : 0;

				$unread_count = ( $count > 99 ) ? '99+' : $count;

				$unread_badge = '<div class="badge badge-md badge-danger badge-inline">'.esc_html( $unread_count ).'</div>';

			}

			$direction = ( isset( $user_link['icon']['direction'] ) ) ? $user_link['icon']['direction'] : 'left';

			switch ( $direction ) {

				case 'left':
					$rol = 'left';
					break;

				case 'right':
					$rol = 'right';
					break;
				
				default:
					$rol = 'left';
					break;

			}

			$icon = '<i class="fa fa-'.$user_link['icon']['name'].' icon-sm icon-'.$rol.'"></i>';

			$item_text = esc_html( $user_link['text'] );

			$item_content = ( $rol == 'left' ) ? $icon . $item_text : $item_text .  $icon;

			$user_meta_item = '<a href="'.esc_url( $user_link['link'] ).'" class="link link-secondary '. esc_attr( $key ) .'-link">'. $item_content .' '. $unread_badge .'</a>';

			$container .= '<span class="'.esc_attr( $key ).' user-dropdown-item">'.$user_meta_item.'</span>';


		}

		return $container;

	}

}

if( ! function_exists('etbi_no_first_or_last_name') ) {

	function etbi_no_first_or_last_name() {

	    if( is_user_logged_in() ) {

	        if( $current_user = get_currentuserinfo() ) {

	            if( empty( $current_user->user_firstname ) || empty( $current_user->user_lastname ) ) {

	                return true;

	            }

	        }

	    }

	    return false;

	}

}

if( ! function_exists('etbi_maybe_display_banner') ) {

	function etbi_maybe_display_banner() {

	    if( etbi_no_first_or_last_name() ) {

	        return true;

	    }

	    return false;

	}

}

if( ! function_exists('etbi_get_user_dropdown') ) {

	function etbi_get_user_dropdown() {

		$current_user = wp_get_current_user();
		$user_link = esc_url( learn_press_user_profile_link() );
		$user_name = $current_user->user_login;
		$first_name = $current_user->user_firstname;
		$last_name = $current_user->user_lastname;
		$user_avatar = get_avatar( get_current_user_id(), 21 );

		if( etbi_unread_notifications_count() > 0 ) {

			$notification_class = 'has-notifications';

		} else {
			$notification_class = 'no-notifications';
		}

		$template_name = 'user-dropdown.php';
		$template_path =  ETBI_DIR . 'inc/widgets/login-popup/';
		$default_path  = ETBI_DIR . 'inc/widgets/login-popup/';
		$template_args = apply_filters( 'etbi_user_dropdown_args', array(
			'current_user' 			=> $current_user,
			'first_name'			=> $first_name,
			'last_name'				=> $last_name,
			'user_link'				=> $user_link,
			'user_name'				=> $user_name,
			'notification_class'	=> $notification_class
		) );

		return etbi_get_template_content( $template_name, $template_args, $template_path, $default_path );

	}

}

if( ! function_exists('etbi_user_dropdown') ) {

	function etbi_user_dropdown() {

		echo etbi_get_user_dropdown();

	}

}

if( ! function_exists('etbi_get_user_registration_form') ) {

	function etbi_get_user_registration_form() {

		$current_user = wp_get_current_user();
		$user_link = esc_url( learn_press_user_profile_link() );
		$user_name = $current_user->user_login;
		$first_name = $current_user->user_firstname;
		$last_name = $current_user->user_lastname;
		$user_avatar = get_avatar( get_current_user_id(), 21 );


		$template_name = 'user-incomplete-registration.php';
		$template_path =  ETBI_DIR . 'inc/widgets/login-popup/';
		$default_path  = ETBI_DIR . 'inc/widgets/login-popup/';
		$template_args = apply_filters( 'etbi_user_dropdown_args', array(
			'current_user' 			=> $current_user,
			'first_name'			=> $first_name,
			'last_name'				=> $last_name,
			'user_link'				=> $user_link,
			'user_name'				=> $user_name,
			'notification_class'	=> $notification_class
		) );

		return etbi_get_template_content( $template_name, $template_args, $template_path, $default_path );

	}

}


if( ! function_exists('etbi_user_registration_form') ) {

	function etbi_user_registration_form() {

		echo etbi_get_user_registration_form();

	}

}

function etbi_render_user_incomplete_registration_modal() {

    $modal_id = 'incomplete_registration';
    $modal_title = __( 'Fill out these fields!', 'etbi' );
    $current_user = wp_get_current_user();

    echo etbi_get_template_content( 'modal.php', array( 'modal_id' => $modal_id, 'modal_title' => $modal_title, 'current_user' => $current_user ), ETBI_DIR . 'inc/templates/', ETBI_DIR . 'inc/templates/' );

}

add_action( 'thim_end_wrapper_container', 'etbi_render_user_incomplete_registration_modal', 10 );

function etbi_user_incomplete_registration_form( $modal_id ) {

    if( $modal_id == 'incomplete_registration' ) {

        $current_user = wp_get_current_user();

        echo etbi_get_template_content( 'incomplete-registration-form.php', array( 'current_user' => $current_user ), ETBI_DIR . 'inc/widgets/login-popup/', ETBI_DIR . 'inc/widgets/login-popup/' );

    }

}

add_action( 'etbi_incomplete_registration_modal_content_area', 'etbi_user_incomplete_registration_form', 10, 1 );

function etbi_process_incomplete_registration_form() {

	if( is_user_logged_in() ) {

		if( ! empty( $_REQUEST ) && $_SERVER['REQUEST_METHOD'] === 'POST' ) {

			$user_id = get_current_user_id();
			$nonce = 'incomplete_registration_form_' . $user_id;

			if( isset( $_POST['incomplete_registration_form'] ) && wp_verify_nonce( $_POST['incomplete_registration_form'], $nonce ) ) { //isset( $_POST[ $nonce ] ) && wp_verify_nonce( $nonce )

				$first_name = ( isset( $_POST['first_name'] ) ) ? trim( ucfirst( $_POST['first_name'] ) ) : '';
				$last_name = ( isset( $_POST['last_name'] ) ) ? trim( ucfirst( $_POST['last_name'] ) ) : '';

				$user_data = apply_filters( 'etbi_user_data', array(

					'ID'			=> $user_id,
					'first_name'	=> $first_name,
					'last_name'		=> $last_name

				) );

				$user_id =  wp_update_user( $user_data );

				if( ! is_wp_error( $user_id ) ) {

					do_action( 'etbi_user_update_userdata', $user_data );

				} else {

					error_log( $user_id->get_error_message() );

				}

			}			

		}

	}

}

etbi_process_incomplete_registration_form();

//add_action( 'wp', 'etbi_process_incomplete_registration_form', 10 );