<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package    havawebsite
 * @version    1.0.0
**/

?>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer-widgets" class="secondary col-sm-12">
			<div id="footer-sidebar">
				<?php
				if(is_active_sidebar('footer-sidebar')){
				dynamic_sidebar('footer-sidebar');
				}
				?>
			</div><!-- footer-sidebar -->
		</div><!-- footer-sidebar -->
		<div class="col-sm-12">
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-links', 'menu_class' => '') ); ?>
		</div><!-- col-sm-12 -->
		<div id="footer" class="copyright">
		&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'title' ); ?> <span id="copyright-message"><?php echo get_theme_mod( 'havawebsite_footer_copyright_text' ); ?></span>
		</div><!-- #footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
