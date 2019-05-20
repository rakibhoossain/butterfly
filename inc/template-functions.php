<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package butterfly
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function butterfly_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'butterfly_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function butterfly_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'butterfly_pingback_header' );


/**
 * Category list.
 */
if ( ! function_exists( 'butterfly_post_categories' ) ) :
	/**
	 * Displays categories.
	 */
	function butterfly_post_categories($multiple = false) {
		if ( 'post' === get_post_type() ) {
			if ($multiple) {
				echo get_the_category_list();
			}else{
				$category = get_the_category( get_the_ID() );
				if ( $category && !is_wp_error( $category ) ) :
					echo '<span><a href="'.get_category_link($category[0]->cat_ID).'">' . $category[0]->cat_name . '</a></span>';
				endif;
			}
		}
	}
endif;



/**
 * Get Breaking news types
 * 
 * @return array
 */
function butterfly_top_post_type() {
  $news = array();

  $news[ 'post' ]       = esc_html__( 'Posts', 'butterfly' );
  $news[ 'page' ]       = esc_html__( 'Pages', 'butterfly' );
  return $news;
}

/**
 * Get all pagess
 * 
 * @return array
 */
function butterfly_page_list() {
  $pages    = array();
  foreach ( get_pages() as $page ) {
    $pages[ $page->ID ] = $page->post_title;
  }

  return $pages;
}
/**
 * Get all posts
 * 
 * @return array
 */
function butterfly_post_list() {
  $pages    = array();
  foreach ( get_posts() as $page ) {
    $pages[ $page->ID ] = $page->post_title;
  }

  return $pages;
}