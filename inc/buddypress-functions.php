<?php

function etbi_current_user_is_faculty() {

	if( bp_group_is_mod() || bp_group_is_admin() ) {

		return true;

	}

	return false;

}

function add_groups_progress_page(){

    $groups_link = bp_get_group_permalink( groups_get_current_group() );

    bp_core_new_subnav_item( array(

       'name' => __( 'Progress', 'etbi' ),
       'slug' => 'progress',
       'parent_url' => $groups_link,
       'parent_slug' => bp_get_current_group_slug(),
       'screen_function' => 'render_progress_tab',
       'user_has_access' => etbi_current_user_is_faculty(),
       'position' => 15 

   ) );

}

add_action( 'bp_setup_nav', 'add_groups_progress_page');

function render_progress_tab() {

    add_action( 'bp_template_content', 'group_progress_content' );

    bp_core_load_template( apply_filters( 'bp_core_template_plugin', 'groups/single/plugins' ) );
}


function group_progress_content() { 

	if ( bp_is_groups_component() && bp_is_current_action( 'progress' ) ) {

		$group_slug = bp_get_group_slug();
    $group_id = bp_get_group_id();
    $group_members = groups_get_group_members();
    $member_IDs = wp_list_pluck( $group_members['members'], 'ID' );
    $group_slug_progress_csv = $group_slug . '-progress';
		$template_name = 'group-progress.php';
    $time = get_time_range();
    $args = array(
      'from'      => $time['from'],
      'until'     => $time['until'],
      'members'   => $member_IDs,
      'csv_link'  => wp_nonce_url( add_query_arg( 'progress_csv', $group_slug_progress_csv, get_the_permalink() ), '_download_' . $group_id . '_progress_csv', '_organization_download_csv' )
    );
		echo etbi_get_template_content( $template_name, $args );

	}

}



function add_groups_curriculum_page(){

    $groups_link = bp_get_group_permalink( groups_get_current_group() );

    bp_core_new_subnav_item( array(

       'name' => __( 'Curriculum', 'etbi' ),
       'slug' => 'curriculum',
       'parent_url' => $groups_link,
       'parent_slug' => bp_get_current_group_slug(),
       'screen_function' => 'render_curriculum_tab',
       'user_has_access' => etbi_has_access_to_curriculum(),
       'position' => 15 

   ) );

}

add_action( 'bp_setup_nav', 'add_groups_curriculum_page');

function render_curriculum_tab() {

    add_action( 'bp_template_content', 'group_curriculum_content' );

    bp_core_load_template( apply_filters( 'bp_core_template_plugin', 'groups/single/plugins' ) );
}



function group_curriculum_content() { 

	if ( bp_is_groups_component() && bp_is_current_action( 'curriculum' ) ) {
		$group_slug = bp_get_group_slug();
		$template_name = $group_slug . '-curriculum.php';

		echo etbi_get_template_content( $template_name );
	}
}


function add_groups_assignments_page(){

    $groups_link = bp_get_group_permalink( groups_get_current_group() );

    bp_core_new_subnav_item( array(

       'name' => __( 'Assignments', 'etbi' ),
       'slug' => 'assignments',
       'parent_url' => $groups_link,
       'parent_slug' => bp_get_current_group_slug(),
       'screen_function' => 'render_assignments_tab',
       'user_has_access' => etbi_current_user_is_faculty(),
       'position' => 15 

   ) );

}

add_action( 'bp_setup_nav', 'add_groups_assignments_page');

function render_assignments_tab() {

    add_action( 'bp_template_content', 'group_assignments_content' );

    bp_core_load_template( apply_filters( 'bp_core_template_plugin', 'groups/single/plugins' ) );
}



function group_assignments_content() { 

	?>

		<h2><?php _e( 'Student Assignments', 'eduma' ); ?></h2>
		<div id="message", class="info">
			<p><?php _e( 'No students have submitted an assignment as of yet.', 'eduma' ); ?></p>
		</div>

	<?php


}


function lp_bp_profile_link( $profile_link, $user_id, $tab ) {

  if( function_exists( 'bp_is_active' ) ) {

    if( get_current_user_id() === $user_id ) {

      $profile_link = bp_core_get_user_domain();

    } else {
      $profile_link = bp_core_get_userlink( $user_id, false, true );

    }

  }

  return $profile_link;

}

