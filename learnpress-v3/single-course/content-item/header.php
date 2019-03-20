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

<div id="course-item-content-header">

    <?php if( $prev_item ) { ?>

        <a href="<?php echo $prev_item->get_permalink(); ?>" class="prev-content-item"></a>

    <?php } ?>

    <div id="popup-header" <?php if( $prev_item ) { echo 'class="has-prev-item"'; } ?>>
        <div class="courses-searching">
            <input type="text" value="" name="s" placeholder="<?php esc_attr_e( 'Search courses', 'eduma' ) ?>" class="thim-s form-control courses-search-input" autocomplete="off" />
            <input type="hidden" value="course" name="ref" />
            <button type="submit"><i class="lnr lnr-magnifier"></i></button>
            <span class="widget-search-close"></span>
            <ul class="courses-list-search"></ul>
        </div>

        <a href="<?php echo $course->get_permalink(); ?>" class="back_course"><i class="lnr lnr-cross"></i></a>

        <a class="toggle-content-item" href=""></a>

        <?php if( $next_item ) { ?>

            <a href="<?php echo $next_item->get_permalink(); ?>" class="next-content-item"></a>

        <?php } ?>

        <a href="#zoom" id="zoom-toggle" class="zoom-content-item" title="Magnify Images" data-enabled="0"><i class="lnr lnr-plus-circle"></i></a>

        <a href="<?php echo esc_url( $lesson_download_link ) ?>" id="download-icon" class="download-content-item" title="Download Lesson" <?php if( $downloadable ) { echo esc_attr('download'); } ?> ><i class="lnr lnr-download"></i></a>

        <?php 

            if( comments_open( $course_item->get_id() ) ) {

                echo '<a href="#comments" id="comment-toggle" class="comment-content-item"><i class="lnr lnr-comments"></i></a>';

            }

        ?>
    </div>

    <?php learn_press_course_progress(); ?>

    <!-- <progress value="0" class="course-item"></progress> -->

</div>
