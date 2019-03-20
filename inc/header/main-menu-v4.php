<ul class="nav navbar-nav menu-main-menu">
	<?php
    //is there a user to check?
    if ( is_user_logged_in() && function_exists('pmpro_hasMembershipLevel'))
    {
        //check level
        if(pmpro_hasMembershipLevel(array('5','6')))
            wp_nav_menu( array(
                'theme_location' => 'primary-members',
                'container'      => false,
                'items_wrap'     => '%3$s'
            ) );
        else
            wp_nav_menu( array(
                'theme_location' => 'primary-nonmembers',
                'container'      => false,
                'items_wrap'     => '%3$s'
            ) );
    }
    else
    {
        wp_nav_menu( array(
            'theme_location' => 'primary-nonmembers',
            'container'      => false,
            'items_wrap'     => '%3$s'
        ) );
    }
	?>
</ul>
<!--</div>-->