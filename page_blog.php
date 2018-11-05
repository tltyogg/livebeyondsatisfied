<?php
/**
 * livebeyondsatisfied.
 *
 * @package      livebeyondsatisfied
 * @link         http://restored316designs.com/themes
 * @author       Lauren Gaige // Restored 316 LLC
 * @copyright    Copyright (c) 2015, Restored 316 LLC, Released 02/03/2016
 * @license      GPL-2.0+
 */

/*
Template Name: Blog Page
*/

//* Add archive body class to the head
add_filter( 'body_class', 'livebeyondsatisfied_add_archive_body_class' );
function livebeyondsatisfied_add_archive_body_class( $classes ) {
   $classes[] = 'livebeyondsatisfied-archive';
   return $classes;
}

//* Remove Featured image (if set in Theme Settings)
add_filter( 'genesis_pre_get_option_content_archive_thumbnail', 'livebeyondsatisfied_no_post_image' );
function livebeyondsatisfied_no_post_image() {
	return '0';
}

//* Show Excerpts regardless of Theme Settings
add_filter( 'genesis_pre_get_option_content_archive', 'livebeyondsatisfied_show_excerpts' );
function livebeyondsatisfied_show_excerpts() {
	return 'excerpts';
}

//* Modify the length of post excerpts
add_filter( 'excerpt_length', 'livebeyondsatisfied_excerpt_length' );
function livebeyondsatisfied_excerpt_length( $length ) {
	return 60; // pull first 50 words
}

//* Modify the Excerpt read more link
add_filter('excerpt_more', 'livebeyondsatisfied_new_excerpt_more');
function livebeyondsatisfied_new_excerpt_more($more) {
	return '... <a class="more-link" href="' . get_permalink() . '">View Post</a>';
}

//* Make sure content limit (if set in Theme Settings) doesn't apply
add_filter( 'genesis_pre_get_option_content_archive_limit', 'livebeyondsatisfied_no_content_limit' );
function livebeyondsatisfied_no_content_limit() {
	return '0';
}

//* Display centered wide featured image for First Post and left aligned thumbnail for the next five
add_action( 'genesis_entry_header', 'livebeyondsatisfied_show_featured_image', 8 );
function livebeyondsatisfied_show_featured_image() {
	if ( ! has_post_thumbnail() ) {
		return;
	}

	global $wp_query;

	if( ( $wp_query->current_post <= 0 ) ) {
		$image_args = array(
			'size' => 'large-featured',
			'attr' => array(
				'class' => 'aligncenter',
			),
		);
	
	} else {
		$image_args = array(
			'size' => 'blog-square-featured',
			'attr' => array(
				'class' => 'alignleft',
			),
		);
	}

	$image = genesis_get_image( $image_args );

	echo '<div class="home-featured-image"><a href="' . get_permalink() . '">' . $image .'</a></div>';
}

remove_action( 'genesis_before', 'widget_above_header'  );

//* Add widget area to Landing Page
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('landing-page') ) : 
 
endif;

//* Remove entry meta
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );


genesis();