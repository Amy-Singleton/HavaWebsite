<?php
/**
 * The template for displaying posts in the Video post format
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HavaWebsite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-12'); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="entry-meta">
					<?php havawebsite_posted_on(); ?>
				</div><!-- .entry-meta -->
		<?php	endif; 	?>
	</header><!-- .entry-header -->

	<div class="entry-content col-sm-12">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'havawebsite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	<span class="post-format">
		<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'video' ) ); ?>"><?php echo get_post_format_string( 'video' ); ?></a>
		<a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
	</span>
		<?php havawebsite_entry_footer(); ?>
		<hr>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

