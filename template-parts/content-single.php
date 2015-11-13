<?php
/**
 * Template part for displaying single posts.
 *
 * @package PMP Megaphone
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php pmp_megaphone_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) {
			echo '<figure class="wrap-post-thumbnail">';
			the_post_thumbnail('');
			echo '<figcaption class="caption">';
			echo get_post( get_post_thumbnail_id() )->post_excerpt;
			echo '</figcaption>';
			echo '</figure>';
			} ?>
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php pmp_megaphone_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

