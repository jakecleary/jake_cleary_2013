<?php

//		Security
////////////////////////////////////////
remove_action('wp_head', 'wp_generator');

//		Actions
////////////////////////////////////////
add_action( 'wp_enqueue_scripts', 'jc_enqueue_scripts' );

function jc_enqueue_scripts() {
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/js/scripts.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.min.js', array( 'jquery' ) );
}

//		Custom Functions & Classes
////////////////////////////////////////
function jc_url() {

}

function jc_img( $img, $format ) {
	$path = bloginfo( 'template_directory' ) . '/img/' . $img . '.' . $format;
	echo $path; 
}

class jc_Excerpt {

	// Default length
	public static $length = 55;

	// Some nice defualts for friendly code
	public static $types = array(
		'short' => 10,
		'medium' => 55,
		'long' => 100
	);

	public static function length( $new_length = 55 ) {
		jc_Excerpt::$length = $new_length;

		add_filter( 'excerpt_length', 'jc_Excerpt::new_length' );

		jc_Excerpt::output();
	}

	// Tells WP the new length
	public static function new_length() {
		if ( isset( jc_Excerpt::$types[ jc_Excerpt::$length ] ) )
			return jc_Excerpt::$types[ jc_Excerpt::$length ];
		else
			return jc_Excerpt::$length;
	}

	// Echoes outthe excerpt
	public static function output() {
		the_excerpt();
	}

}

function jc_excerpt( $length = 55 ) {
	jc_Excerpt::length( $length );
}