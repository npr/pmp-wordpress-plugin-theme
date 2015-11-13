<?php
/**
 * The Homepage Template file.
 *
 *
 * @package PMP Megaphone
 */

get_header();

/* get theme options */

global $sa_options;
$sa_settings = get_option( 'sa_options', $sa_options );

?>

<div class="parent-wrap" id="primary-parent-wrap">
	<div class="center-block-wrap wrap">
		<div id="primary" class="content-area">
            <div class="one-half first-col">
                <?php pmp_megaphone_fp_feature(); ?>
            </div>
            <div class="one-half">
                <?php pmp_megaphone_fp_recent_posts(); ?>
            </div>
        </div>
        <div id="secondary" class="content-area content-area-with-ad">
            <div id="articles-by-topic" class="content-col first-col">
                    <?php if( $sa_settings['featured_cat'] ) : ?>
                <div class="clear content-area articles-row">
                    <?php pmp_megaphone_fp_category_posts( $sa_settings['featured_cat'] ); ?>
                </div>
                    <?php endif; ?>

                <?php if( $sa_settings['featured_cat_2'] ) : ?>
                <div class="clear content-area articles-row">
                    <?php pmp_megaphone_fp_category_posts( $sa_settings['featured_cat_2'] ); ?>
                </div>
                <?php endif; ?>

                <?php if( $sa_settings['featured_cat_3'] ) : ?>
                <div class="clear content-area articles-row">
                    <?php pmp_megaphone_fp_category_posts( $sa_settings['featured_cat_3'] ); ?>
                </div>
                <?php endif; ?>
            </div>
            <?php get_sidebar('front-page'); ?>
        </div>
	</div><!-- .center-block-wrap -->
</div><!-- #primary-parent-wrap -->

<?php get_footer(); ?>
