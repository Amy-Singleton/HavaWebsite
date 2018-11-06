<?php

/**
 * Registers options with the Theme Customizer
 *
 * @param      object    $wp_customize    The WordPress Theme Customizer
 * @link       https://codex.wordpress.org/Theme_Customization_API
 *
 * @package    havawebsite
 * @version    1.0.0
**/


function havawebsite_register_theme_customizer( $wp_customize ) {
 /*-----------------------------------------------------------*
 * Remove Sections
 *-----------------------------------------------------------*/
        $wp_customize->remove_section(
		'background_image',
		array(
			'title'     => 'Background Image',
		)
	);
/*-----------------------------------------------------------*
 * Change the Priority Customizer Sections
 *-----------------------------------------------------------*/
    	$wp_customize->add_section(
		'Widgets',
		array(
			'title'     => 'Widgets',
			'priority'  => 300
		)
	);
        $wp_customize->add_section(
		'havawebsite_logo_options',
		array(
			'title'     => 'Logo Options',
			'priority'  => 20
		)
	);
        $wp_customize->add_section(
		'nav',
		array(
			'title'     => 'Menus',
			'theme_supports' => 'menus',
			'priority'  => 100
		)
	);
        $wp_customize->add_section(
		'havawebsite_typography_options',
		array(
			'title'     => 'Theme Font',
			'priority'  => 100
		)
	);
        $wp_customize->add_section(
		'colors',
		array(
			'title'     => 'Colors',
			'priority'  => 100
		)
	);
        $wp_customize->add_section(
		'static_front_page',
		array(
			'title'     => 'Front Page',
			'priority'  => 100
		)
	);
	
	/*-----------------------------------------------------------*
	 * Defining the 'Logo' section
	 *-----------------------------------------------------------*/

	$wp_customize->add_section(
		'havawebsite_logo_options',
		array(
			'title'     => 'Logo Options',
                        'priority'  => 10
		)
	);
	/* Add a Logo Image */
	$wp_customize->add_setting(
		'havawebsite_logo_image',
		array(
		    	'default'      	    => '',
			'sanitize_callback' => 'havawebsite_sanitize_input',
		    	'transport'    	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'havawebsite_logo_image',
			array(
			    'label'    => 'Logo Image',
			    'description' => '<em>370px by 55px</em>',
			    'settings' => 'havawebsite_logo_image',
			    'section'  => 'havawebsite_logo_options'
			)
		)
	);
        $wp_customize->add_setting(
		'havawebsite_logo_image_alt',
		array(
		    	'default'      	    => 'havawebsite theme logo',
			'sanitize_callback' => 'havawebsite_sanitize_input',
		    	'transport'    	    => 'postMessage'
		)
	);
        $wp_customize->add_control(
		'havawebsite_logo_image_alt',
		array(
			'section'  => 'havawebsite_logo_options',
			'label'    => 'Logo Alt Info',
			'type'     => 'text'
		)
	);
	/* Display Logo */
	$wp_customize->add_setting(
		'havawebsite_display_logo',
		array(
			'default'    	    => 'true',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport'  	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_display_logo',
		array(
			'section'   => 'havawebsite_logo_options',
			'label'     => 'Display Logo?',
			'type'      => 'checkbox'
		)
	);
	
			
	/*-----------------------------------------------------------*
	 * Add Home Page Setting Options
	 *-----------------------------------------------------------*/
	$wp_customize->add_section(
		'havawebsite_homepage_options',
		array(
			'title'     => 'Custom Home Page',
			'description' => 'Home page settings are applied to Home Page Template. To use the Custom Home Page the Front Page should be a static page that uses the Home Page Template.',
                        'active_callback' => 'is_front_page',
			'priority'  => 105
		)
	);
	$wp_customize->add_setting(
		'havawebsite_heading_text',
		array(
			'default'            => 'Need a website...',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'havawebsite_heading_text',
		array(
			'section'           => 'havawebsite_homepage_options',
			'label'             => '1st Statement',
			'type'              => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_font_weight',
		array(
			'default'   	    => '400',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport' 	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_font_weight',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => 'Font Weight',
			'type'     => 'select',
			'choices'  => array(				
				'300'	=> '300',
				'400'	=> '400',
				'600' 	=> '600',
				'800'   => '800'
			)
		)
	);
		
	$wp_customize->add_setting(
		'havawebsite_home_h1_color',
		array(
			'default'     	    => '#333333',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport'   	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'home_h1_color',
			array(
			    'label'      => 'Font Color',
			    'section'    => 'havawebsite_homepage_options',
			    'settings'   => 'havawebsite_home_h1_color'
			)
		)
	);
	$wp_customize->add_setting(
		'havawebsite_heading2_text',
		array(
			'default'            => 'We have the solution',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_heading2_text',
		array(
			'section'  	=> 'havawebsite_homepage_options',
			'label'    	=> 'Second Statement',
			'type'     	=> 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_font_weight2',
		array(
			'default'   	    => '400',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport' 	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_font_weight2',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => 'Font Weight',
			'type'     => 'select',
			'choices'  => array(
				'300'	=> '300',
				'400'	=> '400',
				'600' 	=> '600',
				'800'   => '800'
			)
		)
	);
	$wp_customize->add_setting(
		'havawebsite_home_h2_color',
		array(
			'default'     	    => '#333333',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport'   	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'home_h2_color',
			array(
			    'label'      => 'Font Color',
			    'section'    => 'havawebsite_homepage_options',
			    'settings'   => 'havawebsite_home_h2_color'
			)
		)
	);
	
	$wp_customize->add_setting(
		'havawebsite_paragraph_text',
		array(
			'default'            => 'HavaWebsite is a Responsive WordPress Theme built with the Underscores developer theme framework and Bootstrap 3.3.6 CSS framework. This theme includes a customizable Home Page, support for custom Post Formats, as well as, a Custom Logo Option that replaces the WordPress default Site Title and Site Description.',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_paragraph_text',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => 'Paragraph',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_paragraph_weight',
		array(
			'default'   	    => '400',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport' 	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_paragraph_weight',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => 'Font Weight',
			'type'     => 'select',
			'choices'  => array(
				'300'	=> '300',
				'400'	=> '400',
				'600' 	=> '600',
				'800'   => '800'
			)
		)
	);
	
	$wp_customize->add_setting(
		'havawebsite_home_p_color',
		array(
			'default'     	    => '#ffffff',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport'   	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'home_p_color',
			array(
			    'label'      => 'Font Color',
			    'section'    => 'havawebsite_homepage_options',
			    'settings'   => 'havawebsite_home_p_color'
			)
		)
	);
	
	$wp_customize->add_setting(
		'havawebsite_quote_text',
		array(
			'default'            => 'Superior Design skills set us apart!',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_quote_text',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => 'Quote',
			'type'     => 'text'
		)
	);
		$wp_customize->add_setting(
		'havawebsite_quote_weight',
		array(
			'default'   	    => '400',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport' 	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_quote_weight',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => 'Font Weight',
			'type'     => 'select',
			'choices'  => array(
				'300'	=> '300',
				'400'	=> '400',
				'600' 	=> '600',
				'800'   => '800'
			)
		)
	);
	$wp_customize->add_setting(
		'havawebsite_home_q_color',
		array(
			'default'     	    => '#333333',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport'   	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'home_q_color',
			array(
			    'label'      => 'Font Color',
			    'section'    => 'havawebsite_homepage_options',
			    'settings'   => 'havawebsite_home_q_color'
			)
		)
	);
	/* Add Slider Images */
	$wp_customize->add_setting(
		'havawebsite_slide1_image',
		array(
		    	'default'      	    => get_template_directory_uri() . '/' . 'inc/images/WelcomeHavaWebsiteThemeGraphic_1.png',
			'sanitize_callback' => 'havawebsite_sanitize_input',
		    	'transport'    	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'havawebsite_slide1_image',
			array(
			    'label'    => 'Welcome Slide One',
			    'description' => 'Replace the default graphic. Upload a Image.',
			    'settings' => 'havawebsite_slide1_image',
			    'section'  => 'havawebsite_homepage_options'
			)
		)
	);
        $wp_customize->add_setting(
		'havawebsite_slide1_image_alt',
		array(
		    	'default'      	    => 'welcome to the havawebsite theme',
			'sanitize_callback' => 'havawebsite_sanitize_input',
		    	'transport'    	    => 'postMessage'
		)
	);
        $wp_customize->add_control(
		'havawebsite_slide1_image_alt',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => 'Welcome Slide One Alt Info',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_slide2_image',
		array(
		    	'default'      	    => get_template_directory_uri() . '/' . 'inc/images/WelcomeHavaWebsiteThemeGraphic_2.png',
			'sanitize_callback' => 'havawebsite_sanitize_input',
		    	'transport'    	    => 'postMessage'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'havawebsite_slide2_image',
			array(
			    'label'         => 'Welcome Slide Two',
			    'description'   => 'Replace the default graphic. Upload a Image.',
			    'settings'      => 'havawebsite_slide2_image',
			    'section'       => 'havawebsite_homepage_options'
			)
		)
	);
        $wp_customize->add_setting(
		'havawebsite_slide2_image_alt',
		array(
		    	'default'      	    => 'get noticed with the havawebsite wordpress theme',
			'sanitize_callback' => 'havawebsite_sanitize_input',
		    	'transport'    	    => 'postMessage'
		)
	);
        $wp_customize->add_control(
		'havawebsite_slide2_image_alt',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => 'Welcome Slide Two Alt Info',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_button_image',
		array(
		    	'default'      	    =>  get_template_directory_uri() . '/inc/images/StartHereButton.png',
			'sanitize_callback' => 'havawebsite_sanitize_input',
		    	'transport'    	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'havawebsite_button_image',
			array(
			    'label'    => 'Call to Action Button',
			    'description' => 'Use the default Button image or Upload a custom image.',
			    'settings' => 'havawebsite_button_image',
			    'section'  => 'havawebsite_homepage_options'
			)
		)
	);
	$wp_customize->add_setting(
		'havawebsite_button_link',
		array(
			'default'            => 'http://havawebsite.com',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_button_link',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => 'Button Link',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_button_alt',
		array(
			'default'            => 'start here contact button',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_button_alt',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => 'Button Alt Info',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_action_text',
		array(
			'default'            => 'Grow your online precence with the HavaWebsite Responsive WordPress theme today!',
                        'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_action_text',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => 'Call to Action Text',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_dashicon_one',
		array(
			'default'            => 'dashicons-awards',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_dashicon_one',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '1st Dashicon',
			'description' => 'Use Dashicons HTML Class Name i.e. dashicons-awards.',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_featured_one',
		array(
			'default'            => 'HavaWebsite',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_featured_one',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '1st Featured Heading',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_featured_txt_one',
		array(
			'default'            => 'The HavaWebsite theme brings WordPress, Underscores and Bootstrap 3 together to provide a professional, userfriendly, responsive theme. When it comes to being flexible, the HavaWebsite WordPress theme is designed to be easily customized by both novices and experts alike.',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_featured_txt_one',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '1st Featured Paragraph',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_dashicon_two',
		array(
			'default'            => 'dashicons-awards',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'havawebsite_dashicon_two',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '2nd Dashicon',
			'description' => 'Use Dashicons HTML Class Name i.e. dashicons-awards.',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_featured_two',
		array(
			'default'            => 'WordPress',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'havawebsite_featured_two',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '2nd Featured Heading',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_featured_txt_two',
		array(
			'default'            => 'WordPress is the worlds most beloved Content Management System (CMS). The WordPress CMS Framework is designed to provide an exceptional user experience while meeting web standards. Robust and feature rich, this Content Management System (CMS) leaves little to be desired.',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_featured_txt_two',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '2nd Featured Paragraph',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_dashicon_three',
		array(
			'default'            => 'dashicons-awards',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_dashicon_three',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '3rd Dashicon',
			'description' => 'Use Dashicons HTML Class Name i.e. dashicons-awards.',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_featured_three',
		array(
			'default'            => 'Underscores',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'havawebsite_featured_three',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '3rd Featured Heading',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_featured_txt_three',
		array(
			'default'            => 'UnderScores is a theme framework built for WordPress. The Underscore development theme framework is an amazing developers resource that can be leveraged to save developers countless hours of development time and is loved by developers everywhere.',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_featured_txt_three',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '3rd Featured Paragraph',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_dashicon_four',
		array(
			'default'            => 'dashicons-awards',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'havawebsite_dashicon_four',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '4th Dashicon',
			'description' => 'Use Dashicons HTML Class Name i.e. dashicons-awards.',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_featured_four',
		array(
			'default'            => 'BootStrap',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'havawebsite_featured_four',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '4th Featured Heading',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_featured_txt_four',
		array(
			'default'            => 'Bootstrap is the most popular HTML, CSS, and JavaScript framework designed for developing responsive, mobile-first websites. This HTML, CSS and JavaScript framework provides a strong and powerful foundation for structuring and displaying dynamic content driven websites.',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_featured_txt_four',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '4th Featured Paragraph',
			'type'     => 'text'
		)
	);
	/* Phonenumber and Social Media */
	$wp_customize->add_section(
		'havawebsite_contact_options',
		array(
			'title'     => 'Get In Touch',
			'priority'  => 80
		)
	);
	$wp_customize->add_setting(
		'havawebsite_phonenumber',
		array(
			'default'            => '928.648.3902',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'havawebsite_phonenumber',
		array(
			'section'  => 'havawebsite_contact_options',
			'label'    => 'Phone Number',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_facebook',
		array(
			'default'            => 'http://facebook.com',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'havawebsite_facebook',
		array(
			'section'  => 'havawebsite_contact_options',
			'label'    => 'Facebook URL',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_twitter',
		array(
			'default'            => 'http://twitter.com',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'havawebsite_twitter',
		array(
			'section'  => 'havawebsite_contact_options',
			'label'    => 'Twitter URL',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_googleplus',
		array(
			'default'            => 'http://googleplus.com',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'havawebsite_googleplus',
		array(
			'section'  => 'havawebsite_contact_options',
			'label'    => 'Google+ URL',
			'type'     => 'text'
		)
	);
	/* Add Full Width  Slide Images */
	$wp_customize->add_setting(
		'havawebsite_fullwidth_slide1',
		array(
		    	'default'      	    => get_template_directory_uri() . '/' . 'inc/images/HavaWebsiteFullWidthSlider1.png',
			'sanitize_callback' => 'havawebsite_sanitize_input',
		    	'transport'    	    => 'postMessage'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'havawebsite_fullwidth_slide1',
			array(
			    'label'    => '1st Full Width Slide',
			    'description' => 'Replace the default graphic. Upload a Image.',
			    'settings' => 'havawebsite_fullwidth_slide1',
			    'section'  => 'havawebsite_homepage_options'
			)
		)
	);
        $wp_customize->add_setting(
		'havawebsite_fullwidth_slide1_alt',
		array(
		    	'default'      	    => 'havawebsite responsive website design service',
			'sanitize_callback' => 'havawebsite_sanitize_input',
		    	'transport'    	    => 'postMessage'
		)
	);
        $wp_customize->add_control(
		'havawebsite_fullwidth_slide1_alt',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '1st Full Width Slide Alt Info',
			'type'     => 'text'
		)
	);
	$wp_customize->add_setting(
		'havawebsite_fullwidth_slide2',
		array(
		    	'default'      	    => get_template_directory_uri() . '/' . 'inc/images/HavaWebsiteFullWidthSlider2.png',
			'sanitize_callback' => 'havawebsite_sanitize_input',
		    	'transport'    	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'havawebsite_fullwidth_slide2',
			array(
			    'label'    => '2nd Full Width Slide',
			    'description' => 'Replace the default graphic. Upload an image for the second slide.',
			    'settings' => 'havawebsite_fullwidth_slide2',
			    'section'  => 'havawebsite_homepage_options'
			)
		)
	);
        $wp_customize->add_setting(
		'havawebsite_fullwidth_slide2_alt',
		array(
		    	'default'      	    => 'havawebsite custome graphics for print and web projects',
			'sanitize_callback' => 'havawebsite_sanitize_input',
		    	'transport'    	    => 'postMessage'
		)
	);
        $wp_customize->add_control(
		'havawebsite_fullwidth_slide2_alt',
		array(
			'section'  => 'havawebsite_homepage_options',
			'label'    => '2nd Full Width Slide Alt Info',
			'type'     => 'text'
		)
	);
	/*-----------------------------------------------------------*
	 * Defining our own 'Color Scheme' section
	 *-----------------------------------------------------------*/	
	$wp_customize->add_setting(
		'havawebsite_header_color',
		array(
			'default'     	    => '#222222',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport'   	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_color',
			array(
			    'label'      => 'Header Background',
			    'section'    => 'colors',
			    'settings'   => 'havawebsite_header_color'
			)
		)
	);
        $wp_customize->add_setting(
		'havawebsite_footer_color',
		array(
			'default'     	    => '#222222',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport'   	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_color',
			array(
			    'label'      => 'Footer Background',
			    'section'    => 'colors',
			    'settings'   => 'havawebsite_footer_color'
			)
		)
	);
	$wp_customize->add_setting(
		'havawebsite_heading_color',
		array(
			'default'     	    => '#333333',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport'   	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'heading_color',
			array(
			    'label'      => 'Page Headings',
			    'section'    => 'colors',
			    'settings'   => 'havawebsite_heading_color'
			)
		)
	);
	$wp_customize->add_setting(
		'havawebsite_link_color',
		array(
			'default'     	    => '#F8991D',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport'   	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_color',
			array(
			    'label'      => 'Links',
			    'section'    => 'colors',
			    'settings'   => 'havawebsite_link_color'
			)
		)
	);
        $wp_customize->add_setting(
		'havawebsite_hoverlink_color',
		array(
			'default'     	    => '#3366FF',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport'   	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'hoverlink_color',
			array(
			    'label'      => 'Hover Links',
			    'section'    => 'colors',
			    'settings'   => 'havawebsite_hoverlink_color'
			)
		)
	);
		
	/* Normal or Inverse Color Scheme */
	$wp_customize->add_setting(
		'havawebsite_color_scheme',
		array(
			'default'   	    => 'normal',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport' 	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_color_scheme',
		array(
			'section'  => 'colors',
			'label'    => 'Color Scheme',
			'type'     => 'radio',
			'choices'  => array(
				'normal'    => 'Normal',
				'inverse'   => 'Inverse'
			)
		)
	);
	
	/*-----------------------------------------------------------*
	 * Defining our own 'Typography Scheme' section
	 *-----------------------------------------------------------*/
	$wp_customize->add_section(
		'havawebsite_typography_options',
		array(
			'title'     => 'Theme Font',
			'priority'  => 100
		)
	);
	$wp_customize->add_setting(
		'havawebsite_font',
		array(
			'default'   	    => 'open sans',
			'sanitize_callback' => 'havawebsite_sanitize_input',
			'transport' 	    => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_font',
		array(
			'section'  => 'havawebsite_typography_options',
			'label'    => 'Typography Options',
			'description' => 'The Default Font is Open Sans. If you would like to change the font, choose a different Font from the list.',
			'type'     => 'radio',
			'choices'  => array(
				'open sans' => 'Open Sans',
				'martel'    => 'Martel',
				'arial'     => 'Arial',
				'times'     => 'Times New Roman'
			)
		)
	);
        
	/* Display Copyright */
	$wp_customize->add_section(
		'havawebsite_footer_options',
		array(
			'title'     => 'Copyright',
			'priority'  => 240
		)
	);
	$wp_customize->add_setting(
		'havawebsite_footer_copyright_text',
		array(
			'default'            => 'All Rights Reserved',
			'sanitize_callback'  => 'havawebsite_sanitize_input',
			'transport'          => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'havawebsite_footer_copyright_text',
		array(
			'section'  => 'havawebsite_footer_options',
			'label'    => 'Copyright Message',
			'type'     => 'text'
		)
	);
} // end havawebsite_register_theme_customizer
add_action( 'customize_register', 'havawebsite_register_theme_customizer' );

/**
 * Sanitizes the incoming input and returns it prior to serialization.
 *
 * @param      string    $input    The string to sanitize
 * @return     string              The sanitized string
 * @package    havawebsite
 * @version    1.0.2
 */
function havawebsite_sanitize_input( $input ) {
	return strip_tags( stripslashes( $input ) );
} // end havawebsite_sanitize_input

/**
 * Writes styles out the `<head>` element of the page based on the configuration options
 * saved in the Theme Customizer.
 *
 * @version    1.0.0
 */
function havawebsite_customizer_css() {

?>
<style type="text/css">
<?php if (get_theme_mod('havawebsite_font')|| get_theme_mod('havawebsite_color_scheme')) : ?>
    body {
    font-family: <?php echo get_theme_mod('havawebsite_font'); ?>;
    }
<?php endif; ?>
<?php if (get_theme_mod('havawebsite_font')) : ?>
    body#tinymce.wp-editor { 
        font-family: <?php echo get_theme_mod( 'havawebsite_font'); ?>;  
    }
<?php endif; ?>
<?php if (get_theme_mod('havawebsite_header_color')) : ?>
    header#masthead {
        background-color: <?php echo get_theme_mod('havawebsite_header_color'); ?>;
    }
<?php endif; ?>
<?php if (get_theme_mod('havawebsite_color_scheme') == 'inverse') : ?>
    body {
        background: #222222;
        color:#FFFFFF;
    }
    .well {
         background-color: #222222;
         border:0;
        
    }
    h2.widget-title  {
        color:#FFFFFF;
    }
<?php else: ?>
    body {
        background: #FFFFFF;
        color:#222222;
    }
    .well {
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
    }
    h2.widget-title {
        color:#333333;
    }
<?php endif; ?>

<?php if (get_theme_mod('havawebsite_link_color')) : ?>
    a,
    .glyphicon-phone-alt,
    .site-description,
    #social-contact-options ul li a{
        color: <?php echo get_theme_mod('havawebsite_link_color'); ?>;
    }
<?php endif; ?>
<?php if (get_theme_mod('havawebsite_link_color')) : ?>
    header#masthead {
        border-color: <?php echo get_theme_mod('havawebsite_link_color'); ?>;
    }
<?php endif; ?>
<?php if (get_theme_mod('havawebsite_hoverlink_color')) : ?>
    a:hover,
    #social-contact-options ul li a:hover {
    color: <?php echo get_theme_mod('havawebsite_hoverlink_color'); ?>;
    }
<?php endif; ?>
<?php if (get_theme_mod('havawebsite_link_color')) : ?>
    body#tinymce.wp-editor a {
        color: <?php echo get_theme_mod('havawebsite_link_color'); ?>;
    }
<?php endif; ?>
<?php if (get_theme_mod('havawebsite_heading_color')) : ?>
h1, h2, h3, h4, h5, h6 {
    color: <?php echo get_theme_mod('havawebsite_heading_color'); ?>;
}
<?php endif; ?>
<?php if (get_theme_mod('havawebsite_home_h1_color')|| get_theme_mod('havawebsite_font_weight')) : ?>
    #heading {
        <?php if (get_theme_mod('havawebsite_home_h1_color')) : ?>
        color: <?php echo get_theme_mod('havawebsite_home_h1_color'); ?>;
        <?php endif; ?>
        <?php if (get_theme_mod('havawebsite_font_weight')) : ?>
        font-weight:<?php echo get_theme_mod( 'havawebsite_font_weight'); ?>;
        <?php endif; ?>
    }
<?php endif; ?>
<?php if (get_theme_mod('havawebsite_home_h2_color')|| get_theme_mod('havawebsite_font_weight2')) : ?>
    #heading2 {
        <?php if (get_theme_mod('havawebsite_home_h2_color')) : ?>
        color: <?php echo get_theme_mod('havawebsite_home_h2_color'); ?>;
        <?php endif; ?>
        <?php if (get_theme_mod('havawebsite_font_weight2')) : ?>
        font-weight:<?php echo get_theme_mod( 'havawebsite_font_weight2'); ?>;
        <?php endif; ?>
    }
<?php endif; ?>
<?php if (get_theme_mod('havawebsite_home_p_color')|| get_theme_mod('havawebsite_paragraph_weight')) : ?>
    #paragraph {
        <?php if (get_theme_mod('havawebsite_home_p_color')) : ?>
        color: <?php echo get_theme_mod('havawebsite_home_p_color'); ?>;
        <?php endif; ?>
        <?php if (get_theme_mod('havawebsite_paragraph_weight')) : ?>
        font-weight:<?php echo get_theme_mod('havawebsite_paragraph_weight'); ?>;
        <?php endif; ?>
    }
<?php endif; ?>
<?php if (get_theme_mod('havawebsite_font') || get_theme_mod('havawebsite_home_q_color') || get_theme_mod( 'havawebsite_quote_weight') ) : ?>
    #quote {
        <?php if (get_theme_mod('havawebsite_font')) : ?>
        font-family: <?php echo get_theme_mod( 'havawebsite_font'); ?>;
        <?php endif; ?>
        <?php if (get_theme_mod('havawebsite_home_q_color')) : ?>
        color: <?php echo get_theme_mod('havawebsite_home_q_color'); ?>;
        <?php endif; ?>
        <?php if (get_theme_mod('havawebsite_quote_weight')) : ?>
        font-weight:<?php echo get_theme_mod( 'havawebsite_quote_weight'); ?>;
        <?php endif; ?>
    }
<?php endif; ?>
<?php if( false === get_theme_mod('havawebsite_display_logo') ) { ?>
#logo { display: none; }
<?php } // end if ?>
.customize-control-site_icon img, .customize-control-upload img {
    max-width: 100%;
}
<?php if (get_theme_mod('havawebsite_footer_color')) : ?>    
    .site-footer {
        background-color: <?php echo get_theme_mod('havawebsite_footer_color'); ?>;
    }
<?php endif; ?>
</style>
<?php 
} // end havawebsite_customizer_css
add_action( 'wp_head', 'havawebsite_customizer_css' );

?>
<?php
/**
 * HavaWebsite Theme Customizer.
 *
 * @package HavaWebsite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function havawebsite_customize_register( $wp_customize ) {
	/** Masthead **/
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';	
	$wp_customize->get_setting( 'havawebsite_logo_image' )->transport = 'postMessage';
        $wp_customize->get_setting( 'havawebsite_logo_image_alt' )->transport = 'postMessage';
        $wp_customize->get_setting( 'havawebsite_display_logo' )->transport = 'postMessage';
	/* Colors */
	$wp_customize->get_setting( 'havawebsite_header_color' )->transport = 'postMessage';
        $wp_customize->get_setting( 'havawebsite_footer_color' )->transport = 'postMessage';
        $wp_customize->get_setting( 'havawebsite_heading_color' )->transport = 'postMessage';
        $wp_customize->get_setting( 'havawebsite_link_color' )->transport = 'postMessage';
        $wp_customize->get_setting( 'havawebsite_hoverlink_color' )->transport = 'postMessage';
        /* Typography */
	$wp_customize->get_setting( 'havawebsite_font' )->transport = 'postMessage';
	/* Get in touch */
	$wp_customize->get_setting( 'havawebsite_phonenumber' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_facebook' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_twitter' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_googleplus' )->transport = 'postMessage';
	/* Home - Above the fold content */
	$wp_customize->get_setting( 'havawebsite_heading_text' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_font_weight' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_home_h1_color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_heading2_text' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_font_weight2' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_home_h2_color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_font_weight2' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_paragraph_text' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_paragraph_weight' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_home_p_color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_quote_text' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_quote_weight' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_home_q_color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_slide1_image' )->transport = 'postMessage';
        $wp_customize->get_setting( 'havawebsite_slide1_image_alt' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_slide2_image' )->transport = 'postMessage';
        $wp_customize->get_setting( 'havawebsite_slide2_image_alt' )->transport = 'postMessage';
	/* Home - Call to Action */
	$wp_customize->get_setting( 'havawebsite_button_image' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_button_link' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_button_alt' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_action_text' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_dashicon_one' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_featured_one' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_featured_txt_one' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_dashicon_two' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_featured_two' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_featured_txt_two' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_dashicon_three' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_featured_three' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_featured_txt_three' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_dashicon_four' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_featured_four' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_featured_txt_four' )->transport = 'postMessage';
	/* Home - Full width slider */
	$wp_customize->get_setting( 'havawebsite_fullwidth_slide1' )->transport = 'postMessage';
        $wp_customize->get_setting( 'havawebsite_fullwidth_slide1_alt' )->transport = 'postMessage';
	$wp_customize->get_setting( 'havawebsite_fullwidth_slide2' )->transport = 'postMessage';
        $wp_customize->get_setting( 'havawebsite_fullwidth_slide2_alt' )->transport = 'postMessage';
	/* Footer - copyright */
	$wp_customize->get_setting( 'havawebsite_footer_copyright_text' )->transport = 'postMessage';
}
add_action( 'customize_register', 'havawebsite_customize_register' );

function havawebsite_get_theme_mods() {

    $defaults = array(
        'havawebsite_font'                 => 'open sans',
        'havawebsite_slide1_image'         => get_template_directory_uri() . '/' . 'inc/images/WelcomeHavaWebsiteThemeGraphic_1.png',
        'havawebsite_slide2_image'     => get_template_directory_uri() . '/' . 'inc/images/WelcomeHavaWebsiteThemeGraphic_2.png',
        'havawebsite_button_image'     => get_template_directory_uri() . '/' . 'inc/images/StartHereButton.png'
);

    return $defaults;
}

/**
 * Registers the Theme Customizer Preview with WordPress.
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @package    havawebsite
 * @since      0.3.0
 * @version    1.0.0
 */
function havawebsite_customizer_live_preview() {

	wp_enqueue_script(
		'havawebsite-theme-customizer',
		get_template_directory_uri() . '/js/customizer.js',
		array( 'customize-preview' ),
		'1.0.0',
		true
	);

} // end havawebsite_customizer_live_preview
add_action( 'customize_preview_init', 'havawebsite_customizer_live_preview' );