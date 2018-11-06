<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package    havawebsite
 * @version    1.0.0
**/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'havawebsite' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( get_theme_mod( 'havawebsite_logo_image' ) ) : ?>
				<div class="col-sm-5">
					<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url" >
						<img id="company-logo" class="img-responsive" src="<?php  echo get_theme_mod( 'havawebsite_logo_image' ); ?>"
							<?php if (get_theme_mod( 'havawebsite_logo_image_alt' )) : ?> alt="<?php echo get_theme_mod( 'havawebsite_logo_image_alt' ); ?>" ></a>
							<?php else: ?> alt="havawebsite responsive wordpress theme logo" ></a>
							<?php endif; ?>
				</div>
			<?php else : ?>
				<div class="col-sm-5">
					<h1 class="site-title container-fluid">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a>
					</h1>
					<p class="site-description container-fluid"><?php bloginfo( 'description' ); ?></p>
				</div>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<div id="social-contact-options" class="col-sm-7">
		<ul>
			<?php if( !get_theme_mod( 'havawebsite_phonenumber') === ' ') : ?>
			<li><a id="phonenumber" class="glyphicon glyphicon-phone-alt" href="tel:+1<?php echo esc_url(get_theme_mod( 'havawebsite_phonenumber' ), tel); ?>" itemprop="telephone"><?php echo get_theme_mod( 'havawebsite_phonenumber' ); ?></a></li>
			<?php else: ?>
			<li><a id="phonenumber" class="glyphicon glyphicon-phone-alt" href="tel:+19284683902" itemprop="telephone">928.468.3902</a></li>
			<?php endif; ?>
			<?php if( get_theme_mod( 'havawebsite_facebook')) : ?>
				<li><a id="facebook" href="<?php echo esc_url(get_theme_mod( 'havawebsite_facebook' )); ?>" alt="facebook" title="Facebook" itemprop="url"><span class="dashicons dashicons-facebook-alt"></span></a></li>
			<?php else: ?>
			<li><a id="facebook" href="<?php esc_url('http://facebook.com');?>" alt="facebook" title="Facebook" itemprop="url" ><span class="dashicons dashicons-facebook-alt"></span></a></li>
			<?php endif; ?>
			<?php if( get_theme_mod( 'havawebsite_twitter')) : ?>
			<li><a id="twitter" href="<?php echo esc_url(get_theme_mod( 'havawebsite_twitter' )); ?>" alt="twitter" title="Twitter" itemprop="url"><span class="dashicons dashicons-twitter"></span></a></li>
			<?php else: ?>
			<li><a id="twitter" href="<?php esc_url('http://twitter.com" alt="twitter'); ?>" title="Twitter" itemprop="url"><span class="dashicons dashicons-twitter"></span></a></li>
			<?php endif; ?>
			<?php if( get_theme_mod( 'havawebsite_googleplus') ) : ?>
			<li><a id="googleplus" href="<?php echo esc_url(get_theme_mod( 'havawebsite_googleplus' )); ?>" alt="google plus" title="google+" itemprop="url" ><span class="dashicons dashicons-googleplus"></span></a></li>
			<?php else: ?>
			<li><a id="googleplus" href="<?php esc_url('http://googleplus.com');?>" alt="google plus" title="google+" itemprop="url" ><span class="dashicons dashicons-googleplus"></span></a>
			<?php endif; ?>
		</ul>
	</div><!-- #social-contact-options -->
		<div class="col-sm-7 hava-menu">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div id="small-menu-text">Menu</div>
					<button class="navbar-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span class="dashicons dashicons-menu"></span>
					</button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu') ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .col-sm-7 -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">