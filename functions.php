<?php
/**
 * HavaWebsite functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package    havawebsite
 * @version    1.0.0
**/

if ( ! function_exists( 'havawebsite_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function havawebsite_setup() {
		
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on HavaWebsite, use a find and replace
		 * to change 'havawebsite' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'havawebsite', get_template_directory() . '/languages' );
	
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
	
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
	
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		
		/* Thumbnail list - Check This */
		function retImage($content) {
	
			if( has_post_thumbnail() )
			return the_post_thumbnail( 'thumbnail' ); 
	
			$pattern="/<img.*?src=[\'|\"](.*?(?:[\.gif|\.jpg]|\.png]))[\'|\"].*?[\/]?>/";
			preg_match_all($pattern,$content,$match); 
			if(empty($match[0][0])){
				echo "<img itemprop=\"img\" src=\"";
				echo esc_url( get_template_directory_uri() );
				echo "/images/thumbnail.png\" />";
			} else {
		    
			    echo  $match[0][0];
			}
		}
	
		/*
		 * HavaWebsite enables menus in two locations.	 * 
		 */
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'havawebsite' ),
			'footer'  => esc_html__( 'Footer Links','havawebsite' )
		) );
		
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	
		/*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'audio',
			'image',
			'video',
			'quote',
			'link',
		) );
	
		/*
		 * Setup the WordPress core custom background feature.
		 */
		add_theme_support( 'custom-background', apply_filters( 'havawebsite_custom_background_args', array(
			'default-color' => 'FFF',
			'default-image' => '',
		) ) );
		
		// Link a custom stylesheet file to the TinyMCE visual editor
		add_editor_style( 'havawebsite-editor-styles.css' );
		
	}
endif; // End havawebsite_setup
add_action( 'after_setup_theme', 'havawebsite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function havawebsite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'havawebsite_content_width', 640 );
}
add_action( 'after_setup_theme', 'havawebsite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function havawebsite_widgets_init() {
	//Right Sidebar
	register_sidebar( array(
		'name' => __( 'Sidebar','havawebsite'),
		'id' => 'sidebar',
		'description'   => 'The Sidebar on this theme appears on the right.',
		'before_widget' => '<aside id="%1$s" class="col-sm-12 widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	//Footer Sidebar Widget Area
	register_sidebar( array(
		'name' => __('Footer Widgets','havawebsite'),
		'id' => 'footer-sidebar',
		'description' => 'The footer widget area appears at the bottom of the website. It is designed to use four widgets.',
		'before_widget' => '<aside id="%1$s" class="col-sm-3 widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'havawebsite_widgets_init' );


/*
 * Enqueue Styles & Scripts 
 */

function havawebsite_scripts() {
	//Custom Bootstrap Styles
	wp_enqueue_style( 'havawebsite-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css', '20151210');
	//HavaWebsite Style Sheet
	wp_enqueue_style( 'havawebsite-style', get_stylesheet_uri() );
	wp_enqueue_style( 'havawebsite-post-format-style', get_template_directory_uri() . '/css/post-formats.css', '20160121' );
	//Google Fonts Open Sans
	wp_enqueue_style( 'havawebsite-google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,800,300,600,300italic,400italic,600italic,800italic' );
	//Google Font Martel
	wp_enqueue_style( 'havawebstie-martel-google-fonts', 'https://fonts.googleapis.com/css?family=Martel:400,300,600,700,800' );
	//jQuery Script 1.11.3
	wp_enqueue_script( 'havawebsite-jquery-script', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', array(), '20151210', true );
	//Bootstrap Script
	wp_enqueue_script( 'havawebsite-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.js', array(), '20151210', true );
	//wp_enqueue_script( 'havawebsite-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151210', true );
	//Custom Navigation Script
	wp_enqueue_script( 'havawebsite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	//Skip Link Focus Fix Script
	wp_enqueue_script( 'havawebsite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	//Target Location Scripts
	wp_enqueue_script( 'havawebsite-geolocation', get_template_directory_uri() . '/js/jquery-latest.min.js', array(), '20160318', true );
	wp_enqueue_script( 'havawebsite-target-location', get_template_directory_uri() . '/js/target-location.js', array(), '20160420', true );
	//Load WordPress Comment Reply Script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'havawebsite_scripts' );

function load_dashicons_front_end() {
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom Template Tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Wordpress Custom Login
 */
require get_template_directory() . '/inc/custom-login.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Search Form
 */
require get_template_directory() . '/inc/search-form.php';

/**
 * Custom Pagination
 */
require get_template_directory() . '/inc/pagination.php';
/**
 * Custom Back to Top Widget
 */
require get_template_directory() . '/inc/back-to-top-widget.php';
/**
 * Avatar Conditions
 */
require get_template_directory() . '/inc/avatars.php';


/**
 * Excerpt Length
 * @link https://developer.wordpress.org/reference/functions/the_excerpt/
 *
 * Filter the except length to 70 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function havawebsite_custom_excerpt_length( $length ) {
    return 110;
}
add_filter( 'excerpt_length', 'havawebsite_custom_excerpt_length', 999 );

/**
 * Woocommerce Support
 */
require get_template_directory() . '/inc/woocommerce-support.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
?>