<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'etbi_get_template' ) ) {

	function etbi_get_template( $template_name, $args = array(), $template_path = '', $default_path = '' ) {
		if ( $args && is_array( $args ) ) {
			extract( $args );
		}

		$located = etbi_locate_template( $template_name, $template_path, $default_path );

		if ( ! file_exists( $located ) ) {
			_doing_it_wrong( __FUNCTION__, sprintf( '<code>%s</code> does not exist.', $located ), '2.1' );

			return;
		}
		// Allow 3rd party plugin filter template file from their plugin
		$located = apply_filters( 'etbi_get_template', $located, $template_name, $args, $template_path, $default_path );

		do_action( 'etbi_before_template_part', $template_name, $template_path, $located, $args );

		include( $located );

		do_action( 'etbi_after_template_part', $template_name, $template_path, $located, $args );
	}

}

if ( ! function_exists( 'etbi_get_template_content' ) ) {
	function etbi_get_template_content( $template_name, $args = array(), $template_path = '', $default_path = '' ) {
		ob_start();
		etbi_get_template( $template_name, $args, $template_path, $default_path );

		return ob_get_clean();
	}
}

if ( ! function_exists( 'etbi_template_path' ) ) {

	function etbi_template_path() {
		return ETBI_DIR . 'buddypress/groups/templates/';
	}

}

if ( ! function_exists( 'etbi_locate_template' ) ) {

	function etbi_locate_template( $template_name, $template_path = '', $default_path = '' ) {

		if ( ! $template_path ) {
			$template_path = etbi_template_path();
		}

		if ( ! $default_path ) {
			$default_path = ETBI_DIR . 'buddypress/groups/templates/';
		}

		$template = null;
		// Look within passed path within the theme - this is priority
		$template = locate_template(
			array(
				trailingslashit( $template_path ) . $template_name,
				$template_name
			)
		);
		// Get default template
		if ( ! $template ) {
			$template = $default_path . $template_name;
		}

		// Return what we found
		return apply_filters( 'etbi_locate_template', $template, $template_name, $template_path );
	}

}

if ( ! function_exists( 'etbi_get_template_part' ) ) {

	function etbi_get_template_part( $slug, $name = '' ) {
		$template = '';

		// Look in yourtheme/slug-name.php and yourtheme/courses-manage/slug-name.php
		if ( $name ) {
			$template = locate_template( array(
				"{$slug}-{$name}.php",
				etbi_template_path() . "/{$slug}-{$name}.php"
			) );
		}

		// Get default slug-name.php
		if ( ! $template && $name && file_exists( ETBI_DIR . "buddypress/groups/templates/{$slug}-{$name}.php" ) ) {
			$template = ETBI_DIR . "buddypress/groups/templates/{$slug}-{$name}.php";
		}

		// If template file doesn't exist, look in yourtheme/slug.php and yourtheme/courses-manage/slug.php
		if ( ! $template ) {
			$template = locate_template( array( "{$slug}.php", etbi_template_path() . "{$slug}.php" ) );
		}

		// Allow 3rd party plugin filter template file from their plugin
		if ( $template ) {
			$template = apply_filters( 'etbi_get_template_part', $template, $slug, $name );
		}
		if ( $template && file_exists( $template ) ) {
			load_template( $template, false );
		}

		return $template;
	}

}


function validateDate($date, $format = 'Y-m-d') {
    $d = DateTime::createFromFormat($format, $date);
    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
    return $d && $d->format($format) === $date;
}

function get_time_range( $args = array() ) {

	$day = date('w');	

	$defaults = apply_filters( 'etbi_get_default_time_range', array(

		'format'		=> 'Y-m-d',
		'day'			=> date('w'),
		'from'			=> date('Y-m-d', strtotime('-'.($day).' days')),
		'until'			=> date('Y-m-d', strtotime('+'.(6-$day).' days'))

	) );

	$args = wp_parse_args( $args, $defaults );

	if ( ( DateTime::createFromFormat($args['format'], $args['from']) === FALSE ) && ( DateTime::createFromFormat($args['format'], $args['until']) === FALSE ) ) {
  		
		return false;
  		
	}

	$from = $args['from'];
	$until = $args['until'];
	$format = $args['format'];

	$time_range = array( 'from' => $from, 'until' => $until, 'format' => $format );

	return apply_filters( 'etbi_get_time_range', $time_range, $args );

}

