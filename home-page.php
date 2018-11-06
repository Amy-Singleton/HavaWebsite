<?php
/**
 * Template Name: Home
 *
 * This is a full width template that does not have a sidebar. This template page can be customized through the
 * Wordpress Customizer and is intended to be used as the website home page.
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    havawebsite
 * @version    1.0.0
**/

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="slider" class="container-fluid col-sm-12">
				<div id="welcome">
					<div id="welcome-text" class="col-sm-5">
						<?php if (get_theme_mod( 'havawebsite_heading_text' )) : ?>
						<h1 id="heading"><?php echo ucwords(get_theme_mod( 'havawebsite_heading_text' )); ?></h1>
						<?php else: ?>
						<h1 id="heading"><?php echo ucwords('Need a Website...'); ?></h1>
						<?php endif; ?>
						<?php if (get_theme_mod( 'havawebsite_heading_text2' )) : ?>
						<h2 id="heading2"><?php echo ucwords(get_theme_mod( 'havawebsite_heading2_text' )); ?></h2>
						<?php else: ?>
						<h2 id="heading2" placeholder="We have the Solution"><?php echo ucwords('We have the solution'); ?></h2>
						<?php endif; ?>
						<?php if (get_theme_mod( 'havawebsite_paragraph_text' )) : ?>
						<p id="paragraph"><?php echo ucfirst(get_theme_mod( 'havawebsite_paragraph_text' )); ?></p>
						<?php else: ?>
						<p id="paragraph">
						<?php echo 'HavaWebsite is a Responsive WordPress Theme built with the' . '<a href=\"' . esc_url('http://underscores.me') . '\" alt=\"uderscores developer theme\"> Underscores</a> developer theme framework and the <a href=\"' . esc_url('http://bootstrap.com') . '\" alt=\"bootstrap html css javascript frame work\"> Bootstrap 3.3.6</a> HTML, CSS and JavaScript Framework. This theme includes a customizable Home Page, support for Custom Post Formats, as well as, a Custom Logo Option that replaces the default Title and Description.'; ?>
						</p>
						<?php endif; ?>
						<?php if (get_theme_mod( 'havawebsite_quote_text' )) : ?>
						<blockquote id="quote"><?php echo ucwords(get_theme_mod( 'havawebsite_quote_text' )); ?></blockquote>
						<?php else: ?>
						<blockquote id="quote"><?php echo ucwords('Superior Website Design Skills set us apart!'); ?></blockquote>
						<?php endif; ?>
					</div><!-- End #welcome-text -->
					<div id="banner-ads" class="col-sm-7 container-fluid">
						<?php if (get_theme_mod( 'havawebsite_slide2_image' )) : ?>
						<img id="img-welcome" class="bottom img-responsive" src="<?php echo get_theme_mod( 'havawebsite_slide2_image' ); ?>" alt="<?php echo get_theme_mod( 'havawebsite_slide2_image_alt' ); ?>" itemprop="image">
						<?php else: ?>
						<img id="img-welcome" class="bottom img-responsive" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/havawebsite/inc/images/WelcomeHavaWebsiteThemeGraphic_2.png" alt="<?php echo get_theme_mod( 'havawebsite_slide2_image_alt' ); ?>" itemprop="image">
						<?php endif; ?>
						<?php if (get_theme_mod( 'havawebsite_slide1_image' )) : ?>
						<img id="img-loc" class="top img-responsive" src="<?php echo get_theme_mod( 'havawebsite_slide1_image' ); ?>" alt="<?php echo get_theme_mod( 'havawebsite_slide1_image_alt' ); ?>" itemprop="image">
						<?php else: ?>
						<img id="img-loc" class="top img-responsive" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/havawebsite/inc/images/WelcomeHavaWebsiteThemeGraphic_1.png" alt="<?php echo get_theme_mod( 'havawebsite_slide1_image_alt' ); ?>" itemprop="image">
						<?php endif; ?>
					</div><!-- End #banner-ads -->
				</div><!-- End #welcome -->
			</div><!-- End #slider div -->
			<div id="call-to-action" class="col-sm-12 container-fluid">
				<?php if(get_theme_mod( 'havawebsite_button_link' )) : ?>
					<div id="action" class="col-sm-5">
						<a href="<?php echo esc_url(get_theme_mod( 'havawebsite_button_link' )); ?>" alt="<?php if ( get_theme_mod( 'havawebsite_button_alt' ) ) {echo get_theme_mod( 'havawebsite_button_alt' );} ?>"><img id="start-here-btn" class="img-responsive" src="<?php echo get_theme_mod( 'havawebsite_button_image' ); ?>" alt="<?php if ( get_theme_mod( 'havawebsite_button_alt' ) ) {echo get_theme_mod( 'havawebsite_button_alt' );} ?>"></a>
					</div>
				<?php else : ?>
					<div id="action" class="col-sm-5">
						<a href="<?php echo esc_url( 'http://havawebsite.com' ); ?>" alt="havawebsite website link" target="_blank" ><img id="start-here-btn" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/inc/images/StartHereButton.png" alt="get the havawebsite custom wordpress theme start here"></a>
					</div>
				<?php endif; ?>
				<?php if (get_theme_mod( 'havawebsite_action_text' )) : ?>
					<div class="col-sm-7">
						<p id="action-text"><?php echo get_theme_mod( 'havawebsite_action_text' ); ?></p>
					</div>
				<?php else : ?>
				<div id="action-text" class="col-sm-7">
						<p><?php echo 'Save Time and Money with the HavaWebsite Custom WordPress Theme today!'; ?></p>
					</div>
				<?php endif; ?>			
			</div><!-- End #call-to-action -->
			<div id="services" class="col-sm-12 container-fluid">
				<div class="col-sm-3">
				<?php if (get_theme_mod('havawebsite_dashicon_one')) : ?>
					<h3 id="featured-head-1" class="dashicons-before <?php echo get_theme_mod( 'havawebsite_dashicon_one' ); ?>">
				<?php	else: ?>
					<h3 id="featured-head-1" class="dashicons-before dashicons-awards">
				<?php	endif; ?>
				<?php if (get_theme_mod('havawebsite_featured_one')) : ?>
					<?php echo get_theme_mod( 'havawebsite_featured_one' ); ?></h3>
				<?php else: ?>
					<?php echo 'HavaWebsite'; ?></h3>
				<?php	endif; ?>
				<?php if (get_theme_mod('havawebsite_featured_txt_one')) : ?>
					<p id="featured-text-1"><?php echo get_theme_mod( 'havawebsite_featured_txt_one' ); ?></p>
				<?php else: ?>
					<p id="featured-text-1"><?php echo 'The HavaWebsite theme brings WordPress, Underscores and Bootstrap 3 together to provide a professional, user-friendly, responsive theme. When it comes to being flexible, the HavaWebsite WordPress theme is designed to be easily customized by both novices and experts alike.'; ?></p>
				<?php	endif; ?>
				</div>
				<div class="col-sm-3">
				<?php if (get_theme_mod('havawebsite_dashicon_two')) : ?>
					<h3 id="featured-head-2" class="dashicons-before <?php echo get_theme_mod( 'havawebsite_dashicon_two' ); ?>">
				<?php	else: ?>
					<h3 id="featured-head-2" class="dashicons-before dashicons-awards">
				<?php	endif; ?>
				<?php if (get_theme_mod('havawebsite_featured_two')) : ?>
					<?php echo get_theme_mod( 'havawebsite_featured_two' ); ?></h3>
				<?php else: ?>
					<?php echo 'WordPress'; ?></h3>
				<?php	endif; ?>
				<?php if (get_theme_mod('havawebsite_featured_txt_two')) : ?>
					<p id="featured-text-2"><?php echo get_theme_mod( 'havawebsite_featured_txt_two' ); ?></p>
				<?php else: ?>
					<p id="featured-text-2"><?php echo 'WordPress is the worlds most beloved Content Management System (CMS). The WordPress CMS Framework is designed to provide an exceptional user experience while meeting web standards. Robust and feature rich, this Content Management System (CMS) leaves little to be desired.'; ?></p>
				<?php	endif; ?>
				</div>
				<div class="col-sm-3">
				<?php if (get_theme_mod('havawebsite_dashicon_three')) : ?>
					<h3 id="featured-head-3" class="dashicons-before <?php echo get_theme_mod( 'havawebsite_dashicon_three' ); ?>">
				<?php	else: ?>
					<h3 id="featured-head-3" class="dashicons-before dashicons-awards">
				<?php	endif; ?>
				<?php if (get_theme_mod('havawebsite_featured_three')) : ?>
					<?php echo get_theme_mod( 'havawebsite_featured_three' ); ?></h3>
				<?php else: ?>
					<?php echo 'Underscores'; ?></h3>
				<?php	endif; ?>
				<?php if (get_theme_mod('havawebsite_featured_txt_three')) : ?>
					<p id="featured-text-3"><?php echo get_theme_mod( 'havawebsite_featured_txt_three' ); ?></p>
				<?php else: ?>
					<p id="featured-text-3"><?php echo 'UnderScores is a theme framework built for WordPress. The Underscore development theme framework is an amazing developers resource that can be leveraged to save developers countless hours of development time and is loved by developers everywhere.'; ?></p>
				<?php	endif; ?>
				</div>
				<div class="col-sm-3">
				<?php if (get_theme_mod('havawebsite_dashicon_four')) : ?>
					<h3 id="featured-head-4" class="dashicons-before <?php echo get_theme_mod( 'havawebsite_dashicon_four' ); ?>">
				<?php	else: ?>
					<h3 id="featured-head-4" class="dashicons-before dashicons-awards">
				<?php	endif; ?>
				<?php if (get_theme_mod('havawebsite_featured_four')) : ?>
					<?php echo get_theme_mod( 'havawebsite_featured_four' ); ?></h3>
				<?php else: ?>
					<?php echo 'Bootstrap 3'; ?></h3>
				<?php endif; ?>
				<?php if (get_theme_mod('havawebsite_featured_txt_four')) : ?>
					<p id="featured-text-4"><?php echo get_theme_mod( 'havawebsite_featured_txt_four' ); ?></p>
				<?php	else: ?>
					<p id="featured-text-4"><?php echo 'Bootstrap is the most popular HTML, CSS, and JavaScript framework designed for developing responsive, mobile-first websites. This HTML, CSS and JavaScript framework provides a strong and powerful foundation for structuring and displaying dynamic content driven websites.'; ?></p>
				<?php endif; ?>
				</div>
			</div><!-- End #services -->
			<div id="featured-slider" class="col-sm-12">
				<?php if (get_theme_mod('havawebsite_fullwidth_slide1')) : ?>
					<img id="full-slide-1" class="bottom img-responsive" src="<?php echo get_theme_mod('havawebsite_fullwidth_slide1'); ?>" alt="<?php echo get_theme_mod('havawebsite_fullwidth_slide1_alt'); ?>" itemprop="image">
				<?php	else: ?>
					<img id="full-slide-1" class="bottom img-responsive" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/havawebsite/inc/images/HavaWebsiteFullWidthSlider1.png" alt="<?php echo get_theme_mod('havawebsite_fullwidth_slide1_alt'); ?>" itemprop="image">
				<?php	endif; ?>
				<?php if (get_theme_mod('havawebsite_fullwidth_slide2')) : ?>
					<img id="full-slide-2" class="top img-responsive" src="<?php echo get_theme_mod('havawebsite_fullwidth_slide2'); ?>" alt="<?php echo get_theme_mod('havawebsite_fullwidth_slide2_alt'); ?>" itemprop="image">
				<?php	else: ?>
					<img id="full-slide-2" class="top img-responsive" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/havawebsite/inc/images/HavaWebsiteFullWidthSlider2.png" alt="<?php echo get_theme_mod('havawebsite_fullwidth_slide2_alt'); ?>" itemprop="image">
				<?php	endif; ?>
			</div><!-- End #featured-slider -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>