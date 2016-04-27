<?php
/**
 * FeeneyTwoColumn functions and definitions
 *
 * @package FeeneyTwoColumn
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'feeneytwocolumn_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function feeneytwocolumn_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on FeeneyTwoColumn, use a find and replace
	 * to change 'feeneytwocolumn' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'feeneytwocolumn', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'feeneytwocolumn' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'feeneytwocolumn_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // feeneytwocolumn_setup
add_action( 'after_setup_theme', 'feeneytwocolumn_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function feeneytwocolumn_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'feeneytwocolumn' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'feeneytwocolumn_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function feeneytwocolumn_scripts() {
	wp_enqueue_style( 'feeneytwocolumn-style', get_stylesheet_uri() );

	wp_enqueue_script( 'feeneytwocolumn-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'feeneytwocolumn-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'feeneytwocolumn_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Theme Customization API.
 */
add_action( 'customize_register' , 'feeneytwocolumn_options' );

function feeneytwocolumn_options( $wp_customize ) {
	// Add Sections
	$wp_customize->add_section( 
		'feeneytwocolumn_social_options', 
		array(
			'title'       => __( 'Social Media Link Settings', 'feeneytwocolumn' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Customize social media links here.', 'feeneytwocolumn'), 
		) 
	);

	$wp_customize->add_section( 
		'feeneytwocolumn_adsense', 
		array(
			'title'       => __( 'Google AdSense Settings', 'feeneytwocolumn' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('data-ad-client, i.e. ca-pub-################. Include the ca-pub- part.', 'feeneytwocolumn'), 
		) 
	);

	// Add Settings
	$wp_customize->add_setting( 'linkedin_url',
		array(
			'default' => '',
   			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_setting( 'twitter_url',
		array(
			'default' => '',
   			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_setting( 'facebook_url',
		array(
			'default' => '',
   			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_setting( 'google_url',
		array(
			'default' => '',
   			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_setting( 'skype_username',
		array(
			'default' => '',
   			'sanitize_callback' => 'esc_textarea'
		)
	);
	
	$wp_customize->add_setting( 'adsense_id',
		array(
			'default' => '',
   			'sanitize_callback' => 'esc_textarea'
		)
	);

	// Add Controls
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'linkedin_url_control',
		array(
			'label'    => __( 'LinkedIn URL (Include https:// or http://)', 'feeneytwocolumn' ), 
			'section'  => 'feeneytwocolumn_social_options',
			'settings' => 'linkedin_url',
			'type'     => 'url',
			'priority' => 10,
		)
	));
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'twitter_url_control',
		array(
			'label'    => __( 'Twitter URL (Include https:// or http://)', 'feeneytwocolumn' ), 
			'section'  => 'feeneytwocolumn_social_options',
			'settings' => 'twitter_url',
			'type'     => 'url',
			'priority' => 10,
		)
	));
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'facebook_url_control',
		array(
			'label'    => __( 'Facebook URL (Include https:// or http://)', 'feeneytwocolumn' ), 
			'section'  => 'feeneytwocolumn_social_options',
			'settings' => 'facebook_url',
			'type'     => 'url',
			'priority' => 10,
		)
	));
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'google_url_control',
		array(
			'label'    => __( 'Google+ URL (Include https:// or http://)', 'feeneytwocolumn' ), 
			'section'  => 'feeneytwocolumn_social_options',
			'settings' => 'google_url',
			'type'     => 'url',
			'priority' => 10,
		)
	));
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'skype_username_control',
		array(
			'label'    => __( 'Skype Username', 'feeneytwocolumn' ), 
			'section'  => 'feeneytwocolumn_social_options',
			'settings' => 'skype_username',
			'type'     => 'text',
			'priority' => 10,
		)
	));

	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'adsense_id_control',
		array(
			'label'    => __( 'AdSense ID', 'feeneytwocolumn' ), 
			'section'  => 'feeneytwocolumn_adsense',
			'settings' => 'adsense_id',
			'type'     => 'text',
			'priority' => 10,
		)
	));
}

/**
 * Add Read More link to the_excerpt.
 */
// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return ' [...]<br /><br /><a class="moretag" href="'. get_permalink($post->ID) . '">Continue reading <span class="meta-nav">&rarr;</span></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Fix double / long dash.
 */
add_filter( 'the_content' , 'mh_double_dash' , 99 );
function mh_double_dash( $text ) {
        return str_replace( '&#8211;', '--', $text );
}

/**
 * Enable HTML in Widget Headers
 */
if (include('custom_widgets.php')){
     add_action("widgets_init", "load_custom_widgets");
}
function load_custom_widgets() {
    unregister_widget("WP_Widget_Text");
    register_widget("WP_Widget_Text_Custom");
}