function get_points_by_date( $from, $until, $member_ID, $ref = null ) {

	if( ! function_exists('mycred_get_total_by_time') ) {
		return false;
	}
	$begin = new DateTime( $from );
	$end = new DateTime( $until );
	$end = $end->modify( '+1 day' );

	$interval = DateInterval::createFromDateString('1 day');
	$period = new DatePeriod($begin, $interval, $end);
	$average = array();
	$points = array();

	foreach ($period as $date_time) {

	    $date = $date_time->format("Y-m-d");
	    $current_date = $date;
	    $next_date = $date_time->modify( '+1 day' );
		$next_date = $next_date->format( "Y-m-d" );	

	    $points['points'][ $current_date ] = mycred_get_total_by_time( $current_date, $next_date, null, $member_ID );

	    array_push( $average, (int) $points['points'][ $current_date ] );
	}

	if( $count = count( $average ) ) {

		$average = array_filter( $average );
		$average = array_sum( $average ) / $count;

		$points['average'] = round( $average, 1, PHP_ROUND_HALF_UP );

	}	

	return $points;

}

function get_average_points_by_date( $from, $until, $site = 'all' ) {

	if( ! function_exists('mycred_get_total_by_time') ) {
		return false;
	}

	$begin = new DateTime( $from );
	$end = new DateTime( $until );
	$end = $end->modify( '+1 day' );

	$interval = DateInterval::createFromDateString('1 day');
	$period = new DatePeriod($begin, $interval, $end);

	$group_members = groups_get_group_members();
	$member_IDs = wp_list_pluck( $group_members['members'], 'ID' );

	$pipeline_statuses = array( 'pipeline_fresh', 'pipeline_processing', 'pipeline_done' );
	$learner_statuses = array( 'learnpress_learner_take_free_course', 'learnpress_learner_pass_course', 'learnpress_learner_take_paid_course' );

	$averages = array();

	foreach ($period as $date_time) {

	    $date = $date_time->format("Y-m-d");
	    $current_date = $date;

		switch ( $site ) {

			case 'all':
				$args = array(

					'user_id' 	=> array( 'ids' => $member_IDs, 'compare' => 'IN' ),
					'time'		=> array( 'dates' => array( $current_date . " 00:00:01", $current_date . " 23:59:59" ), 'compare' => 'BETWEEN' )

				);
				break;

			case 'edu':
				$args = array(

					'user_id' 	=> array( 'ids' => $member_IDs, 'compare' => 'IN' ),
					'ref'		=> array( 'ids' => $learner_statuses, 'compare' => 'IN' ),
					'time'		=> array( 'dates' => array( $current_date . " 00:00:01", $current_date . " 23:59:59" ), 'compare' => 'BETWEEN' )
					

				);
				break;

			case 'server':
				$args = array(

					'user_id' 	=> array( 'ids' => $member_IDs, 'compare' => 'IN' ),
					'ref'		=> array( 'ids' => $pipeline_statuses, 'compare' => 'IN' ),
					'time'		=> array( 'dates' => array( $current_date . " 00:00:01", $current_date . " 23:59:59" ), 'compare' => 'BETWEEN' )

				);
				break;
			
			default:
				$args = array(

					'user_id' 	=> array( 'ids' => $member_IDs, 'compare' => 'IN' ),
					'time'		=> array( 'dates' => array( $current_date . " 00:00:01", $current_date . " 23:59:59" ), 'compare' => 'BETWEEN' )

				);
				break;
		}

	    $averages[ $current_date ] = get_average_points_for_day( $args );
	}


	return $averages;

}

