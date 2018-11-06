<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HavaWebsite
 */

if ( is_active_sidebar( 'sidebar' ) ) {
?>
<div id="secondary" class="widget-area well col-sm-3" role="complementary">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</div><!-- #secondary -->
<?php 
} else {return;}
?>

