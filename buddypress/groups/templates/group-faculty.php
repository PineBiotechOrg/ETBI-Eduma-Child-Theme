	<div class="bp-widget group-members-list group-mods-list">

		<?php if ( bp_group_has_members( array( 'per_page' => 15, 'group_role' => array( 'mod' ), 'page_arg' => 'mlpage-mod' ) ) ) : ?>

			<?php if ( bp_group_member_needs_pagination() ) : ?>

				<div class="pagination no-ajax">

					<div id="member-count" class="pag-count">
						<?php bp_group_member_pagination_count(); ?>
					</div>

					<div id="member-admin-pagination" class="pagination-links">
						<?php bp_group_member_admin_pagination(); ?>
					</div>

				</div>

			<?php endif; ?>

			<ul id="mods-list" class="item-list">

				<?php while ( bp_group_members() ) : bp_group_the_member(); ?>
					<li>
						<div class="item-avatar">
							<?php bp_group_member_avatar_thumb(); ?>
						</div>

						<div class="item">
							<div class="item-title">
								<?php bp_group_member_link(); ?>
							</div>
							<p class="joined item-meta">
								<?php bp_group_member_joined_since(); ?>
							</p>
							<?php

							/**
							 * Fires inside the item section of a member admin item in group management area.
							 *
							 * @since 1.1.0
							 * @since 2.7.0 Added $section parameter.
							 *
							 * @param $section Which list contains this item.
							 */
							do_action( 'bp_group_manage_members_admin_item', 'admins-list' ); ?>
						</div>

						<div class="action view-profile">
							<a class="button" href="<?php echo bp_core_get_user_domain( bp_get_member_user_id() ); ?>"><?php _e( 'View Profile', 'buddypress' ); ?></a>

							<?php

							/**
							 * Fires inside the action section of a member admin item in group management area.
							 *
							 * @since 2.7.0
							 *
							 * @param $section Which list contains this item.
							 */
							do_action( 'bp_group_manage_members_admin_actions', 'mods-list' ); ?>

						</div>
					</li>
				<?php endwhile; ?>

			</ul>

			<?php if ( bp_group_member_needs_pagination() ) : ?>

				<div class="pagination no-ajax">

					<div id="member-count" class="pag-count">
						<?php bp_group_member_pagination_count(); ?>
					</div>

					<div id="member-admin-pagination" class="pagination-links">
						<?php bp_group_member_admin_pagination(); ?>
					</div>

				</div>

			<?php endif; ?>

		<?php else: ?>

			<div id="message" class="info">
				<p><?php _e( 'No group moderators were found.', 'buddypress' ); ?></p>
			</div>

		<?php endif; ?>
	</div>