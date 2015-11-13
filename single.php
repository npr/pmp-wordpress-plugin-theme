<?php
/**
 * The template for displaying all single posts.
 *
 * @package PMP Megaphone
 */

get_header();

?>

	<div class="parent-wrap" id="primary-parent-wrap">
		<div class="center-block-wrap wrap">
			<div id="primary" class="content-area three-fourths first-col">
					<main id="main" class="site-main" role="main">
					<div class="entry-sub-header"><?php the_category( ', ', $parents, $post_id ); ?></div>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'single' ); ?>
					<?php endwhile; // End of the loop. ?>

					</main><!-- #main -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div><!-- .center-block-wrap -->
	<?php the_post_navigation(); ?>

	</div><!-- #primary-parent-wrap -->


	<div class="parent-wrap" id="primary-tertiary-wrap">
		<div class="center-block-wrap wrap">
			<h1 class="comments-area-title">Comments</h1>
			<div id="tertiary" class="content-area three-fourths first-col">
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div><!-- #tertiary -->
			<?php get_sidebar('tertiary'); ?>
		</div><!-- .center-block-wrap -->
	</div><!-- #primary-tertiary-wrap -->

<?php get_footer(); ?>

