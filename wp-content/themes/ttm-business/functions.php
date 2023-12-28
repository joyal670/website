<?php
/**
 * TTM Business functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @since ttm-business 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */
if ( ! isset( $content_width ) ) {
	$content_width = 847;
}

if ( ! function_exists( 'ttm_business_setup' ) ) :

	function ttm_business_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on TTM Business, use a find and replace
	 * to change 'TTM Business' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ttm-business', get_template_directory() . '/languages' );
	
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

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( 
		array(
			'main-menu'   => esc_html__( 'Main Menu', 'ttm-business' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'ttm-business' ),
		) 
	);

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'gallery', 'audio', 'video', 'quote', 'link', 'status', 'chat'
	) );
	

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'ttm_business_setup' );

/*
 * Prefdefine Global variable
 */
global $ttm_business_globals;

$ttm_business_globals = array(
	'theme_options_slug' => 'ttm_business_options',
	'theme_options_name' => 'ttm_business_options',
);


/************************* Custom Files ************************/

// Load theme functions
require get_template_directory() . '/inc/tools.php';

// filters and action hooks
require get_template_directory() . '/inc/hooks.php';

// Enqueue styles and scripts
require get_template_directory() . '/inc/ttm-business-scripts-styles.php';

// theme widgets
require get_template_directory() . '/inc/widgets.php';

// theme options
require get_template_directory() . '/inc/redux-options/redux-config.php';

// about theme
require get_template_directory() . '/inc/getting-started.php';

// demo data
require get_template_directory() . '/inc/ttm-business-config.php';

// bundled plugins
require get_template_directory() . '/inc/tgmpa/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/bundled-plugins.php';