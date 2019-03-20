<?php
/**
 * BuddyPress - Groups overview
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 * @version 3.0.0
 */

/**
 * Fires before the display of content for plugins using the BP_Group_Extension.
 *
 * @since 1.2.0
 */
do_action( 'bp_before_group_overview_template' ); ?>

<h1>BLAH BLAH</h1>

<?php

/**
 * Fires and displays content for plugins using the BP_Group_Extension.
 *
 * @since 1.0.0
 */
do_action( 'bp_template_content' ); ?>

<?php

/**
 * Fires after the display of content for plugins using the BP_Group_Extension.
 *
 * @since 1.2.0
 */
do_action( 'bp_after_group_overview_template' );
