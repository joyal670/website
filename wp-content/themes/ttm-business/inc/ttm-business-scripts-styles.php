<?php

/* For security */
if ( !defined( 'ABSPATH' ) ) {
	die( 'No direct access allowed' );
}


if( !function_exists('ttm_business_scripts_styles_14') ){
function ttm_business_scripts_styles_14() {
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0' );
	wp_enqueue_style( 'fontawesome-shims', get_template_directory_uri() . '/fonts/css/v4-shims.min.css', array(), '5.11.2' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fonts/css/all.min.css', array( 'fontawesome-shims' ), '5.11.2' );	
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.css', array(), '1.0.10' );
	wp_enqueue_style( 'ttm-business-style', get_stylesheet_uri(), array( 'bootstrap' ) );


	$thread_comments_option = get_option( 'thread_comments' );
	
	if ( is_singular() && comments_open() && $thread_comments_option ){
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );

	wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array( 'jquery' ), '1.0', true );
				
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/slicknav.min.js', array( 'jquery' ), '1.0.10' );

	wp_enqueue_script( 'ttm-business-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1.0', true );
		
	wp_enqueue_script( 'ttm-business-functions', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '1.0' , true );
		

	$query_args = array(
		'family'  => 'Roboto Slab:400,500,600,700|Roboto:400',
		'display' => 'swap',
	);
	wp_enqueue_style( 'ttm-business-google-fonts', add_query_arg( $query_args, '//fonts.googleapis.com/css' ), array(), null );

	wp_enqueue_style( 'ttm-business-main-style', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'ttm-business-responsive-style', get_template_directory_uri() . '/css/responsive.css');
}
}
add_action( 'wp_enqueue_scripts', 'ttm_business_scripts_styles_14', 14 );

