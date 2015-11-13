<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package PMP Megaphone
 */

get_header(); ?>


	<div class="parent-wrap" id="primary-parent-wrap">
		<div class="center-block-wrap wrap">
			<div id="primary" class="content-area three-fourths first-col">
					<main id="main" class="site-main" role="main">
						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pmp_megaphone' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'pmp_megaphone' ); ?></p>

								<?php get_search_form(); ?>

								<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

								<?php if ( pmp_megaphone_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
								<div class="widget widget_categories">
									<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'pmp_megaphone' ); ?></h2>
									<ul>
									<?php
										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) );
									?>
									</ul>
								</div><!-- .widget -->
								<?php endif; ?>

								<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

							</div><!-- .page-content -->
						</section><!-- .error-404 -->
					</main><!-- #main -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>

		</div><!-- .center-block-wrap -->
	</div><!-- #primary-parent-wrap -->

<?php get_footer(); ?>
