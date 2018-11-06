<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    havawebsite
 * @version    1.0.0
**/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-12'); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
		<?php havawebsite_posted_on(); ?>
		</div><!-- .entry-meta -->	
	</header><!-- .entry-header -->
	<?php if ( has_post_format( 'audio' )) : ?>
		<img class ="img-responsive" src="<?php echo get_bloginfo('template_directory_uri()') . '/' . 'template-parts/images/audio-post-image.jpg'?>" />
		<div class="entry-content">
	<?php else: ?>
		<div class="entry-content">
	<?php endif ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'havawebsite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
		<footer class="entry-footer">
		<?php 	havawebsite_entry_footer(); ?>
		</footer><!-- .entry-footer -->	
</article><!-- #post-## -->

