<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( ! isset($_REQUEST['progress_csv']) || empty($_REQUEST['progress_csv']) ) {
	wp_safe_redirect( get_the_permalink() );
	exit;
}

if( ! isset($_REQUEST['_organization_download_csv']) || empty($_REQUEST['_organization_download_csv']) ) {
	wp_safe_redirect( get_the_permalink() );
	exit;
}

if( ! function_exists('bp_is_active') || ! class_exists('myCRED_Query_Log') ) {
	wp_safe_redirect( get_the_permalink() );
	exit;
}

// if( ! wp_verify_nonce($_REQUEST['_organization_download_csv'], '_organization_download_csv') ) {
// 	wp_safe_redirect( get_the_permalink() );
// 	exit;
// }

if( ! is_user_logged_in() ) {
	wp_safe_redirect( get_the_permalink() );
	exit;
}

if( ! etbi_current_user_is_faculty() ) {
	wp_safe_redirect( get_the_permalink() );
	exit;
}

$csv_filename = sanitize_title( $_REQUEST['progress_csv'] );
$download_date = date('d-M-Y');

$csv_filename .= '-' . $download_date;

if( isset($_REQUEST['csv_from']) && isset($_REQUEST['csv_until']) ) {
		$from  = $_REQUEST['csv_from'];
		$until = $_REQUEST['csv_until'];

		if( validateDate( $from ) && validateDate( $until ) ){

			$csv_filename .= '__' . $from . '_to_' . $until;

		}
}

function output_progress_csv() {
	$output = fopen("php://output", "wb");
	$group_members = groups_get_group_members();
	$member_IDs = wp_list_pluck( $group_members['members'], 'ID' );

	fputcsv($output, array('# User ID', 'Email', 'Name', 'Education', 'Server', 'Period Total', 'Overall Total', 'Without Register', 'Sign In Count', 'Disk', 'Big Disk', 'Pipeline Count', 'Pipelines Done',  'RSEM Job Count', 'Pipeline ID List' ) );

	if( isset($_REQUEST['csv_from']) && isset($_REQUEST['csv_until']) ) {

		$from  = $_REQUEST['csv_from'];
		$until = $_REQUEST['csv_until'];

		if( ! $time_range = get_time_range( array( 'from' => $from, 'until' => $until ) ) ) {

			$time_range = get_time_range();

		}

	} else {

		$time_range = get_time_range();

	}

	$from = $time_range['from'];
	$until = $time_range['until'];

	foreach ( $member_IDs as $member_id ) {

		$user_info = get_userdata( $member_id );
		$user_email = $user_info->user_email;
		$user_name = bp_core_get_user_displayname( $member_id );
		$education_points = get_user_education_points( $member_id, array( 'from' => $from, 'until' => $until ) );
		$platform_points = get_user_server_points( $member_id, array( 'from' => $from, 'until' => $until ) );
		$overall_total = mycred_get_users_total_balance( $member_id );
		$period_total = mycred_get_total_by_time( $from . " 00:00:01", $until . " 23:59:59", null, $member_id );
		$registration_amount = 100;
		$no_registration_total = $overall_total - $registration_amount;

		$user_log = etbi_get_user_server_log( $user_email );
		$sign_in_count = $user_log['sign_in_count'];
		$disk = $user_log['disk'];
		$big_disk = $user_log['bigdisk'];
		$pipeline_count = $user_log['pipelinescount'];
		$pipelines_done = count( etbi_get_completed_piplines( $user_log, array( 'from' => $from, 'until' => $until ) ) );
		$pipeline_id_list = implode( PHP_EOL, etbi_get_pipeline_ids( $user_log, array( 'from' => $from, 'until' => $until ) ) );
		$rsem_job_count = count( etbi_get_rsem_pipelines( $user_log, array( 'from' => $from, 'until' => $until ) ) );

		fputcsv( $output, array( $member_id, $user_email, $user_name, $education_points, $platform_points, $period_total, $overall_total, $no_registration_total, $sign_in_count, $disk, $big_disk, $pipeline_count, $pipelines_done, $rsem_job_count, $pipeline_id_list ) );
	}

	fclose($output);
}

header( "Expires: 0" );
header( "cache-Control: no-cache, no-store, must-revalidate" );
header( "Pragma: no-cache" );
header("content-type: text/csv");
header("content-disposition: attachment; filename={$csv_filename}.csv");

output_progress_csv();

exit;