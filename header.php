<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package PMP Megaphone
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pmp_megaphone' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
			<div class="wrap wrap-sml">
				<?php if (get_theme_mod('station_logo')) :?>
				<div class="site-station">
					<a href="<?php echo esc_url(get_theme_mod('station_link')) ;?>"><img src="<?php echo esc_url(get_theme_mod('station_logo')) ;?>" alt="<?php echo get_theme_mod('station_callsign') ;?> logo" title="<?php echo get_theme_mod('station_callsign') ;?>" /></a>
				</div>
				<?php endif; ?>
				<div class="wrap-buttons">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'pmp_megaphone' ); ?></button>
					<button class="search-toggle" aria-controls="primary-search" aria-expanded="false"><?php esc_html_e( 'Search', 'pmp_megaphone' ); ?></button>
				</div>
			</div>
			<div class="wrap wrap-lg">
				<?php if (get_theme_mod('station_logo')) :?>
				<div class="site-station">
					<a href="<?php echo esc_url(get_theme_mod('station_link')) ;?>"><img src="<?php echo esc_url(get_theme_mod('station_logo')) ;?>" alt="<?php echo get_theme_mod('station_callsign') ;?> logo" title="<?php echo get_theme_mod('station_callsign') ;?>" /></a>
				</div>
				<?php endif; ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				<?php if ( is_active_sidebar( 'nav-right-1' ) ) :?>
				<div class="nav-aside pull-right">
					<?php dynamic_sidebar( 'nav-right-1' ); ?>
				</div>
				<?php endif; ?>
			</div>
		</nav><!-- #site-navigation -->
		<div class="site-branding">
			<div class="wrap">
				<div class="site-information">
				<?php if ( get_header_image() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
				</a>
				<?php else : ?>
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<h1 class="site-title on-sub-page"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php endif; ?>
				<?php endif; // End header image check. ?>
				</div>
			</div>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