add_filter( 'learn-press/user-profile-url', 'lp_bp_profile_link', 10, 3 );  
add_filter( 'learn_press_user_profile_link', 'lp_bp_profile_link', 10, 3 );


function add_bbpress_class_to_group_forum_page( $classes ) {

	if( ! function_exists('bp_is_active') ) {
		return $classes;		
	}

	if ( ! bp_is_groups_component() && ! bp_is_current_action( 'forum' ) ) {
		return $classes;
	}
	
	$classes[] = 'bbpress';

	return $classes;

}

add_filter( 'body_class', 'add_bbpress_class_to_group_forum_page' );

function home_content() { 

	if ( bp_is_groups_component() && bp_is_group_home() ) {
		$group_slug = bp_get_group_slug();

		$template_name = $group_slug . '-header.php';

		echo etbi_get_template_content( $template_name );


	}
}

add_action('bp_before_group_body', 'home_content');



function add_groups_faculty_page(){

    $groups_link = bp_get_group_permalink( groups_get_current_group() );

    bp_core_new_subnav_item( array(

       'name' => __( 'Faculty', 'etbi' ),
       'slug' => 'faculty',
       'parent_url' => $groups_link,
       'parent_slug' => bp_get_current_group_slug(),
       'screen_function' => 'render_faculty_tab',
       'user_has_access' => true, //bp_group_is_member(),
       'position' => 25 

   ) );

}

add_action( 'bp_setup_nav', 'add_groups_faculty_page');


function render_faculty_tab() {

    add_action( 'bp_template_content', 'group_faculty_content' );

    bp_core_load_template( apply_filters( 'bp_core_template_plugin', 'groups/single/plugins' ) );
}

function group_faculty_content() {

	if ( bp_is_groups_component() && bp_is_current_action( 'faculty' ) ) {
		$group_slug = bp_get_group_slug();
		$template_name = 'group-faculty.php';


		echo etbi_get_template_content( $template_name );
	}

}

function etbi_show_notifications_button( ) {

  if( bp_is_my_profile() ) {

    $user_id = bp_loggedin_user_id();

    $link = esc_url( bp_get_notifications_permalink( $user_id ) );

    $unread_notifications_count = bp_notifications_get_unread_notification_count( $user_id );

    $unread_notifications_count = ( $unread_notifications_count > 99 ) ? '99+' : $unread_notifications_count;

    $notifications_badge = ( $unread_notifications_count ) ? '<div class="badge badge-md badge-top-right badge-danger">'.$unread_notifications_count.'</div>' : '';

    echo '<a href="'.$link.'" class="btn btn-link user-action-btn"><i class="fa fa-bell"></i>'.$notifications_badge.'</a>';

  }
}

add_action('bp_member_header_actions', 'etbi_show_notifications_button');



function etbi_show_messages_button( ) {

  if( bp_is_my_profile() && bp_is_active('messages') ) {

    $user_id = bp_loggedin_user_id();

    $link = esc_url( bp_loggedin_user_domain().bp_get_messages_slug() );

    $unread_messages_count = bp_get_total_unread_messages_count( $user_id );

    $unread_messages_count = ( $unread_messages_count > 99 ) ? '99+' : $unread_messages_count;

    $messages_badge = ( $unread_messages_count ) ? '<div class="badge badge-md badge-top-right badge-danger">'.$unread_messages_count.'</div>' : '';


    echo '<a href="'.$link.'" class="btn btn-link user-action-btn"><i class="fa fa-envelope"></i>'.$messages_badge.'</a>';

  }
}

add_action('bp_member_header_actions', 'etbi_show_messages_button');

function etbi_show_settings_button( ) {

  if( bp_is_my_profile() && bp_is_active('settings') ) {

    $link = esc_url( bp_loggedin_user_domain().bp_get_settings_slug() );

    echo '<a href="'.$link.'" class="btn btn-link user-action-btn"><i class="fa fa-cog"></i></a>';

  }
}

add_action('bp_member_header_actions', 'etbi_show_settings_button');


function etbi_organization_activity_header() {

  if( function_exists('bp_is_active') ) {

    if( bp_is_active() && bp_is_group() ) {

      echo '<h2 class="organization-activity-header">'.__( 'Organization Updates' ).'</h2>';

    }

  }

}

add_action( 'bp_group_activity_syndication_options', 'etbi_organization_activity_header' );