<?php
/**
 * The template for displaying search results pages.
 *
 * @package PMP Megaphone
 */

get_header(); ?>

	<div class="parent-wrap" id="primary-parent-wrap">
		<div class="center-block-wrap wrap">

			<div id="primary" class="content-area three-fourths first-col">
					<main id="main" class="site-main" role="main">
<?php if ( have_posts() ) : ?>
						<header class="page-header">
							<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'pmp_megaphone' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->
						<?php endif; ?>
						<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );
							?>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>

					</main><!-- #main -->
			</div><!-- #primary -->
<?php get_sidebar('archive'); ?>
		</div><!-- .center-block-wrap -->
	</div><!-- #primary-parent-wrap -->

<?php get_footer(); ?>
