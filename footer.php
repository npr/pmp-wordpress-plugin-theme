<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package PMP Megaphone
 */

?>

	</div><!-- #content -->

    <?php get_footer('widgets'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="wrap">
            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>
    		<div class="site-info">
                Powered by
                <?php if (get_theme_mod('station_link')) :?>
                <a href="<?php echo esc_url(get_theme_mod('station_link')) ;?>"><?php echo get_theme_mod('station_callsign') ;?></a> and
                <?php endif; ?>
                <a href="http://www.publicmediaplatform.org" rel="author">The Public Media Platform</a>
    		</div><!-- .site-info -->
        </div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


