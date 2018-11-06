<?php
/**
 * Template Name: Full Width
 *
 * This is a full width template that does not have a sidebar
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HavaWebsite
 */

get_header(); ?>

	<div id="primary" class="content-area container-fluid">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<div class="col-sm-12">
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
