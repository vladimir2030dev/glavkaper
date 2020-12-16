<?php
/**
 * GlavKaper functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GlavKaper
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'glavkaper_setup' ) ) :
	function glavkaper_setup() {
		load_theme_textdomain( 'glavkaper', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'glavkaper' ),
			)
		);

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

		add_theme_support(
			'custom-background',
			apply_filters(
				'glavkaper_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

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
add_action( 'after_setup_theme', 'glavkaper_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function glavkaper_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'glavkaper_content_width', 640 );
}
add_action( 'after_setup_theme', 'glavkaper_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function glavkaper_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'glavkaper' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'glavkaper' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'glavkaper_widgets_init' );

function glavkaper_scripts() {
	wp_enqueue_style( 'glavkaper-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'glavkaper-bootstrap.min.css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'glavkaper-mains-tyle', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_style_add_data( 'glavkaper-style', 'rtl', 'replace' );

	wp_enqueue_script( 'glavkaper-bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'glavkaper_scripts' );

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/option-panel.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menuclass($ulclass) {
	return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
 }
 add_filter('wp_nav_menu','add_menuclass');
