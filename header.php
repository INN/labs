<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Largo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'largo' ); ?></a>

	<nav id="global-navigation" class="global-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'global', 'menu_id' => 'global-menu' ) ); ?>
	</nav>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<!-- <?php if ( is_front_page() && is_home() ) : ?><?php else : ?> <?php endif; ?>-->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="tab">
			    	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/labs-logo-white.png" alt="<?php bloginfo( 'name' ); ?>" />
			    </a>
			    <nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><svg version="1.1"x="0px" y="0px"
	 viewBox="0 0 103 71" style="enable-background:new 0 0 103 71;">
<rect class="st0" width="103" height="15"/>
<rect y="28" class="st0" width="103" height="15"/>
<rect y="56" class="st0" width="103" height="15"/>
</svg></button>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</nav> <!-- #site-navigation -->
				<nav id="mobile-nav">

					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<svg version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 83 83.4" style="enable-background:new 0 0 83 83.4;">
						<rect x="-9.8" y="34.2" transform="matrix(0.7071 0.7071 -0.7071 0.7071 41.7193 -17.2807)" class="st0" width="103" height="15"/>
						<rect x="-9.8" y="34.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -17.2807 41.7193)" class="st0" width="103" height="15"/>
						</svg>
					</button>

				</nav>

		</div><!-- .site-branding -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
