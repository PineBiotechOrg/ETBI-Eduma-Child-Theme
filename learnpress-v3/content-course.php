<?php
/**
 * Template for displaying course content within the loop.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/content-course.php
 *
 * @author  ThimPress
 * @package LearnPress/Templates
 * @version 3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();
$user;
$user_course;

if( is_null( $user ) ) {

    $user = LP_Global::user();

}

$theme_options_data = get_theme_mods();
$class = isset($theme_options_data['thim_learnpress_cate_grid_column']) && $theme_options_data['thim_learnpress_cate_grid_column'] ? 'course-grid-'.$theme_options_data['thim_learnpress_cate_grid_column'] : 'course-grid-3';
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$class .= ' lpr_course';
?>

<div id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>

    <?php
    // @deprecated
    do_action( 'learn_press_before_courses_loop_item' );
    ?>

    <div class="course-item">

        <?php
        // @since 3.0.0
        do_action( 'learn-press/before-courses-loop-item' );
        ?>

        <?php
        // @thim
        do_action( 'thim_courses_loop_item_thumb' );
        ?>

        <div class="thim-course-content">
            <?php learn_press_courses_loop_item_instructor(); ?>
            <?php
            //thim_courses_loop_item_author();
            //do_action( 'learn_press_before_the_title' );
            the_title( sprintf( '<h2 class="course-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
            do_action( 'learn_press_after_the_title' );
            ?>
            
            <?php if( ! $user->has_purchased_course( get_the_ID() ) ) { ?>
                <div class="course-meta">
                    <?php learn_press_courses_loop_item_instructor(); ?>
                    <?php thim_course_ratings(); ?>
                    <?php learn_press_courses_loop_item_students(); ?>
                    <?php thim_course_ratings_count(); ?>
                    <?php learn_press_courses_loop_item_price(); ?>
                </div>
            <?php } ?>

            <div class="course-description">
                <?php
                do_action( 'learn_press_before_course_content' );
                echo thim_excerpt(25);
                do_action( 'learn_press_after_course_content' );
                ?>
            </div>

            <?php 

                if( $user->has_purchased_course( get_the_ID() ) ) {

                    if( ! is_null( $user_course ) ) {

                         echo '<small>Enrolled: '. $user_course->get_start_time( 'd M Y' ) .'</small><br/>';


                        if( function_exists('bp_is_active') && function_exists('etbi_time_interval') ) {

                            if( bp_is_user() && $user_course->get_time_interval() ) {

                                echo '<label class="lp-course-progress-heading completed">' . __( 'Completed!', 'etbi' ) . '</label><br />';

                                echo '<small class="course-time">' . etbi_time_interval( $user_course->get_time_interval() ) .'</small>';

                            } else {

                                learn_press_course_progress();

                            }

                        }
                        
                    }

                    if( is_null( $user_course ) && ! bp_is_user() ) {

                        learn_press_course_progress();

                    }

                   

                } else {

                    learn_press_courses_loop_item_price();

                }


            ?>

            <div class="course-readmore">
                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'Read More', 'eduma' ); ?></a>
            </div>
        </div>

        <?php
        // @since 3.0.0
        do_action( 'learn-press/after-courses-loop-item' );
        ?>

    </div>

    <?php
    // @deprecated
    do_action( 'learn_press_after_courses_loop_item' );
    ?>

</div>