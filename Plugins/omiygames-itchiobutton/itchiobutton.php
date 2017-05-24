<?php
/*
 * Plugin Name: Omiya Games' Itch.io Button
 * Plugin URI: http://omiyagames.com
 * Description: Adds the [itchio-button] shortcode.
 * Version: 0.2
 * Author: Taro Omiya
 * Author URI: http://taroomiya.com
 * License: Taro Omiya
 **/

// Make sure to add in the script from itch.io
function append_script() {
	?>
   <script type="text/javascript" src="https://static.itch.io/api.js"></script>
   <?php
}
add_action( 'wp_head', 'append_script' );

// Add Shortcode
function itchio_button_shortcode( $atts , $content = null ) {
	static $i = 0;
	
	// Attributes
	$atts = shortcode_atts(
		array(
			'user' => '',
			'game' => '',
			'width' => '',
			'height' => '',
			'text' => 'Download'
		),
		$atts,
		'itchio-button'
	);
	
	// Generate output
	$output = '<button id="itchio-button' . $i . '">' . $atts['text'] . '</button>';
	$output .= "\n";
	$output .= '<script type="text/javascript">';
	$output .= "\n";
	$output .= 'Itch.attachBuyButton(document.getElementById("itchio-button' . $i . '"), {';
	$output .= "\n";
	if( !empty( $atts['width'] ) ) {
		$output .= 'width: "' . $atts['width'] . '",';
		$output .= "\n";
	}
	if( !empty( $atts['height'] ) ) {
		$output .= 'height: "' . $atts['height'] . '",';
		$output .= "\n";
	}
	$output .= 'user: "' . $atts['user'] . '",';
	$output .= "\n";
	$output .= 'game: "' . $atts['game'] . '"';
	$output .= "\n";
	$output .= '});';
	$output .= "\n";
	$output .= '</script>';
	$output .= "\n";
	
	// Increment static ID value
	$i++;
	
	// Return code
	return $output;

}
add_shortcode( 'itchio-button', 'itchio_button_shortcode' );
?>
