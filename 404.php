<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package HavaWebsite
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main col-sm-9" role="main">

			<section class="error-404 not-found container-fluid">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'havawebsite' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'havawebsite' ); ?></p>

					<?php get_search_form(); ?>

					<div class="col-sm-4"><?php the_widget( 'WP_Widget_Recent_Posts' ); ?></div>

					<?php if ( havawebsite_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories col-sm-4">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'havawebsite' ); ?></h2>
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

					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'havawebsite' ), convert_smilies( ':)' ) ) . '</p>';
						?>
				<div class="col-sm-4">
					<?php 
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>
				</div>
				<div class="col-sm-4">
				<?php
				//the_widget( 'WP_Widget_Tag_Cloud' );
				?>
				</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
