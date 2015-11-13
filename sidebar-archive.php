<?php
/**
 * The sidebar containing the tertiary widget area.
 *
 * @package PMP Megaphone
 */

if ( ! is_active_sidebar( 'sidebar-archive-1' ) && ! get_theme_mod('pmp_megaphone_underwriter_code')) {
	return;
}
?>

<div id="archive-sidebar" class="sidebar sidebar-with-ad widget-area one-fourth" role="complementary">
        <?php if(get_theme_mod('pmp_megaphone_underwriter_code')): ?>
            <div class="widget widget_text custom_underwriter">
                <h2 class="widget-title"><?php echo get_theme_mod('pmp_megaphone_underwriter_title'); ?></h2>
                <div class="textwidget">
                    <?php echo get_theme_mod('pmp_megaphone_underwriter_code'); ?>
                </div>
            </div>
        <?php endif; ?>
	   <?php dynamic_sidebar( 'sidebar-archive-1' ); ?>
</div><!-- #tertiary-sidebar -->

