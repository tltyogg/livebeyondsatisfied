<?php

//* Register widget areas
genesis_register_sidebar( array(
	'id'          	=> 'home-top-slider',
	'name'        	=> __( 'Home - Top Slider', 'livebeyondsatisfied' ),
	'description' 	=> __( 'This is the top section of the home page.', 'livebeyondsatisfied' ),
) );
genesis_register_sidebar( array(
	'id'          	=> 'home-flexible',
	'name'        	=> __( 'Home - Flexible', 'livebeyondsatisfied' ),
	'description' 	=> __( 'This is the bottom section of the home page.', 'livebeyondsatisfied' ),
) );
genesis_register_sidebar( array(
	'id'          	=> 'category-index',
	'name'        	=> __( 'Category Index', 'livebeyondsatisfied' ),
	'description' 	=> __( 'This is the category index for the category index page template.', 'livebeyondsatisfied' ),
) );
genesis_register_sidebar( array(
	'id'          	=> 'nav-social-menu',
	'name'        	=> __( 'Nav Social Menu', 'livebeyondsatisfied' ),
	'description' 	=> __( 'This is the nav social menu section.', 'livebeyondsatisfied' ),
) );
genesis_register_sidebar( array(
	'id' 			=> 'between-posts-area',
	'name' 			=> __( 'Between Posts Area', 'livebeyondsatisfied' ),
	'description' 	=> __( 'This widget area is shows after every fourth blog post to display an ad.', 'livebeyondsatisfied' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'cta-widget',
	'name'			=> __( 'CTA Widget', 'livebeyondsatisfied' ),
	'description'	=> __( 'This is the call to action widget.', 'livebeyondsatisfied' ),
) );

