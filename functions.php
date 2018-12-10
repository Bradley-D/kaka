<?php
/**
 * kaka functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kaka
 */

if ( ! function_exists( 'kaka_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kaka_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kaka, use a find and replace
		 * to change 'kaka' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kaka', trailingslashit( get_template_directory() ) . 'languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		// Add theme support for visual editor style with editor-style.css
		add_editor_style( trailingslashit( get_template_directory_uri() ) . 'css/editor-style.css' );

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
			'menu-1' => esc_html__( 'Primary', 'kaka' ),
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
		add_theme_support( 'custom-background', apply_filters( 'kaka_custom_background_args', array(
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
		add_theme_support( 'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			) 
		);

		/**
		 * Gutenberg: Default block styles.
		 *
		 * @since 1.0.4
		 * @link  https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#default-block-styles
		 */
		add_theme_support( 'wp-block-styles' );

		/**
		 * Gutenberg: Wide align images.
		 *
		 * @since 1.0.4
		 * @link  https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#wide-alignment
		 */
		add_theme_support( 'align-wide' );

		/**
		 * Gutenberg: Responsive embedded content.
		 *
		 * @since 1.0.4
		 * @link  https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#responsive-embedded-content
		 */
		add_theme_support( 'responsive-embeds' );

		/**
		 * Gutenberg: Editor styles.
		 *
		 * @since 1.0.4
		 * @link  https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#editor-styles
		 */
		add_theme_support( 'editor-styles' );
		
		/**
		 * Gutenberg: Block font size.
		 *
		 * @since 1.0.4
		 * @link  https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#block-font-sizes
		 */
		add_theme_support( 'editor-font-sizes',
			array(
				array(
					'name'      => __( 'small', 'kaka' ),
					'shortName' => __( 'S', 'kaka' ),
					'size'      => 12,
					'slug'      => 'small'
				),
				array(
					'name'      => __( 'regular', 'kaka' ),
					'shortName' => __( 'M', 'kaka' ),
					'size'      => 16,
					'slug'      => 'regular'
				),
				array(
					'name'      => __( 'large', 'kaka' ),
					'shortName' => __( 'L', 'kaka' ),
					'size'      => 36,
					'slug'      => 'large'
				),
				array(
					'name'      => __( 'larger', 'kaka' ),
					'shortName' => __( 'XL', 'kaka' ),
					'size'      => 50,
					'slug'      => 'larger'
				)
			)
		);

		 /**
		 * Gutenberg: Block Color Palettes.
		 *
		 * @since 1.0.4
		 * @link  https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#block-color-palettes
		 */
		add_theme_support( 'editor-color-palette',
			array(
				array(
					'name'  => __( 'White', 'kaka' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
				array(
					'name'  => __( 'Black', 'kaka' ),
					'slug'  => 'black',
					'color' => '#121212',
				),
				array(
					'name'  => __( 'Dark Blue', 'kaka' ),
					'slug'  => 'dark-blue',
					'color' => '#0073AA',
				),
				array(
					'name'  => __( 'Medium Blue', 'kaka' ),
					'slug'  => 'medium-blue',
					'color' => '#00A0D2',
				),
				array(
					'name'  => __( 'Ultra Dark Gray', 'kaka' ),
					'slug'  => 'ultra-dark-gray',
					'color' => '#191E23',
				),
				array(
					'name'  => __( 'Dark Gray', 'kaka' ),
					'slug'  => 'dark-gray',
					'color' => '#23282D',
				),
				array(
					'name'  => __( 'Base Gray', 'kaka' ),
					'slug'  => 'base-gray',
					'color' => '#32373C',
				),

				array(
					'name'  => __( 'Dark Silver Gray', 'kaka' ),
					'slug'  => 'dark-silver-gray',
					'color' => '#82878C',
				),
				array(
					'name'  => __( 'Silver Gray', 'kaka' ),
					'slug'  => 'silver-gray',
					'color' => '#A0A5AA',
				),
				array(
					'name'  => __( 'Light Silver Gray', 'kaka' ),
					'slug'  => 'light-silver-gray',
					'color' => '#B4B9BE',
				),
				array(
					'name'  => __( 'Red', 'kaka' ),
					'slug'  => 'red',
					'color' => '#DC3232',
				),
				array(
					'name'  => __( 'Orange', 'kaka' ),
					'slug'  => 'orange',
					'color' => '#F56E28',
				),
				array(
					'name'  => __( 'Yellow', 'kaka' ),
					'slug'  => 'yellow',
					'color' => '#FFB900',
				),
				array(
					'name'  => __( 'Green', 'kaka' ),
					'slug'  => 'green',
					'color' => '#46B450',
				),
				array(
					'name'  => __( 'Purple', 'kaka' ),
					'slug'  => 'purple',
					'color' => '#826EB4',
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'kaka_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kaka_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'kaka_content_width', 1140 );
}
add_action( 'after_setup_theme', 'kaka_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kaka_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kaka' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kaka' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kaka_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kaka_scripts_styles() {
	wp_enqueue_style( 'kaka-min-style', trailingslashit( get_template_directory_uri() ) . 'css/style.min.css' );
	wp_enqueue_style( 'kaka-style', get_stylesheet_uri(), array(), '1.0', 'all' );
	wp_enqueue_script( 'kaka-navigation', trailingslashit( get_template_directory_uri() ) . 'js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'kaka-skip-link-focus-fix', trailingslashit( get_template_directory_uri() ) . 'js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kaka_scripts_styles' );

/**
 * Implement the Custom Header feature.
 */
require trailingslashit( get_template_directory() ) . 'inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require trailingslashit( get_template_directory() ) . 'inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require trailingslashit( get_template_directory() ) . 'inc/template-functions.php';

/**
 * Customizer additions.
 */
require trailingslashit( get_template_directory() ) . 'inc/customizer.php';

/**
 * Load Kaka theme functions.
 */
require trailingslashit( get_template_directory() ) . 'inc/kaka-theme-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require trailingslashit( get_template_directory() ) . 'inc/jetpack.php';
}
