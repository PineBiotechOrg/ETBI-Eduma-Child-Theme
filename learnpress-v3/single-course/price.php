<?php
/**
 * Template for displaying price of single course.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/single-course/price.php.
 *
 * @author   ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$user   = LP_Global::user();
$course = LP_Global::course();
$class = '';
$class .= ( $course->has_sale_price() ) ? ' has-origin' : '';
if ( $course->is_free() ) {
    $class .= ' free-course';
}

if ( ! $price = $course->get_price_html() ) {
	return;
}
?>

<div class="course-price">

    <div class="value <?php echo $class;?>">

        <?php if ( $course->has_sale_price() ) { ?>

            <span class="course-origin-price"> <?php echo $course->get_origin_price_html(); ?></span>

        <?php } ?>



        <?php if( ! $user->has_purchased_course( $course->get_id() ) ) : echo $price; endif; ?>

        <!-- <?php echo esc_html( $course->get_id() ); ?> -->

         <!-- <?php echo esc_html( $user->get_id() ); ?> -->

    </div>

</div>