function get_average_points_for_day( $args = array() ) {

	if( ! function_exists('mycred_get_total_by_time') ) {
		return false;
	}

	$defaults = array(

		'user_id' 	=> null,
		'time'		=> null,

	);

	$args = wp_parse_args( $args, $defaults );

	$log = new myCRED_Query_Log( $args );
	$entries = array();
	$creds = array();
	$data = array( 'average' => 0, 'entries' => array() );

	if( $log->have_entries() ) {

		foreach( $log->results as $entry ) {

			$entries[ $entry->id ] = array( gmdate("Y-m-d H:i:s", $entry->time ), $entry->creds );

			if( array_key_exists( $entry->user_id, $creds ) ) {

				$creds[ $entry->user_id ] = (int) $creds[ $entry->user_id ] + (int) $entry->creds;

			} else {

				$creds[ $entry->user_id ] = (int) $entry->creds;

			}

		}

	}

	if( $count = count( $creds ) ) {

		//$average = array_filter( $creds );
		$average = array_sum( $creds ) / $count;

		$data['average'] = round( $average, 1, PHP_ROUND_HALF_UP );
		$data['creds'] = $creds;
		$data['entries'] = $entries;

	}

	return $data;

}

function get_members_points( $members = array() ) {

	return $members_points;

}


function get_total_members_points_by_time( $args = array() ) {

	$time_range = get_time_range();

	$defaults = array(

		'from'	=> $time_range['from'],
		'until'	=> $time_range['until']

	);

	$args = wp_parse_args( $args, $defaults );

	$points = array();
	$group_members = groups_get_group_members();
	$member_IDs = wp_list_pluck( $group_members['members'], 'ID' );

	foreach ( $member_IDs as $member_ID ) {

		$user_data = get_userdata( $member_ID );
		$user_name = $user_data->display_name;

		if( ! $user_name ) {

			$user_name = $user_data->fullname;

		}

		//mycred_get_users_cred( $member_ID )
		
		$points[ $user_data->ID ] = array( 

			'user_id'		=> $member_ID,
			'user_name'		=> $user_name,
			'credit' 		=> get_points_by_date( $args['from'], $args['until'], $member_ID ),
			'from'			=> $args['from'],
			'to'			=> $args['until']
		);

	}

	return $points;

}

function get_group_log( $args = array(), $site = 'all' ) {

	if( function_exists( 'bp_is_active' ) && class_exists('myCRED_Query_Log') ) {

		$time_range = get_time_range();
		$group_members = groups_get_group_members();
		$member_IDs = wp_list_pluck( $group_members['members'], 'ID' );		

		$defaults = array(
			'group_members'		=> $member_IDs,
			'from'				=> $time_range['from'],
			'until'				=> $time_range['until']

		);

		$args = wp_parse_args( $args, $defaults );

		$pipeline_statuses = array( 'pipeline_fresh', 'pipeline_processing', 'pipeline_done' );
		$learner_statuses = array( 'learnpress_learner_take_free_course', 'learnpress_learner_pass_course', 'learnpress_learner_take_paid_course' );

		switch ( $site ) {

			case 'all':
				$mycred_args = array(

					'user_id'	=> array( 'ids' => $args['group_members'], 'compare' => 'IN' ),
					'time' 		=> array( 'dates' => array( $args['from'] . " 00:00:01", $args['until'] . " 23:59:59" ), 'compare' 	=> 'BETWEEN' )

				);
				break;

			case 'edu':
				$mycred_args = array(

					'user_id'	=> array( 'ids' => $args['group_members'], 'compare' => 'IN' ),
					'ref'		=> array( 'ids' => $learner_statuses, 'compare' => 'IN' ),
					'time' 		=> array( 'dates' => array( $args['from'] . " 00:00:01", $args['until'] . " 23:59:59" ), 'compare' 	=> 'BETWEEN' )					

				);
				break;

			case 'server':
				$mycred_args = array(

					'user_id'	=> array( 'ids' => $args['group_members'], 'compare' => 'IN' ),
					'ref'		=> array( 'ids' => $pipeline_statuses, 'compare' => 'IN' ),
					'time' 		=> array( 'dates' => array( $args['from'] . " 00:00:01", $args['until'] . " 23:59:59" ), 'compare' 	=> 'BETWEEN' )

				);
				break;
			
			default:
				$mycred_args = array(

					'user_id'	=> array( 'ids' => $args['group_members'], 'compare' => 'IN' ),
					'time' 		=> array( 'dates' => array( $args['from'] . " 00:00:01", $args['until'] . " 23:59:59" ), 'compare' 	=> 'BETWEEN' )

				);
				break;
		}

		$log = new myCRED_Query_Log( $mycred_args );
		$entries = array();
		$range = array('min' => 0, 'max' => 0);
		$average = array();

		if( $log->have_entries() ) {

			foreach( $log->results as $entry ) {

				$entries['entries'][ $entry->id ] = $entry;
				array_push( $average, (int) $entry->creds );

			}

		}

		$entries['average'] = 0;
		$entries['range'] = $range;

		if( $count = count( $average ) ) {
			$range = array( 'min' => min( $average ), 'max' => max( $average ) );
			$average = array_filter( $average );
			$average = array_sum( $average ) / $count;

			$entries['average'] = $average;
			$entries['range'] = $range;

		}

		return $entries;

	}


}

