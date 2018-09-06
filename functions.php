<?php
/**
 * rtCamp Assignment functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rtCamp_Assignment
 */

if ( ! function_exists( 'rtcamp_assignment_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rtcamp_assignment_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on rtCamp Assignment, use a find and replace
		 * to change 'rtcamp-assignment' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'rtcamp-assignment', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'rtcamp-assignment' ),
		) );
		register_nav_menus( array(
			'menu-2' => esc_html__( 'Footer Menu', 'rtcamp-assignment' ),
		) );
		register_nav_menus( array(
			'menu-3' => esc_html__( 'Social Link Menu', 'rtcamp-assignment' ),
		) );
		register_nav_menus( array(
			'menu-4' => esc_html__( 'Footer-Widget-Area-4 Menu', 'rtcamp-assignment' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'rtcamp_assignment_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo' );
		function themename_custom_logo_setup() {
		    $defaults = array(
		        'height'      => 100,
		        'width'       => 400,
		        'flex-height' => true,
		        'flex-width'  => true,
		        'header-text' => array( 'site-title', 'site-description' ),
		    );
		    add_theme_support( 'custom-logo', $defaults );
		}
		add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
	}
endif;
add_action( 'after_setup_theme', 'rtcamp_assignment_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rtcamp_assignment_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'rtcamp_assignment_content_width', 640 );
}
add_action( 'after_setup_theme', 'rtcamp_assignment_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rtcamp_assignment_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rtcamp-assignment' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'rtcamp-assignment' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-Widget-1', 'rtcamp-assignment' ),
		'id'            => 'footer-widget-area-1',
		'description'   => esc_html__( 'Add widgets here.', 'rtcamp-assignment' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-Widget-2', 'rtcamp-assignment' ),
		'id'            => 'footer-widget-area-2',
		'description'   => esc_html__( 'Add widgets here.', 'rtcamp-assignment' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-Widget-3', 'rtcamp-assignment' ),
		'id'            => 'footer-widget-area-3',
		'description'   => esc_html__( 'Add widgets here.', 'rtcamp-assignment' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-Widget-4', 'rtcamp-assignment' ),
		'id'            => 'footer-widget-area-4',
		'description'   => esc_html__( 'Add widgets here.', 'rtcamp-assignment' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rtcamp_assignment_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rtcamp_assignment_scripts() {

	wp_enqueue_style( 'rtcamp-assignment-style', get_stylesheet_uri() );

	wp_enqueue_script( 'rtcamp-assignment-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'rtcamp-assignment-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
/**
 * Jquery File.
 */
	wp_deregister_script('jquery');

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/lib/js/jquery.js');
/**
 * Post SLider Css and Js Files.
 */
	wp_enqueue_script( 'rtcamp-assignment-slippery-js', get_template_directory_uri() . '/lib/js/slippry.min.js', array(), '', true );

	wp_enqueue_style( 'rtcamp-assignment-slippery-css', get_template_directory_uri() . '/lib/css/slippryy.css' );
/**
 * Custom Css and Js Files.
 */
	wp_enqueue_style( 'rtcamp-assignment-custom-css', get_template_directory_uri() . '/lib/css/custom.css' );

	wp_enqueue_script( 'rtcamp-assignment-custom-js', get_template_directory_uri() . '/lib/js/custom.js', array(), '', true );
/**
 * Font-awesome File.
 */
	wp_enqueue_style( 'rtcamp-assignment-fontawesome', get_template_directory_uri() . '/lib/css/font-awesome.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rtcamp_assignment_scripts' );

/**
 * Implement the Custom Slider Post feature.
 */
require get_template_directory() . '/lib/custom-slider-post-type.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Enable Page Excerpt
 */
add_post_type_support('page','excerpt');
/**
 * Enable Custom Post Slider Excerpt
 */
add_post_type_support('slider','excerpt');
/**
 * Enable First Image of Custom Post Slider Content when the featured image is not available
 */
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];

	if(empty($first_img)){ //Defines a default image
	$first_img = "/images/default.jpg";
	}
	return $first_img;
}
/**
 * Custom Footer Edit
 */
function Custom_bottom_footer($wp_customize){
	$wp_customize -> add_section('bottom_footer_section', array(
	'title' => 'Footer Bottom Text'
	));
	
	$wp_customize -> add_setting('bottom_footer_setting', array(
	'default' => '&copy; 2011 rtPanel. All Rights Reserved. Designed by rtCamp'
	));
	
	$wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'Custom_bottom_footer', array(
	'label' => 'Footer Bottom Text',
	'section' => 'bottom_footer_section',
	'settings' => 'bottom_footer_setting'
	)));
}
add_action('customize_register', 'Custom_bottom_footer');
/**
 * Custom Footer Logo
 */
function Footer_logo($wp_customize){
	$wp_customize->add_section('Footer_logo_change', array(
	'title' => 'Footer Logo'
	));
	
	$wp_customize->add_setting('Footer_logo_setting' ,array(
	'default' => '<img class="defaultlogo" src=" '. get_template_directory_uri() .'/lib/images/default-logo.png" height="100" width="200">'
	));
	
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'Footer_logo', array(
	'label' => 'Change Footer Logo',
	'section' => 'Footer_logo_change',
	'settings' => 'Footer_logo_setting',
	'width' => 200,
	'height' => 75
	)));
}
add_action('customize_register','Footer_logo');

