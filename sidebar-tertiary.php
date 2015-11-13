<?php
/**
 * The sidebar containing the tertiary widget area.
 *
 * @package PMP Megaphone
 */

if ( ! is_active_sidebar( 'sidebar-tertiary-1' ) ) {
	return;
}
?>

<div id="tertiary-sidebar" class="sidebar widget-area one-fourth" role="complementary">
    <div class="wrap">
	   <?php dynamic_sidebar( 'sidebar-tertiary-1' ); ?>
    </div><!-- .wrap -->
</div><!-- #tertiary-sidebar -->

