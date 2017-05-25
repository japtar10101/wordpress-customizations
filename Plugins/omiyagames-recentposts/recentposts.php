<?php
/*
 * Plugin Name: Omiya Games' Recent Posts
 * Plugin URI: http://omiyagames.com
 * Description: Adds the [recent-posts] shortcode.
 * Version: 0.1
 * Author: Taro Omiya
 * Author URI: http://taroomiya.com
 * License: Taro Omiya
 **/

// Add Shortcode
function recent_posts_shortcode( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'posts' => '3',
		),
		$atts,
		'recent-posts'
	);

	// Query
	$the_query = new WP_Query( array ( 'posts_per_page' => $atts['posts'] ) );
	
	// Posts
	$output = '<div class="recent-posts">';
	$output .= "\n";
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		
		// Setup the article tag
		$output .= '<article class="post type-post status-publish format-standard hentry">';
		$output .= "\n";
		
		// Setup the header tag
		$output .= '<header class="entry-header latest-post">';
		$output .= "\n";
		
		if(has_post_thumbnail()) {
			// Setup the post link
			$output .= '<a href="';
			$output .= get_permalink();
			$output .= '">';
			
			// Setup the post feature image, if any
			$output .= get_the_post_thumbnail();
			$output .= '</a>';
			$output .= "\n";
		}
		
		// Setup the post title
		$output .= '<h2 class="portfolio-entry-title">';
		
		// Setup the post link
		$output .= '<a href="';
		$output .= get_permalink();
		$output .= '" rel="bookmark">';
		
		$output .= get_the_title();
		$output .= '</a>';
		$output .= '</h2>';
		$output .= "\n";
		
		// Setup the meta tag
		$output .= '<div class="entry-meta">';
		$output .= '<span class="screen-reader-text">Posted on</span> ';
		$output .= get_the_date();
		$output .= '</div>';
		$output .= "\n";
		
		$output .= '</header>';
		$output .= "\n";
		
		// Setup the post excerpt
		$output .= '<div class="entry-summary">';
		$output .= get_the_excerpt();
		$output .= '</div>';
		$output .= "\n";
		
		$output .= '</article>';
		$output .= "\n";
	endwhile;
	$output .= '</div>';
	
	// Reset post data
	wp_reset_postdata();
	
	// Return code
	return $output;

}
add_shortcode( 'recent-posts', 'recent_posts_shortcode' );
?>
