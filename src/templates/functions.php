<?php
/**
 * Bare functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bare
 */

if ( ! function_exists( 'bare_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bare_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Bare, use a find and replace
		 * to change 'bare' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bare', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'bare' ),
		) );

		register_nav_menus( array(
			'product-category' => esc_html__( 'Product Category', 'bare' ),
		) );


		class Main_Menu_Walker extends Walker_Nav_Menu {

			// Displays start of an element. E.g '<li> Item Name'
				// @see Walker::start_el()
				function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
					$object = $item->object;
					$type = $item->type;
					$title = $item->title;
					$description = $item->description;
					$permalink = $item->url;

					$output .= "<li class='nav-item " .  implode(" ", $item->classes) . "' role='presentation'>";

					//Add SPAN if no Permalink
					if( $permalink && $permalink != '#' ) {
						$output .= '<a href="' . $permalink . '" class="nav-link">';
					} else {
						$output .= '<span>';
					}

					if ($title === 'Home') {
						$output .= '<i class="fab fa-apple logo"></i>';
					}
					if ($title === 'Bag') {
						$output .= '<i class="fa fa-shopping-bag"></i>';
					}

					if ($title !== 'Home' && $title !== 'Bag') {
						$output .= $title;
					}

					if( $description != '' && $depth == 0 ) {
						$output .= '<small class="description">' . $description . '</small>';
					}

					if( $permalink && $permalink != '#' ) {
						$output .= '</a>';
					} else {
						$output .= '</span>';
					}
				}
		}

		class Product_Category_Walker extends Walker_Nav_Menu {

			// Displays start of an element. E.g '<li> Item Name'
				// @see Walker::start_el()
				function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
					$object = $item->object;
					$type = $item->type;
					$title = $item->title;
					$description = $item->description;
					$permalink = $item->url;

					$output .= "<li class='nav-horizontal__item' role='presentation'>";

					//Add SPAN if no Permalink
					if( $permalink && $permalink != '#' ) {
						$output .= '<a href="' . $permalink . '" class="nav-horizontal__link">';
					} else {
						$output .= '<span>';
					}

					$output .= "<figure class='nav-horizontal__icon icon " .  implode(" ", $item->classes) . "'></figure>";
					$output .= '<span class="nav-horizontal__label" role="text">' . $title . '</span>';

					if( $description != '' && $depth == 0 ) {
						$output .= '<small class="description">' . $description . '</small>';
					}

					if( $permalink && $permalink != '#' ) {
						$output .= '</a>';
					} else {
						$output .= '</span>';
					}
				}
		}


















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
		add_theme_support( 'custom-background', apply_filters( 'bare_custom_background_args', array(
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
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bare_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bare_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bare_content_width', 640 );
}
add_action( 'after_setup_theme', 'bare_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bare_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bare' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bare' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bare_widgets_init' );


function footer_col_1_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer Col 1', 'footer_col_1' ),
        'id' => 'footer_col_1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
}
add_action( 'widgets_init', 'footer_col_1_widgets_init' );

function footer_col_2_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer Col 2', 'footer_col_2' ),
        'id' => 'footer_col_2',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
}
add_action( 'widgets_init', 'footer_col_2_widgets_init' );

function footer_col_3_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer Col 3', 'footer_col_3' ),
        'id' => 'footer_col_3',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
}
add_action( 'widgets_init', 'footer_col_3_widgets_init' );

function footer_col_4_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer Col 4', 'footer_col_4' ),
        'id' => 'footer_col_4',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
}
add_action( 'widgets_init', 'footer_col_4_widgets_init' );

function footer_bottom_links_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer Bottom Links', 'footer_bottom_links' ),
        'id' => 'footer_bottom_links',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );
}
add_action( 'widgets_init', 'footer_bottom_links_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function bare_scripts() {
	wp_enqueue_style( 'bare-style', get_stylesheet_uri() );

	//wp_enqueue_script( 'bare-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'bare-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		//wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bare_scripts' );

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
