<?php
/**
 * The sidebar containing the tertiary widget area.
 *
 * @package PMP Megaphone
 */

if ( ! is_active_sidebar( 'sidebar-archive-1' ) ) {
	return;
}
?>

<div id="archive-sidebar" class="sidebar widget-area one-fourth" role="complementary">
	   <?php dynamic_sidebar( 'sidebar-archive-1' ); ?>
</div><!-- #tertiary-sidebar -->

