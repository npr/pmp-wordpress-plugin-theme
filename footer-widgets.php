<?php
/**
 * The Sub Footer that contains the widgets for the Sub Footer.
 *
 * @package PMP Megaphone
 */

if ( ! is_active_sidebar( 'footer-widget-1' ) ) {
    return;
}
?>

<div class="parent-wrap" id="sub-footer-wrap">
    <div class="center-block-wrap wrap">
        <div class="sub-footer">
            <div class="footer-widget one-third first-col">
                <?php dynamic_sidebar( 'footer-widget-1' ); ?>
            </div>
            <div class="footer-widget one-third">
                <?php dynamic_sidebar( 'footer-widget-2' ); ?>
            </div>
            <div class="footer-widget one-third">
                <?php if(get_theme_mod('pmp_megaphone_underwriter_code')): ?>
                    <div class="widget widget_text custom_underwriter">
                        <h2 class="widget-title"><?php echo get_theme_mod('pmp_megaphone_underwriter_title'); ?></h2>
                        <div class="textwidget">
                            <?php echo get_theme_mod('pmp_megaphone_underwriter_code'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php dynamic_sidebar( 'footer-widget-3' ); ?>
            </div>
        </div><!-- .sub-footer -->
    </div><!-- .wrap -->
</div><!-- #sub-footer-wrap -->
