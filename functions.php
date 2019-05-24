<?php
/**
 * butterfly functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package butterfly
 */

if ( ! function_exists( 'butterfly_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function butterfly_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on butterfly, use a find and replace
		 * to change 'butterfly' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'butterfly', get_template_directory() . '/languages' );

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

		add_image_size( 'butterfly-large', 540, 360, true );
		add_image_size( 'butterfly-medium', 320, 200, true );
		add_image_size( 'butterfly-small', 280, 175, true );
		add_image_size( 'butterfly-tiny', 120, 80, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'butterfly' ),
			'menu-news' => esc_html__( 'News', 'butterfly' ),
			'menu-donation' => esc_html__( 'Donation', 'butterfly' ),
			'menu-news-sidebar' => esc_html__( 'News Sidebar', 'butterfly' ),
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
		add_theme_support( 'custom-background', apply_filters( 'butterfly_custom_background_args', array(
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
			'height'      => 108,
			'width'       => 225,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'butterfly_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function butterfly_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'butterfly_content_width', 640 );
}
add_action( 'after_setup_theme', 'butterfly_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function butterfly_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'butterfly' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'butterfly' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Top post Sidebar', 'butterfly' ),
		'id'            => 'sidebar-add',
		'description'   => esc_html__( 'Add widgets here.', 'butterfly' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );	

	for($i=1;$i<=3;$i++){
		register_sidebar( array(
			'name'          => esc_attr__( 'Footer ', 'butterfly' ).($i),
			'id'            => 'footer-'.($i),
			'description'   => esc_attr__( 'Add widgets here to appear in your footer.', 'butterfly' ),
			'before_widget' => '<div id="%1$s" class="col-md-4 widget-box %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
	}

}
add_action( 'widgets_init', 'butterfly_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function butterfly_scripts() {
	wp_enqueue_style( 'butterfly-style', get_stylesheet_uri() );


wp_enqueue_style( 'butterfly-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0' );
wp_enqueue_style( 'butterfly-font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0' );


wp_enqueue_style( 'butterfly-maateen', "https://fonts.maateen.me/bangla/font.css?ver=4.9.10" );
wp_enqueue_style( 'butterfly-googleFonts', "https://fonts.googleapis.com/css?family=Raleway&display=swap" );



wp_enqueue_style( 'butterfly-global', get_stylesheet_directory_uri() . '/assets/css/global.css', array(), '1.0' );
wp_enqueue_style( 'butterfly-menu', get_stylesheet_directory_uri() . '/assets/css/menu.css', array(), '1.0' );


wp_enqueue_style( 'butterfly-single', get_stylesheet_directory_uri() . '/assets/css/single.css', array(), '1.0' );
wp_enqueue_style( 'butterfly-index', get_stylesheet_directory_uri() . '/assets/css/index.css', array(), '1.0' );


wp_enqueue_style( 'butterfly-footer', get_stylesheet_directory_uri() . '/assets/css/footer.css', array(), '1.0' );
wp_enqueue_style( 'butterfly-responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array(), '1.0' );


	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'butterfly-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script( 'butterfly-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.0.0', true);





	wp_enqueue_script( 'butterfly-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'butterfly-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'butterfly_scripts' );

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

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Widgets
 */
require get_template_directory() . '/inc/components/widgets/widgets.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

