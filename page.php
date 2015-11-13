<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package PMP Megaphone
 */

get_header(); ?>

<div class="parent-wrap" id="primary-parent-wrap">
	<div class="center-block-wrap wrap">
		<div id="primary" class="content-area three-fourths first-col">
				<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
		</div><!-- #primary -->
        <?php get_sidebar(); ?>
	</div><!-- .center-block-wrap -->
</div><!-- #primary-parent-wrap -->

<?php get_footer(); ?>
