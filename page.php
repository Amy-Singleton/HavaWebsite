<?php
/**
 * Template Name: Full Width Page Template
 *
 * This is a full width template that does not have a sidebar
 *  *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HavaWebsite
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="main" class="site-main col-sm-9" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<div class="col-sm-12">
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) : comments_template();
						endif;
					?>
				</div>
			<?php endwhile; // End of the loop. ?>

		</div><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
