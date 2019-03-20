<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package thim
 */
?><!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>">
	<?php wp_head(); ?>
<script type="text/javascript">
jQuery(document).ready(function(){
	//jQuery('.lp_width_lession_9771').closest('.learn-press-content-item-container').addClass('increase_width');
	jQuery('.learn-press-content-item-container').addClass('increase_width');
        jQuery('.learn-press-content-item-container').find('img, iframe, video').parent().css("text-align", "center" );
//jQuery('.learn-press-content-item-container').find('img, iframe, video').parent().parent().css("text-align", "center" );
})
</script>
<style type="text/css">
	.increase_width{
		width: 1000px !important;
		padding-left: 30px;
		padding-right: 30px;
	}
.user-info .author-avatar img.avatar {
    width: 150px;
}
</style>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.lp_width_lession_7151').closest('.learn-press-content-item-container').addClass('increase_width');
})


</script>

<!-- <script>
  !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
  arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
  d.src='//d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
  insertBefore(d,q)}(window,document,'script','_gs');

  _gs('GSN-238978-D');
</script> -->

<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
<meta name="p:domain_verify" content="1670c4d1ed1e6f65d9101c9b1afb8677"/>
</head>
<body <?php body_class(); ?> id="thim-body">
<?php
$attributes = array();
$doctype = 'html';
if ( function_exists( 'is_rtl' ) && is_rtl() )
	$attributes[] = 'dir="rtl"';

if ( $lang = get_bloginfo('language') ) {
	if ( get_option('html_type') == 'text/html' || $doctype == 'html' )
		$attributes[] = "lang=\"$lang\"";

	if ( get_option('html_type') != 'text/html' || $doctype == 'xhtml' )
		$attributes[] = "xml:lang=\"$lang\"";
}

?>
<?php do_action( 'thim_before_body' ); ?>

<!-- Mobile Menu-->
<?php if ( wp_is_mobile() ): ?>
	<div class="mobile-menu-wrapper">
		<div class="mobile-menu-inner">
			<div class="icon-wrapper">
				<div class="menu-mobile-effect navbar-toggle close-icon" data-effect="mobile-effect">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
			</div>
			<nav class="mobile-menu-container mobile-effect">
				<?php get_template_part( 'inc/header/menu-mobile' ); ?>
			</nav>
		</div>
	</div>
<?php endif; ?>

<div id="wrapper-container" class="wrapper-container">
	<div class="content-pusher">
		<header id="masthead" class="site-header affix-top<?php thim_header_class(); ?>">
			<?php
			//Toolbar
			if ( get_theme_mod( 'thim_toolbar_show', true ) ) {
				get_template_part( 'inc/header/toolbar' );
			}

			//Header style
			if ( get_theme_mod( 'thim_header_style', 'header_v1' ) ) {
				get_template_part( 'inc/header/' . get_theme_mod( 'thim_header_style', 'header_v1' ) );
			}

			?>
		</header>
		
		<div id="main-content">