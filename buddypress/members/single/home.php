<?php
/**
 * BuddyPress - Members Home
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>

<div id="buddypress">

	<div id="learn-press-user-profile" class="learn-press-user-profile profile-container">

		<?php

		/**
		 * Fires before the display of member home content.
		 *
		 * @since 1.2.0
		 */
		do_action( 'bp_before_member_home_content' ); ?>


			<?php
			/**
			 * If the cover image feature is enabled, use a specific header
			 */

			bp_get_template_part( 'members/single/member-header' );
			?>




		<div class="profile-tabs">
				
			<div id="item-nav" class="group-items">
				<div id="item-nav">
					<div class="member-menu-container item-list-tabs no-ajax" id="object-nav" role="navigation">
						<ul class="lp-bp-profile-nav member-menu">

							<?php bp_get_displayed_user_nav(); ?>

							<?php

							/**
							 * Fires after the display of member options navigation.
							 *
							 * @since 1.2.4
							 */
							do_action( 'bp_member_options_nav' ); ?>

						</ul>
						<button><i class="fa fa-bars"></i> Menu</button>
						<ul class='hidden-links hidden'></ul>
					</div>
				</div><!-- #item-nav -->
			</div>

			<?php

			/**
			 * Fires after the display of a member's header.
			 *
			 * @since 1.2.0
			 */
			do_action( 'bp_after_member_header' ); ?>

			<div id="template-notices" role="alert" aria-atomic="true">
				<?php

				/** This action is documented in bp-templates/bp-legacy/buddypress/activity/index.php */
				do_action( 'template_notices' ); ?>

			</div>

			<div id="item-body">

				<?php

				/**
				 * Fires before the display of member body content.
				 *
				 * @since 1.2.0
				 */
				do_action( 'bp_before_member_body' );

				if ( bp_is_user_activity() || !bp_current_component() ) :
					bp_get_template_part( 'members/single/activity' );

				elseif ( bp_is_user_blogs() ) :
					bp_get_template_part( 'members/single/blogs'    );

				elseif ( bp_is_user_friends() ) :
					bp_get_template_part( 'members/single/friends'  );

				elseif ( bp_is_user_groups() ) :
					bp_get_template_part( 'members/single/groups'   );

				elseif ( bp_is_user_messages() ) :
					bp_get_template_part( 'members/single/messages' );

				elseif ( bp_is_user_profile() ) :
					bp_get_template_part( 'members/single/profile'  );

				elseif ( function_exists( 'bp_is_user_forums' ) && bp_is_user_forums() ) :
					bp_get_template_part( 'members/single/forums'   );

				elseif ( bp_is_user_notifications() ) :
					bp_get_template_part( 'members/single/notifications' );

				elseif ( bp_is_user_settings() ) :
					bp_get_template_part( 'members/single/settings' );

				// If nothing sticks, load a generic template
				else :
					bp_get_template_part( 'members/single/plugins'  );

				endif;

				/**
				 * Fires after the display of member body content.
				 *
				 * @since 1.2.0
				 */
				do_action( 'bp_after_member_body' ); ?>

			</div><!-- #item-body -->

		</div><!-- .profile-tabs (Opening tag in member-header.php) -->

	</div><!-- #learn-press-user-profile (Opening tag in member-header.php) -->

</div><!-- #buddypress -->
