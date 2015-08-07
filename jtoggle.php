<?php
/*
Plugin Name: jToggle
Plugin URI: http://webmasterninja.wordpress.com
Description: A simple jQuery toggle content plugin. Use [jtoggle] content [/jtoggle] shortcode to use.
Version: 1.0
Author: Jayson Antipuesto
Author URI: http://webmasterninja.wordpress.com
License: GPL
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function jtoggle_shortcode( $atts, $content = null ) {
  $link_text = shortcode_atts( array(
		'linktext' => ' ...read more',
	), $atts );

  return '<span class="jtoggle-clicker">' . esc_attr($link_text['linktext']) . '</span><span class="jtoggle-content">' . do_shortcode($content) . '</span>';
}
add_shortcode( 'jtoggle', 'jtoggle_shortcode' );

function jtoggle_assets() {
	wp_enqueue_script( 'jtoggle', plugins_url( '/js/jtoggle.js' , __FILE__ ), array('jquery'), '1.0.0', true );
  wp_enqueue_style( 'jtoggle', plugins_url( '/css/jtoggle.css' , __FILE__ ), array(), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'jtoggle_assets' );

?>