function get_user_education_points( $user_id, $args = array() ) {

	$learner_statuses = array( 'learnpress_learner_take_free_course', 'learnpress_learner_pass_course', 'learnpress_learner_take_paid_course' );
	$time_range = get_time_range();

	$defaults = apply_filters( 'etbi_default_edu_points_args', array(

		'from'	=> $time_range['from'],
		'until'	=> $time_range['until']

	) );

	$args= wp_parse_args( $args, $defaults );

	$mycred_args = array(

		'user_id'	=> $user_id,
		'ref'		=> array( 'ids' => $learner_statuses, 'compare' => 'IN' ),
		'time' 		=> array( 'dates' => array( $args['from'] . " 00:00:01", $args['until'] . " 23:59:59" ), 'compare' 	=> 'BETWEEN' ),
		'fields'	=> 'creds'	

	);

	$log = new myCRED_Query_Log( $mycred_args );
	$creds = array();

	if( $log->have_entries() ) {

		foreach ( $log->results as $key => $cred ) {
			
			array_push( $creds, (int) $cred );

		}

	}

	return array_sum( $creds );

}


function get_user_server_points( $user_id, $args = array() ) {

	$pipeline_statuses = array( 'pipeline_fresh', 'pipeline_processing', 'pipeline_done' );
	$time_range = get_time_range();

	$defaults = apply_filters( 'etbi_default_server_points_args', array(

		'from'	=> $time_range['from'],
		'until'	=> $time_range['until'],
		'ref'	=> array( 'ids' => $pipeline_statuses, 'compare' => 'IN' )

	) );

	$args = wp_parse_args( $args, $defaults );

	$mycred_args = array(

		'user_id'	=> $user_id,
		'ref'		=> $args['ref'],
		'time' 		=> array( 'dates' => array( $args['from'] . " 00:00:01", $args['until'] . " 23:59:59" ), 'compare' 	=> 'BETWEEN' ),
		'fields'	=> 'creds'	

	);

	$log = new myCRED_Query_Log( $mycred_args );
	$creds = array();

	if( $log->have_entries() ) {

		foreach ( $log->results as $key => $cred ) {
			
			array_push( $creds, (int) $cred );

		}

	}

	return array_sum( $creds );

}

// function get_server_points_avg( $args = array() ) {

// 	if( function_exists('bp_is_active') && bp_is_active('groups') ) {

// 		$time_range = get_time_range();
// 		$group_members = groups_get_group_members();

// 		$defaults = array(

// 			'from'		=> $time_range['from'],
// 			'until'		=> $time_range['until'],
// 			'members'	=> wp_list_pluck( $group_members['members'], 'ID' )

// 		);

// 		$args = wp_parse_args( $args, $defaults );
// 		$entries = array();
// 		$creds = array();

// 		foreach ( $args['members'] as $member ) {

// 			$entries[ $member ] = array( gmdate("Y-m-d H:i:s", $entry->time ), get_user_server_points( $member, array( 'from' => $args['from'], 'until' => $args['until'] ) ); );
// 			array_push( $creds, (int) $entry->creds );

// 		}

// 	}

// }


