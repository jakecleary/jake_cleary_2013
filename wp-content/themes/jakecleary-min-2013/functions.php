<?php

//		Security
////////////////////////////////////////
remove_action('wp_head', 'wp_generator');

//		Actions
////////////////////////////////////////
add_action( 'wp_enqueue_scripts', 'jc_enqueue_scripts' );

function jc_enqueue_scripts() {
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' );
	wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/js/scripts.min.js', array( 'jquery' ) );
}

//		Custom Functions & Classes
////////////////////////////////////////
function jc_url() {

}

function jc_img( $img, $format ) {
	$path = bloginfo( 'template_directory' ) . '/img/' . $img . '.' . $format;
	echo $path; 
}

function custom_read_more() {
    return '... <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">more&nbsp;&raquo;</a>';
}

function excerpt( $limit ) {
    return wp_trim_words( get_the_excerpt(), $limit );
}


function grab_excerpt( $length = 55, $more = 'dots' ) {
	$content = get_the_content();
	
	if ( $more = 'dots' ) {
		$the_more = '...';
	} else {
		$the_more = '<a href="' . the_permalink() . '" title="' . the_title() . '"> read more...</a>';
	}

	$excerpt = wp_trim_words( get_the_content(), $length, $the_more );
	echo '<p class="excerpt">' . $excerpt . '</p>';
}