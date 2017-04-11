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

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<div class="tab">
			    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/labs-logo-white.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
			    </div>
			<?php else : ?>
				<div class="tab">
			    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/labs-logo-white.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
			    </div>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<?php
			if ( is_front_page() && is_home() ) : ?>
				<!-- nav in front-page.php -->
			<?php else : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'largo' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</nav> <!-- #site-navigation -->
		<?php
		endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
