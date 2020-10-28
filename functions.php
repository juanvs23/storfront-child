<?php
/**
 * ztgroup-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ztgroup-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ztgroup_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ztgroup_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ztgroup-theme, use a find and replace
		 * to change 'ztgroup-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ztgroup-theme', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ztgroup-theme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ztgroup_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ztgroup_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ztgroup_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ztgroup_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'ztgroup_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ztgroup_theme_widgets_init() {
	
	
	//footer-top
	register_sidebar(
		array(
			'name'          => esc_html__( 'Pie arriba 1', 'ztgroup-theme' ),
			'id'            => 'footer-top-1',
			'description'   => esc_html__( 'Add widgets here.', 'ztgroup-theme' ),
			'before_widget' => '<div id="top-footer-1" class="widget-footer-top widget-footer %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="top-footer-title collapse-trigger active" data-parent="top-footer-1">',
			'after_title'   => '</h3>',
			'class'         =>'widget-target',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Pie arriba 2', 'ztgroup-theme' ),
			'id'            => 'footer-top-2',
			'description'   => esc_html__( 'Add widgets here.', 'ztgroup-theme' ),
			'before_widget' => '<div id="top-footer-2" class="widget-footer-top widget-footer %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="top-footer-title collapse-trigger" data-parent="top-footer-2">',
			'after_title'   => '</h3>',
			'class'         =>'widget-target',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Pie arriba 3', 'ztgroup-theme' ),
			'id'            => 'footer-top-3',
			'description'   => esc_html__( 'Add widgets here.', 'ztgroup-theme' ),
			'before_widget' => '<div id="top-footer-3 " class="widget-footer-top widget-footer %2$s">',
			'after_widget'  => '</div>',
			'class'=>'widget-target',
			'before_title'  => '<h3 class="top-footer-title collapse-trigger" data-parent="top-footer-3">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Pie arriba 4', 'ztgroup-theme' ),
			'id'            => 'footer-top-4',
			'description'   => esc_html__( 'Add widgets here.', 'ztgroup-theme' ),
			'before_widget' => '<div id="top-footer-4" class="widget-footer-top widget-footer %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="top-footer-title collapse-trigger" data-parent="top-footer-4">',
			'after_title'   => '</h3>',
			'class'=>'widget-target',
		)
	);

	register_sidebar(
		//center footer
		array(
			'name'          => esc_html__( 'Pie medio 1', 'ztgroup-theme' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'ztgroup-theme' ),
			'before_widget' => '<div id="footer-center-1 " class="widget-footer-center widget-footer %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-center-title collapse-trigger active" data-parent="footer-center-1">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Pie medio 2', 'ztgroup-theme' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'ztgroup-theme' ),
			'before_widget' => '<div id="footer-center-2" class="widget-footer-center widget-footer  %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-center-title collapse-trigger" data-parent="footer-center-2">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Pie medio 3', 'ztgroup-theme' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'ztgroup-theme' ),
			'before_widget' => '<div id="footer-center-3" class="widget-footer-center widget-footer %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-center-title collapse-trigger" data-parent="footer-center-3">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Pie medio 4', 'ztgroup-theme' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'ztgroup-theme' ),
			'before_widget' => '<div id="footer-center-4" class="widget-footer-center widget-footer %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-center-title collapse-trigger" data-parent="footer-center-2">',
			'after_title'   => '</h3>',
		)
	);

	//footer bottom
	register_sidebar(
		array(
			'name'          => esc_html__( 'Pie bajo 1', 'ztgroup-theme' ),
			'id'            => 'footer-bottom-1',
			'description'   => esc_html__( 'Add widgets here.', 'ztgroup-theme' ),
			'before_widget' => '<div id="footer-bottom-1" class="widget-footer-bottom %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Pie bajo 2', 'ztgroup-theme' ),
			'id'            => 'footer-bottom-2',
			'description'   => esc_html__( 'Add widgets here.', 'ztgroup-theme' ),
			'before_widget' => '<div id="footer-bottom-2" class="widget-footer-bottom %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Pie bajo 3', 'ztgroup-theme' ),
			'id'            => 'footer-bottom-3',
			'description'   => esc_html__( 'Add widgets here.', 'ztgroup-theme' ),
			'before_widget' => '<div id="footer-bottom-3" class="widget-footer-bottom %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ztgroup-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ztgroup-theme' ),
			'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'ztgroup_theme_widgets_init' );
/**
 * load svg
 *
 * @return void
 *
 */
function dmc_add_svg_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'dmc_add_svg_mime_types');

/**
 * Enqueue scripts and styles.
 */
function ztgroup_theme_scripts() {
	$parenthandle = 'parent-style';
	//'storefront-style', get_template_directory_uri() . '/style.css'
	
	wp_enqueue_style($parenthandle,get_template_directory_uri().'/style.css');
	wp_enqueue_style( 'ztgroup-theme-style', get_stylesheet_directory_uri().'/assets/css/styles.css', array($parenthandle,'storefront-woocommerce-style','storefront-child-style'), _S_VERSION );
	//wp_style_add_data( 'ztgroup-theme-style', 'rtl', 'replace' );
	wp_enqueue_script('ztgroup-theme-navigation', get_stylesheet_directory_uri().'/assets/js/scripts.js',array('jquery'),_S_VERSION,true );
	//wp_enqueue_script( 'ztgroup-theme-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ztgroup_theme_scripts' );

function ztgroup_theme_scripts_remove(){
	wp_dequeue_style('storefront-woocommerce-style-css');
};
add_action( 'wp_enqueue_scripts', 'ztgroup_theme_scripts_remove',9999 );

function vpsb_custom_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("https://www.vpsbasics.com/wp-content/litespeed/localres/code.jquery.com/jquery-3.4.1.min.js"), array(), _S_VERSION,true);
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'vpsb_custom_jquery');
/**
 * Implement the Custom Header feature.
 */
//require get_stylesheet_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_stylesheet_directory(). '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
//require get_stylesheet_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
/* if ( defined( 'JETPACK__VERSION' ) ) {
	require get_stylesheet_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
/*
if ( class_exists( 'WooCommerce' ) ) {
	require get_stylesheet_directory() . '/inc/woocommerce.php';
}
 */
