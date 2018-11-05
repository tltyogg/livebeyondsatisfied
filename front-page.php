<?php
/**
 * This file adds the Landing Page to the Live Beyond Satisfied Theme.
 *
 * @package      livebeyondsatisfied
 * @link         http://restored316designs.com/themes
 * @author       Lauren Gaige // Restored 316 LLC
 * @copyright    Copyright (c) 2015, Restored 316 LLC, Released 02/03/2016
 * @license      GPL-2.0+
 */

/*
Template Name: Landing
*/

//* Add landing body class to the head
add_filter( 'body_class', 'livebeyondsatisfied_add_landing_body_class' );
function livebeyondsatisfied_add_landing_body_class( $classes ) {

	$classes[] = 'livebeyondsatisfied-landing';
	return $classes;

}

//* Force full width content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Remove site header elements
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
remove_action( 'genesis_before', 'widget_above_header'  );

//* Remove breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

//* Remove site footer widgets
remove_action( 'genesis_after', 'genesis_footer_widget_areas' );

//* Remove site footer elements
remove_action( 'genesis_after', 'genesis_footer_markup_open', 11 );
remove_action( 'genesis_after', 'genesis_do_footer', 12 );
remove_action( 'genesis_after', 'genesis_footer_markup_close', 14 ); 
remove_action( 'genesis_after', 'livebeyondsatisfied_footer_menu', 13 );

//* Remove widget area before content
remove_action( 'genesis_before_content', 'livebeyondsatisfied_cta_widget', 2  );

//* Add widget area to Landing Page
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('landing-page') ) : 
 
endif;

//* Run the Genesis loop
genesis();

