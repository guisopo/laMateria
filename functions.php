<?php

/**
 *
 * Lamateria functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lamateria
 */

/**
 * Enqueue scripts and styles.
 *
 * @since Lamateria 1.0
 *
 * @return void
 */
function lamateria_scripts() {
  wp_enqueue_style( 'lamateria-style', get_stylesheet_uri(), array(), '1.0', 'all' );
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.6.0', 'all' );
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.3.1', true);
}

add_action( 'wp_enqueue_scripts', 'lamateria_scripts' );


function lamateria_config() {
  register_nav_menus(
    array(
      'lamateria_main_menu' => 'Lamateria Main Menu',
      'lamateria_footer_menu' => 'Lamateria Footer Menu',
    )
  );
}

add_action( 'after_setup_theme', 'lamateria_config', 0);