<?php
/**
 * Testimonials module.
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-mod-testimonials.php';

if ( ! function_exists( 'presscore_mod_testimonials' ) ) {

	function presscore_mod_testimonials() {
		return Presscore_Mod_Testimonials::instance();
	}

	presscore_mod_testimonials();

}

function the7_core_testimonials_get_no_avatar( $width = 60, $height = 60 ) {
	$svg = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="%d" height="%d" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
<path d="M30,1.5c-16.542,0-30,12.112-30,27c0,5.204,1.646,10.245,4.768,14.604c-0.591,6.537-2.175,11.39-4.475,13.689
	c-0.304,0.304-0.38,0.769-0.188,1.153C0.275,58.289,0.625,58.5,1,58.5c0.046,0,0.092-0.003,0.139-0.01
	c0.405-0.057,9.813-1.411,16.618-5.339C21.621,54.71,25.737,55.5,30,55.5c16.542,0,30-12.112,30-27S46.542,1.5,30,1.5z M16,32.5
	c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4S18.206,32.5,16,32.5z M30,32.5c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4
	S32.206,32.5,30,32.5z M44,32.5c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4S46.206,32.5,44,32.5z"/>
</svg>';

	return sprintf( $svg, $width, $height );
}
