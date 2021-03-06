<?php
/*
Plugin Name:  YouTube oEmbed Add Custom Parameters
Plugin URI:   https://github.com/yavisht/WordPress-YouTube-oEmbed-Additional-Parameters
Description:  Add custom parameters to YouTube embeds in WordPress
Version:      2
Author:       Yavisht Katgara
Author URI:   http://www.ykat.com.au
*/

/**
 * Add custom parameters to YouTube embeds in WordPress
 *
 * @link https://developers.google.com/youtube/player_parameters#Parameters
 */

function yk_push_oembed_params_youtube( $html, $url, $args ) {
	return str_replace( '?feature=oembed', '?feature=oembed&modestbranding=1&showinfo=0&rel=0', $html );
}
add_filter( 'oembed_result', 'yk_push_oembed_params_youtube', 10, 3 );