function pick_date_range() {

	if( is_user_logged_in() && ( bp_group_is_mod() || bp_group_is_admin() ) ) {

		$from 	= $_POST['from'];
		$until 	= $_POST['until'];
		$formatted_from = date( 'Y-m-d', strtotime( $from ) );
		$formatted_until = date( 'Y-m-d', strtotime( $until ) );
		$group_id = $_POST['group_id'];
		$group = groups_get_group( array( 'group_id' => $group_id ) );
		$group_slug = $group->slug;
 
		if( ( isset( $from ) && $from ) && ( isset( $until ) && $until ) ) {

			if( validateDate( $from ) && validateDate( $until ) ) {

				if( wp_doing_ajax() ) {

				    $group_members = groups_get_group_members( array( 'group_id' => $group_id ) );
				    $member_IDs = wp_list_pluck( $group_members['members'], 'ID' );
				    $group_slug_progress_csv = $group_slug . '-progress';
					$csv_link = wp_nonce_url( add_query_arg( array( 'progress_csv' => $group_slug_progress_csv, 'csv_from' => $formatted_from, 'csv_until' => $formatted_until ), bp_get_group_permalink( $group ) . 'progress/' ), '_download_' . $group_id . '_progress_csv', '_organization_download_csv' );

					wp_send_json( apply_filters( 'etbi_progress_chart_l18n', array(

							'total_points' 		=> get_total_members_points_by_time( array( 'from' => $from, 'until' => $until ) ),
							'group_members' 	=> $group_members,
							'group_log'			=> get_group_log( array( 'from' => $from, 'until' => $until ) ),
							'group_averages'	=> get_average_points_by_date( $from, $until, 'edu' ),
							'server_group_avg'	=> get_average_points_by_date( $from, $until, 'server' ),
							'progress_table'	=> etbi_get_template_content( 'progress-table.php', array( 'members' => $member_IDs, 'from' => $formatted_from, 'until' => $formatted_until, 'csv_link' => $csv_link ) ),
							'from'				=> $from,
							'until'				=> $until

					) ) );

					wp_die();

				}

			}

		}

	}

}

function etbi_curriculum_is_public() {

	if( function_exists('bp_is_active') ) {

		$group_slugs = array(

			'louisiana-biomedical-research-network-lbrn',
			'hands-on-training-in-bioinformatics-and-biomedical-data-science',
			'louisiana-tech-university'	

		);

		if( bp_is_active( 'groups' ) && bp_is_group() ) {

			$group_slug = bp_get_current_group_slug();

			foreach ($group_slugs as $key => $slug) {
				
				if( $group_slug == $slug ) {

					return true;

				}

			}

		}

	}

	return false;

}

function etbi_has_access_to_curriculum() {

	if( function_exists('bp_is_active') ) {

		if( bp_is_active( 'groups' ) && bp_is_group() ) {

			if( is_user_logged_in() ) {

				if( bp_group_is_member() ) {

					return true;

				}

				if( etbi_curriculum_is_public() ) {

					return true;

				}

				return false;

			} else {

				if( etbi_curriculum_is_public() ) {

					return true;

				}

				return false;

			}

		}

	}

}


add_action( 'template_redirect', 'etbi_generate_progress_csv' );

if( ! function_exists('etbi_generate_progress_csv') ) {

	function etbi_generate_progress_csv() {

		if( ! isset($_REQUEST['progress_csv']) || empty($_REQUEST['progress_csv']) ) {
			return;
		}

		if( ! isset($_REQUEST['_organization_download_csv']) || empty($_REQUEST['_organization_download_csv']) ) {
			return;
		}

		if( function_exists('bp_is_active') && bp_is_active('groups') ) {

			if ( bp_is_groups_component() && bp_is_current_action( 'progress' ) ) {

				$template_name = 'group-progress-csv.php';

				return etbi_get_template_content( $template_name );

			}			

		} 

	}

}


