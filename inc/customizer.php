<?php
/**
 *
 * Lamateria Theme Customizer
 *
 * @package Lamateria
 */

function lamateria_customizer( $wp_customize ) {
  // Copyright Section
  $wp_customize->add_section(
    'section_copyright', array(
      'title'       => 'Copyright Setting',
      'description' => 'Copyright Section'
    )
  );
  // Field 1 - Copyright Text Box
  $wp_customize->add_setting(
    'set_copyright', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  // Field 1 - Copyright Text Box
  $wp_customize->add_control(
    'set_copyright', array(
      'label'       => 'Copyright',
      'description' => 'Please, add your copyright information here',
      'section'     => 'section_copyright',
      'type'        => 'text'
    )
  );
}

add_action( 'customize_register', 'lamateria_customizer' );