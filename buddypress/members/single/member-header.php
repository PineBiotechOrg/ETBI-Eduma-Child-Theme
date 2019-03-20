<?php
/**
 * BuddyPress - Users Header
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 * @version 3.0.0
 */

?>

<?php

/**
 * Fires before the display of a member's header.
 *
 * @since 1.2.0
 */
do_action( 'bp_before_member_header' ); ?>

<div class="user-tab" >

		<div class="user-info">

			<div class="author-avatar">
				

					<?php bp_displayed_user_avatar( 'type=full' ); ?>

				
			</div><!-- #item-header-avatar -->

			<div id="bp-header-content">

				<div class="member-names">
					<h3 class="author-name"><?php echo bp_core_get_user_displayname( bp_displayed_user_id() ); ?></h3>
					<?php if ( bp_is_active( 'activity' ) && bp_activity_do_mentions() ) : ?>
						<small class="author-mentionname">@<?php bp_displayed_user_mentionname(); ?></small>
					<?php endif; ?>
				</div>

				<?php

				/**
				 * Fires before the display of the member's header meta.
				 *
				 * @since 1.2.0
				 */
				do_action( 'bp_before_member_header_meta' ); ?>

				<div id="item-meta">

					<div id="item-buttons" class="user-action-btns">

						<?php

						/**
						 * Fires in the member header actions section.
						 *
						 * @since 1.2.6
						 */
						do_action( 'bp_member_header_actions' ); ?>

					</div><!-- #item-buttons -->

					<?php

					 /**
					  * Fires after the group header actions section.
					  *
					  * If you'd like to show specific profile fields here use:
					  * bp_member_profile_data( 'field=About Me' ); -- Pass the name of the field
					  *
					  * @since 1.2.0
					  */
					 do_action( 'bp_profile_header_meta' );

					 ?>

				</div><!-- #item-meta -->

			</div><!-- #item-header-content -->
			

		</div>

</div> <!-- .user-tab -->
