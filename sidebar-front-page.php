<?php
/**
 * The sidebar containing the tertiary widget area.
 *
 * @package PMP Megaphone
 */

if (!get_theme_mod('pmp_megaphone_underwriter_code') && !is_active_sidebar('sidebar-front-page-1')) {

	return;
}
?>

<div id="sidebar-front-page" class="sidebar widget-area sidebar-with-ad one-fourth" role="complementary">
    <div class="wrap">
        <?php if(get_theme_mod('pmp_megaphone_underwriter_code')): ?>
            <div class="widget widget_text custom_underwriter">
                <h2 class="widget-title"><?php echo get_theme_mod('pmp_megaphone_underwriter_title'); ?></h2>
                <div class="textwidget">
                    <?php echo get_theme_mod('pmp_megaphone_underwriter_code'); ?>
                </div>
            </div>
        <?php endif; ?>
	   <?php dynamic_sidebar( 'sidebar-front-page-1' ); ?>
    </div><!-- .wrap -->
</div><!-- #tertiary-sidebar -->