if( ! function_exists('etbi_get_user_server_log') ) {

	function etbi_get_user_server_log( $user, $args = array() ) {

		$user_email = '';

		if( is_email( $user ) ) {

			$user_email = $user;

		} else if( is_numeric( $user ) ) {

			$user = get_userdata( $user );
			$user_email = $user->user_email;

		} else if( $user = get_user_by( 'slug', $user ) ) {

			$user_email = $user->user_email;

		} else {

			return false;

		}

		$defaults = apply_filters( 'etbi_user_server_log_default_args', array(

			'pipe_id' 		=> null,
			'field'			=> null,
			'assoc'			=> true, // Whether to return an associative array. See: http://php.net/json_decode
			'api_client'	=> 'pinesystem@pine.com',
			'api_password'	=> 'fdsf45fgdf33fFFd',
			'url'			=> 'http://server.t-bio.info:3000/userlog/' . $user_email,
			'cookie'		=> tempnam( sys_get_temp_dir(), "CURLCOOKIE" )

		) );

		$args = wp_parse_args( $args, $defaults );

		$api_client = $args['api_client'];
		$api_password = $args['api_password'];
		$url = $args['url'];
		$cookie = $args['cookie'];

		$postdata = "user[email]=" . $api_client . "&user[password]=" . $api_password;
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
	    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
	    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
	    curl_setopt($ch, CURLOPT_REFERER, $url);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
	    curl_setopt($ch, CURLOPT_POST, 1);
	    $result = curl_exec($ch);
	    curl_close($ch);

		$user_log = json_decode( $result, $args['assoc'] );

		return $user_log;

	}

}

if( ! function_exists('etbi_get_completed_pipline_count') ) {

	function etbi_get_completed_piplines( $user_log = null, $args = array() ) {

		if( empty( $user_log ) ) {

			return false;

		}

		$defaults = apply_filters( 'etbi_get_completed_pipeline_default_args', array( 

			'from'	=> null,
			'until'	=> null

		 ) );

		$args = wp_parse_args( $args, $defaults );

		$time_range = false;
		$from  = $args['from'];
		$until = $args['until'];

		if( ( isset( $from ) && validateDate( $from ) ) && ( isset( $until ) && validateDate( $until ) ) ) {

			$time_range = get_time_range( array( 'from' => $from, 'until' => $until ) );

		}

		$pipelines = $user_log['Pipelines'];
		$completed_pipelines = [];

		foreach ( $pipelines as $key => $pipeline ) {
			
			if( $pipeline['pipestatus'] == 'done' ) {

				if( ! $time_range ) {

					array_push( $completed_pipelines,  $pipeline );

				} else {

					$pipeline_create_date = date( $time_range['format'], strtotime( $pipeline['created_at'] ) );

					if( $pipeline_create_date >= $from && $pipeline_create_date <= $until ) {

						array_push( $completed_pipelines,  $pipeline );

					}

				}

			}

		}

		return $completed_pipelines;

	}

}

if( ! function_exists('etbi_get_pipeline_ids') ) {

	function etbi_get_pipeline_ids( $user_log = null, $args = array() ) {

		if( empty( $user_log ) ) {

			return false;

		}

		$defaults = apply_filters( 'etbi_get_pipeline_ids_default_args', array( 

			'from'	=> null,
			'until'	=> null

		 ) );

		$args = wp_parse_args( $args, $defaults );

		$time_range = false;
		$from  = $args['from'];
		$until = $args['until'];

		if( ( isset( $from ) && validateDate( $from ) ) && ( isset( $until ) && validateDate( $until ) ) ) {

			$time_range = get_time_range( array( 'from' => $from, 'until' => $until ) );

		}

		$pipelines = $user_log['Pipelines'];
		$pipeline_ids = [];

		foreach ( $pipelines as $key => $pipeline ) {

			if( ! $time_range ) {

				array_push( $pipeline_ids,  $pipeline['pipeid'] );

			} else {

				$pipeline_create_date = date( $time_range['format'], strtotime( $pipeline['created_at'] ) );

				if( $pipeline_create_date >= $from && $pipeline_create_date <= $until ) {

					array_push( $pipeline_ids,  $pipeline['pipeid'] );

				}

			}
			
			

		}

		return $pipeline_ids;	

	}

}

