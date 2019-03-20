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

add_action( 'after_setup_theme', 'thim_remove_thim_hooks', 20 );

