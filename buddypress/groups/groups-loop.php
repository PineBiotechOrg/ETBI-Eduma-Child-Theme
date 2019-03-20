<?php
/**
 * BuddyPress - Groups Loop
 *
 * Querystring is set via AJAX in _inc/ajax.php - bp_legacy_theme_object_filter().
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 * @version 3.0.0
 */

?>

<?php

/**
 * Fires before the display of groups from the groups loop.
 *
 * @since 1.2.0
 */
do_action( 'bp_before_groups_loop' ); ?>

<?php if ( bp_get_current_group_directory_type() ) : ?>
	<p class="current-group-type"><?php bp_current_group_directory_type_message() ?></p>
<?php endif; ?>

<?php if ( bp_has_groups( bp_ajax_querystring( 'groups' ) ) ) : ?>

	<div id="pag-top" class="pagination">

		<div class="pag-count" id="group-dir-count-top">

			<?php bp_groups_pagination_count(); ?>

		</div>

		<div class="pagination-links" id="group-dir-pag-top">

			<?php bp_groups_pagination_links(); ?>

		</div>

	</div>

	<?php

	/**
	 * Fires before the listing of the groups list.
	 *
	 * @since 1.1.0
	 */
	do_action( 'bp_before_directory_groups_list' ); ?>

	<div id="groups-list" class="thim-course-grid" aria-live="assertive" aria-atomic="true" aria-relevant="all">

	<?php while ( bp_groups() ) : bp_the_group(); ?>

		<div  id="group-<?php echo bp_get_group_id(); ?>" <?php bp_group_class( array('course-grid-3', 'lpr_course') ); ?>>
		    <div class="course-item">

		        <div class="course-thumbnail">
		                  <?php // Get the Cover Image
		                    $group_cover_image_url = bp_attachments_get_attachment('url', array(
		                      'object_dir' => 'groups',
		                      'item_id' => bp_get_group_id(),
		                    ));
		                  ?>
		            <a class="thumb" href="<?php bp_group_permalink(); ?>">
		                <img src="<?php echo $group_cover_image_url; ?>" alt="<?php _e( 'Org' ); ?>" title="ML-course-Georgetown" width="400" height="320">
		            </a>
		            <a class="course-readmore" href="<?php bp_group_permalink(); ?>"><?php _e( 'View Organization', 'eduma' ); ?></a>
		        </div>

		        <div class="thim-course-content">
		            
		            <?php if ( ! bp_disable_group_avatar_uploads() ) : ?>
		                <div class="course-author" itemscope="" itemtype="http://schema.org/Person">
		                    <a href="<?php bp_group_permalink(); ?>">
		                        <?php bp_group_avatar( 'type=thumb&width=70&height=70' ); ?>
		                    </a> 
		                </div>
		            <?php endif; ?>           

		            <h2 class="course-title">
		                <?php bp_group_link(); ?>
		            </h2>

		                      

		            <div class="course-meta">                
		                <div class="course-author" itemscope="" itemtype="http://schema.org/Person">
		                    <a href="<?php bp_group_permalink(); ?>">
		                        <?php bp_group_avatar( 'type=thumb&width=70&height=70' ); ?>
		                    </a> 
		                </div>                        
		                                
		                <div class="course-students">
		                    <label><?php _e( 'Members', 'eduma' ); ?></label>
		                    <div class="value">
		                        <i class="fa fa-group"></i>
		                        <?php bp_group_member_count(); ?>  
		                    </div>
		                    <span><?php _e( 'members', 'eduma' ); ?></span>
		                </div>
		                
		                <div class="course-comments-count">
		                    <div class="value">
		                        <i class="fa fa-calendar"></i>                        
		                        <span class="activity" data-livestamp="<?php bp_core_iso8601_date( bp_get_group_last_active( 0, array( 'relative' => false ) ) ); ?>"><?php printf( __( 'active %s', 'buddypress' ), bp_get_group_last_active() ); ?></span>
		                    </div>
		                </div>  

		<!--                 <div class="course-price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
		                    <div class="value  has-origin" itemprop="price">
		                        <span class="course-origin-price">$125.00</span>
		                                $45.00        
		                    </div>
		                    <meta itemprop="priceCurrency" content="USD">
		                </div>  -->           
		            </div>

		            <div class="course-description">
		                <p><?php bp_group_description_excerpt(); ?></p>            
		            </div>
		                    
		<!--             <div class="course-price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
		                <div class="value  has-origin" itemprop="price">
		                    <span class="course-origin-price">$125.00</span>
		                    $45.00        
		                </div>
		                <meta itemprop="priceCurrency" content="USD">
		            </div>    -->         
		            <div class="course-readmore">
		                <a href="<?php bp_group_permalink(); ?>"><?php _e( 'View Organization' ); ?></a>
		            </div>


			        <div class="action">

			            <?php

			            /**
			             * Fires inside the action section of an individual group listing item.
			             *
			             * @since 1.1.0
			             */
			            do_action( 'bp_directory_groups_actions' ); ?>

			        </div>
		        </div>

		    </div>   
		</div>

	<?php endwhile; ?>

	</div>

	<?php

	/**
	 * Fires after the listing of the groups list.
	 *
	 * @since 1.1.0
	 */
	do_action( 'bp_after_directory_groups_list' ); ?>

	<div id="pag-bottom" class="pagination">

		<div class="pag-count" id="group-dir-count-bottom">

			<?php bp_groups_pagination_count(); ?>

		</div>

		<div class="pagination-links" id="group-dir-pag-bottom">

			<?php bp_groups_pagination_links(); ?>

		</div>

	</div>

<?php else: ?>

	<div id="message" class="info">
		<p><?php _e( 'There were no groups found.', 'buddypress' ); ?></p>
	</div>

<?php endif; ?>

<?php

/**
 * Fires after the display of groups from the groups loop.
 *
 * @since 1.2.0
 */
do_action( 'bp_after_groups_loop' );
