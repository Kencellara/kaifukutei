<?php
/**
 * Shortcodes for this theme.
 *
 * @package BusinessPress
 */

/**
 * Display Container.
 */
function businesspress_shortcode_container( $atts, $content = null ) {
	return '<div class="container-wrapper"><div class="container-content">' . do_shortcode( $content ) . '</div></div>';
}
add_shortcode( 'container', 'businesspress_shortcode_container');

/**
 * Remove empty p tags.
 */
function businesspress_cleanup_shortcode_fix( $content ) {
	$array = array (
		'<p>[' => '[', 
		']</p>' => ']', 
		']<br />' => ']',
		']<br>' => ']'
	);
	$content = strtr($content, $array);
		return $content;
}
add_filter('the_content', 'businesspress_cleanup_shortcode_fix');