if( ! function_exists('etbi_get_pipelines') ) {

	function etbi_get_rsem_pipelines( $user_log = null, $args = array() ) {

		if( empty( $user_log ) ) {

			return false;

		}

		$defaults = apply_filters( 'etbi_get_rsem_pipeline_default_args', array( 

			'from'	=> null,
			'until'	=> null

		 ) );

		$args = wp_parse_args( $args, $defaults );

		$time_range = false;
		$from  = $args['from'];
		$until = $args['until'];

		if( ( isset( $from ) && validateDate( $from ) ) && ( isset( $until ) && validateDate( $until ) ) ) {

			$time_range = get_time_range( array( 'from' => $from, 'until' => $until ) );

		}

		$pipelines = $user_log['Pipelines'];
		$rsem_pipelines = [];

		foreach ( $pipelines as $key => $pipeline ) {

			if( strpos( $pipeline['pipename'], 'RSEM' ) !== false ) {

				if( ! $time_range ) {

					array_push( $rsem_pipelines,  $pipeline );

				} else {

					$pipeline_create_date = date( $time_range['format'], strtotime( $pipeline['created_at'] ) );

					if( $pipeline_create_date >= $from && $pipeline_create_date <= $until ) {

						array_push( $rsem_pipelines,  $pipeline );

					}				

				}				

			}
			
		}

		return $rsem_pipelines;		

	}

}

if( ! function_exists('etbi_add_inline_checkout_fields') ) {

	function etbi_add_inline_checkout_fields() {

		echo  '<input type="hidden" name="nonce"
               value="'. esc_attr( wp_create_nonce( 'etbi-inline-checkout' ) ) . '"/>
               <input type="hidden" name="lp-ajax"
               value="etbi_inline_checkout"/>';

	}

	add_action( 'learn-press/before-purchase-button', 'etbi_add_inline_checkout_fields' );

}

if( ! function_exists('etbi_inline_checkout') ) {

	function etbi_inline_checkout() {

		sleep( 1 );
		$nonce = ! empty( $_POST['nonce'] ) ? $_POST['nonce'] : null;

		if ( ! wp_verify_nonce( $nonce, 'etbi-inline-checkout' ) ) {
			die ( __( 'You do not have permission to do this action', 'etbi' ) );
		}

		$course_id = ! empty( $_POST['course_id'] ) ? absint( $_POST['course_id'] ) : 0;
		$user_id   = get_current_user_id();


		if ( ( get_post_type( $course_id ) != 'lp_course' ) || ! $user_id ) {
			return;
		}

		//learn_press_is_enable_cart

		if( ! LP()->cart->is_empty() ) {

			LP()->cart->empty_cart();

		}

		remove_action( 'learn-press/checkout-order-review', 'learn_press_order_comment' );

		LP()->cart->add_to_cart( $course_id );

		echo etbi_get_template( 'inline-checkout-order-review.php', array(), ETBI_DIR . 'learnpress-v3/checkout/', ETBI_DIR . 'learnpress-v3/checkout/' );

		die;

	}

	LP_Request_Handler::register_ajax( 'etbi_inline_checkout', 'etbi_inline_checkout' );

}

if( ! function_exists('etbi_render_inline_checkout_form') ) {

	function etbi_render_inline_checkout_form() {

		etbi_get_template( 'inline-checkout-form.php', array(), ETBI_DIR . 'learnpress-v3/checkout/', ETBI_DIR . 'learnpress-v3/checkout/' );

	}

	add_action( 'learn_press_inline_checkout_form', 'etbi_render_inline_checkout_form' );

}

if( ! function_exists('redirect_back_to_course') ) {

	function etbi_redirect_back_to_course( $url ) {

		$course = get_the_ID();

		if( get_post_type( $course ) != 'lp_course' ) {
			return $url;
		}

		$url = get_the_permalink( $course );

		return $url;

	}

	add_action( 'thim_default_login_redirect', 'etbi_redirect_back_to_course' );

}


if( ! function_exists('etbi_add_lesson_pdf') ) {

	function etbi_add_lesson_pdf( $meta_box ) {
		$fields             = $meta_box['fields'];
		$fields[]           = array(
			'name' => esc_html__( 'PDF', 'etbi' ),
			'id'   => '_lp_lesson_pdf_link',
			'type' => 'text',
			'desc' => esc_html__( 'Add a downloadable lesson PDF', 'etbi' ),
		);
		$meta_box['fields'] = $fields;

		return $meta_box;		

	}

}

add_filter( 'learn_press_lesson_meta_box_args', 'etbi_add_lesson_pdf' );