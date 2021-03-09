<?php

/**
 *
 * Lamateria functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lamateria
 */

function lamateria_scripts() {
  wp_enqueue_style( 'lamateria-style', get_stylesheet_uri(), array(), '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'lamateria_scripts' );