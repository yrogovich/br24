<?php


//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * br24-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package br24-theme
 */

// if ( ! function_exists( 'br24_theme_setup' ) ) :
// 	/**
// 	 * Sets up theme defaults and registers support for various WordPress features.
// 	 *
// 	 * Note that this function is hooked into the after_setup_theme hook, which
// 	 * runs before the init hook. The init hook is too late for some features, such
// 	 * as indicating support for post thumbnails.
// 	 */
// 	function br24_theme_setup() {
// 		/*
// 		 * Make theme available for translation.
// 		 * Translations can be filed in the /languages/ directory.
// 		 * If you're building a theme based on br24-theme, use a find and replace
// 		 * to change 'br24-theme' to the name of your theme in all the template files.
// 		 */
// 		load_theme_textdomain( 'br24-theme', get_template_directory() . '/languages' );

// 		// Add default posts and comments RSS feed links to head.
// 		add_theme_support( 'automatic-feed-links' );

// 		/*
// 		 * Let WordPress manage the document title.
// 		 * By adding theme support, we declare that this theme does not use a
// 		 * hard-coded <title> tag in the document head, and expect WordPress to
// 		 * provide it for us.
// 		 */
// 		add_theme_support( 'title-tag' );

// 		/*
// 		 * Enable support for Post Thumbnails on posts and pages.
// 		 *
// 		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
// 		 */
// 		add_theme_support( 'post-thumbnails' );

// 		// This theme uses wp_nav_menu() in one location.
// 		register_nav_menus( array(
// 			'menu-1' => esc_html__( 'Primary', 'br24-theme' ),
// 		) );

// 		/*
// 		 * Switch default core markup for search form, comment form, and comments
// 		 * to output valid HTML5.
// 		 */
// 		add_theme_support( 'html5', array(
// 			'search-form',
// 			'comment-form',
// 			'comment-list',
// 			'gallery',
// 			'caption',
// 		) );

// 		// Set up the WordPress core custom background feature.
// 		add_theme_support( 'custom-background', apply_filters( 'br24_theme_custom_background_args', array(
// 			'default-color' => 'ffffff',
// 			'default-image' => '',
// 		) ) );

// 		// Add theme support for selective refresh for widgets.
// 		add_theme_support( 'customize-selective-refresh-widgets' );

// 		/**
// 		 * Add support for core custom logo.
// 		 *
// 		 * @link https://codex.wordpress.org/Theme_Logo
// 		 */
// 		add_theme_support( 'custom-logo', array(
// 			'height'      => 250,
// 			'width'       => 250,
// 			'flex-width'  => true,
// 			'flex-height' => true,
// 		) );
// 	}
// endif;
// add_action( 'after_setup_theme', 'br24_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function br24_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'br24_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'br24_theme_content_width', 0 );

//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        
        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}
add_action('wp_default_scripts', 'remove_jquery_migrate');

function my_deregister_scripts(){
	// remove wp-embed 
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

function disable_wp_emojicons() {
	// remove all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}
add_action( 'init', 'disable_wp_emojicons' );

function theme_name_scripts() {
    if( ! wp_is_mobile() ) {
		wp_enqueue_script('waterwheelCarousel', get_template_directory_uri() . '/src/libs/jquery.waterwheelCarousel.min.js' , 'jQuery' , false, true );
		wp_enqueue_script('handle', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js', 'jQuery', false, true);
    }
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

/**
 * Enqueue scripts and styles.
 */
function br24_theme_scripts() {
	wp_enqueue_style( 'br24-theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'br24-style', get_template_directory_uri() . '/src/css/main.css');
	wp_enqueue_style( 'br24-fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');

	wp_enqueue_script('jQuery');
	wp_enqueue_script('jquery-lazy', '//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js' , 'jQuery' , false, true );
	wp_enqueue_script('phone-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js', 'jQuery', null, true );
	wp_enqueue_script('main-script', get_template_directory_uri() . '/src/js/main.js' , 'jQuery' , false, true );
}
add_action( 'wp_enqueue_scripts', 'br24_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }

