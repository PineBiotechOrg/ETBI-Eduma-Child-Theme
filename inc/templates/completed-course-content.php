<?php 

	$course 	= ( isset( $course ) ) ? $course : '';
	$course_id 	= ( ! empty( $course ) ) ? $course->get_id() : 0;
	$user = ( isset( $user ) ) ? $user : learn_press_get_current_user();
	$user_id = $user->get_id();
	$finished = $user->has_finished_course( $course_id );
	$title = sprintf( __( 'You have finished this course "%s"', 'learnpress' ), $course->get_title() );
	$certificates_url = '#certificates';

	if( function_exists('bp_is_active') ) {

		$certificates_url = trailingslashit( bp_core_get_userlink( $user_id, false, true ) . 'courses/certificates' );

	}
	

	//$mycred = mycred( 'pass_course' );

	// if ( function_exists( 'mycred_get_types' ) ) {
	// 	$types      = mycred_get_types();
	// 	// $reward     = (array) get_post_meta( $product_id, 'mycred_reward', true );
	// 	// if ( ! empty( $reward ) ) {
	// 	// 	foreach ( $reward as $point_type => $amount ) {
	// 	// 		if ( $amount != '' && array_key_exists( $point_type, $types ) )
	// 	// 			printf( '%s %s', $amount, $types[ $point_type ] );
	// 	// 	}
	// 	// }
	// }
	$points = '+500';

?>

<div class="container-fluid">

	<?php if( $finished ) : ?>

		<div class="row">
			
			<div class="col col-lg-3 col-md-4 col-sm-12 course-data">
				
				    <div class="bo-badge intermediate star">
				        <span class="ribbon"><span><?php _e( 'Points', 'etbi' ); ?></span></span>
				        <div class="progressbar ldBar" data-preset="circle" data-value="<?php print $percent; ?>" data-stroke-width="4" data-stroke="#f16767" data-stroke-trail-width="4" data-stroke-trail="#f3ba49">
				            <h4 class="lpub-total-points"><?php esc_html_e( $points ); ?></h4>
				        </div>
				    </div>

				    <a href="<?php echo esc_url( $certificates_url ); ?>" class="button btn btn-primary learn-press-popup-certificate"><?php esc_html_e( 'View Certificates', 'etbi' ) ?></a>

				    <?php echo thim_course_ratings() ?>

			</div>

			<div class="col col-lg-9 col-md-8 col-sm-12 course-info">
				
				<h4><?php esc_html_e( $title );  ?></h4>

				<?php the_content(); ?>

			</div>

		</div>

	<?php endif; ?>
	
</div>