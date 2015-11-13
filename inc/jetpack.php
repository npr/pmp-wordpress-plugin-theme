<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package PMP Megaphone
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function pmp_megaphone_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'pmp_megaphone_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function pmp_megaphone_jetpack_setup
add_action( 'after_setup_theme', 'pmp_megaphone_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function pmp_megaphone_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function pmp_megaphone_infinite_scroll_render
