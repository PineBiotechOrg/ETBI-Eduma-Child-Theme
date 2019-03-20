<?php
/**
 * Custom functions for LearnPress 3.x
 *
 * @package thim
 */


if ( ! function_exists( 'thim_remove_thim_hooks' ) ) {
	function thim_remove_thim_hooks() {

		remove_action( 'thim_single_course_meta', 'learn_press_course_categories', 15 );
		remove_action( 'thim_single_course_meta', 'thim_course_forum_link', 20 );



	}
}

add_action( 'after_setup_theme', 'thim_remove_thim_hooks', 25 );


function lp_order_received( $return_url, $order ) {

	$order_items = $order->get_items();
	$count = count( $order_items );

	if( $order_items && $count == 1 ) {

		foreach ( $order_items as $key => $item ) {

			$return_url = add_query_arg( 'order', 'success', get_the_permalink( $item['course_id'] ) );

		}

		
	}

	return $return_url;

}

add_filter( 'learn_press_get_return_url', 'lp_order_received', 10, 2 );


function redirect_back_to_purchase( $url ) {

	$purchase = get_the_ID();

	if( get_post_type( $purchase ) != 'lp_course' ) {
		return $url;
	}


	$url = get_the_permalink( $purchase );

	return $url;

}

add_filter( 'thim_default_login_redirect', 'redirect_back_to_purchase', 10 );

