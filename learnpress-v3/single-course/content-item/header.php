<?php
/**
 * Template for displaying header of single course popup.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/single-course/header.php.
 *
 * @author  ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$course = LP_Global::course();
$course_item = LP_Global::course_item();
$user = LP_Global::user();
$next_item = $prev_item = false;
$can_view_item = $user->can_view_item( $course_item->get_id(), $course->get_id() );
$lesson_download_link   = get_post_meta( $course_item->get_id(), '_lp_lesson_pdf_link', true );
$downloadable = false;

if ( $next_id = $course->get_next_item() ) {
    $next_item = $course->get_item( $next_id );
}
if ( $prev_id = $course->get_prev_item() ) {
    $prev_item = $course->get_item( $prev_id );
}
if( ! empty( $lesson_download_link ) && ! $course_item->is_blocked() && $can_view_item ) {

    $downloadable = true;
    $lesson_download_link = $lesson_download_link;

} else {

    $lesson_download_link = '#download';

}

?>

<div id="course-item-content-header" class="course-item-nav">

    <?php if ( is_active_sidebar( 'toolbar' ) ) : ?>
        <div id="toolbar" class="toolbar">
            <div class="<?php echo get_theme_mod( 'thim_header_size', 'default' ) == 'full_width' ? 'header_full' : 'container';?>">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="toolbar-container">
                            <?php dynamic_sidebar( 'toolbar' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--End/div#toolbar-->
    <?php
    endif;?>

    <a class="toggle-content-item" href=""><i class="lnr lnr-menu"></i></a>

    <div id="popup-header">
        
        <div class="courses-searching">
            <input type="text" value="" name="s" placeholder="<?php esc_attr_e( 'Search courses', 'eduma' ) ?>" class="thim-s form-control courses-search-input" autocomplete="off" />
            <input type="hidden" value="course" name="ref" />
            <button type="submit"><i class="lnr lnr-magnifier"></i></button>
            <a href="#close-search" id="close-search-btn" class="close-search" title="Stop Searching" data-enabled="0"><i class="lnr lnr-cross-circle"></i></a>
            <span class="widget-search-close"></span>
            <ul class="courses-list-search"></ul>
        </div>

    </div>

    <ul id="action-menu">
        <?php if( $prev_item ) { ?>

        <li><a href="<?php echo $prev_item->get_permalink(); ?>" class="prev-content-item"><i class="lnr lnr-chevron-left"></i> <span class="descriptive-text"><?php echo esc_html( __( 'Previous', 'etbi' ) ); ?></span></a></li>

        <?php } ?>

        <?php if( $next_item ) { ?>

        <li><a href="<?php echo $next_item->get_permalink(); ?>" class="next-content-item"><i class="lnr lnr-chevron-right"></i> <span class="descriptive-text"><?php echo esc_html( __( 'Next', 'etbi' ) ); ?></span></a></li>

        <?php } ?>

        <?php if( comments_open( $course_item->get_id() ) ) { ?>

        <li><a href="#comments" id="comment-toggle" class="comment-content-item"><i class="lnr lnr-bubble"></i> <span class="descriptive-text"><?php echo esc_html( __( 'Comments', 'etbi' ) ); ?></span></a></li>

        <?php } ?>

        <li><a href="#zoom" id="zoom-toggle" class="zoom-content-item" title="Magnify Images" data-enabled="0"><i class="lnr lnr-plus-circle"></i><span class="descriptive-text"><?php echo esc_html( __( 'Zoom Images', 'etbi' ) ); ?></span></a></li>
        <li><a href="<?php echo esc_url( $lesson_download_link ) ?>" id="download-icon" class="download-content-item" title="Download" <?php if( $downloadable ) { echo esc_attr('download'); } ?> data-enabled="0"><i class="lnr lnr-download"></i> <span class="descriptive-text"><?php echo esc_html( __( 'Download', 'etbi' ) ); ?></span></a></li>
        <li><a href="#close-course-item-content-header" id="close-menu-cog" class="close-action-menu" title="Close Menu" data-enabled="0"><i class="lnr lnr-cog"></i></a></li>
        <li><a href="#course-item-content-header" id="open-menu-cog" class="open-action-menu" title="Open Menu" data-enabled="0"><i class="lnr lnr-cog"></i></a></li>
    </ul>

    <a href="<?php echo $course->get_permalink(); ?>" class="back_course"><i class="lnr lnr-cross"></i></a>

    <?php learn_press_course_progress(); ?>

</div>
