<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package PMP Megaphone
 */

if ( ! is_active_sidebar( 'sidebar-1' ) && ! get_theme_mod('pmp_megaphone_underwriter_code')) {
	return;
}
?>

<div id="primary-sidebar" class="sidebar widget-area one-fourth" role="complementary">
    <?php if(!is_404()): ?>
    <aside class="widget widget_pmp_topic_share">
        <h2 class="widget-title">Share</h2>
        <ul class="social-sharing">
            <li class="social-service" id="service-facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook."><i class="icon-facebook"></i></a></li>
            <li class="social-service" id="service-google-plus"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" title="Share on Google Plus"><i class="icon-google-plus"></i></a></li>
            <li class="social-service" id="service-linkedin"><a href="http://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Share on LinkedIn"><i class="with-icon icon-linkedin"></i></a></li>
            <li class="social-service" id="service-twitter"><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Share on Twitter"><i  class="with-icon icon-twitter"></i></a></li>
        </ul>
     <?php endif; ?>
    </aside>
    <?php if(get_theme_mod('pmp_megaphone_underwriter_code')): ?>
        <div class="widget widget_text custom_underwriter">
            <h2 class="widget-title"><?php echo get_theme_mod('pmp_megaphone_underwriter_title'); ?></h2>
            <div class="textwidget">
                <?php echo get_theme_mod('pmp_megaphone_underwriter_code'); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #primary-sidebar -->

