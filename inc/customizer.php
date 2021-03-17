<?php
/**
 *
 * Lamateria Theme Customizer
 *
 * @package Lamateria
 */

function lamateria_customizer( $wp_customize ) {
  //*---------------------------------------
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
  // Field 2 - Copyright Text Box
  $wp_customize->add_control(
    'set_copyright', array(
      'label'       => 'Copyright',
      'description' => 'Please, add your copyright information here',
      'section'     => 'section_copyright',
      'type'        => 'text'
    )
  );
  //*---------------------------------------
  // Slider Section
  $wp_customize->add_section(
    'section_slider', array(
      'title'       => 'Slider Settings',
      'description' => 'Slider Section'
    )
  );
  // Field 1 - Slider Page Number 1
  $wp_customize->add_setting(
    'set_slider_1', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint',
    )
  );
  $wp_customize->add_control(
    'set_slider_1', array(
      'label'       => 'Set slider 1',
      'description' => 'Set slider 1',
      'section'     => 'section_slider',
      'type'        => 'dropdown-pages'
    )
  );
  // Field 2 - Slider Button Text 1
  $wp_customize->add_setting(
    'set_slider_button_text_1', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  $wp_customize->add_control(
    'set_slider_button_text_1', array(
      'label'       => 'Button text for slider 1',
      'description' => 'Button text for slider 1',
      'section'     => 'section_slider',
      'type'        => 'text'
    )
  );
  // Field 3 - Slider Button Url 1
  $wp_customize->add_setting(
    'set_slider_button_url_1', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw',
    )
  );
  $wp_customize->add_control(
    'set_slider_button_url_1', array(
      'label'       => 'URL text for slider 1',
      'description' => 'URL text for slider 1',
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );
  // Field 4 - Slider Page Number 2
  $wp_customize->add_setting(
    'set_slider_2', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint',
    )
  );
  $wp_customize->add_control(
    'set_slider_2', array(
      'label'       => 'Set slider 2',
      'description' => 'Set slider 2',
      'section'     => 'section_slider',
      'type'        => 'dropdown-pages'
    )
  );
  // Field 5 - Slider Button Text 2
  $wp_customize->add_setting(
    'set_slider_button_text_2', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  $wp_customize->add_control(
    'set_slider_button_text_2', array(
      'label'       => 'Button text for slider 2',
      'description' => 'Button text for slider 2',
      'section'     => 'section_slider',
      'type'        => 'text'
    )
  );
  // Field 6 - Slider Button Url 2
  $wp_customize->add_setting(
    'set_slider_button_url_2', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw',
    )
  );
  $wp_customize->add_control(
    'set_slider_button_url_2', array(
      'label'       => 'URL text for slider 2',
      'description' => 'URL text for slider 2',
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );
  // Field 7 - Slider Page Number 3
  $wp_customize->add_setting(
    'set_slider_3', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint',
    )
  );
  $wp_customize->add_control(
    'set_slider_3', array(
      'label'       => 'Set slider 3',
      'description' => 'Set slider 3',
      'section'     => 'section_slider',
      'type'        => 'dropdown-pages'
    )
  );
  // Field 8 - Slider Button Text 3
  $wp_customize->add_setting(
    'set_slider_button_text_3', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  $wp_customize->add_control(
    'set_slider_button_text_3', array(
      'label'       => 'Button text for slider 3',
      'description' => 'Button text for slider 3',
      'section'     => 'section_slider',
      'type'        => 'text'
    )
  );
  // Field 9 - Slider Button Url 3
  $wp_customize->add_setting(
    'set_slider_button_url_3', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw',
    )
  );
  $wp_customize->add_control(
    'set_slider_button_url_3', array(
      'label'       => 'URL text for slider 3',
      'description' => 'URL text for slider 3',
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );

 //*---------------------------------------
  // Home Page Settings
  $wp_customize->add_section(
    'section_home_page', array(
      'title'       => 'Home Page Products and Blog Settings',
      'description' => 'Home Page Section'
    )
  );
  // Field 1 - Popular products title
  $wp_customize->add_setting(
    'set_popular_title', array(
      'type'              => 'theme_mod',
      'default'           => 'Popular products',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  $wp_customize->add_control(
    'set_popular_title', array(
      'label'       => 'New arrivals title',
      'description' => 'Title of section to display',
      'section'     => 'section_home_page',
      'type'        => 'text'
    )
  );
  // Field 2 - Popular Products Max Number
  $wp_customize->add_setting(
    'set_popular_max_num', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint',
    )
  );
  $wp_customize->add_control(
    'set_popular_max_num', array(
      'label'       => 'Popular Products Max Number',
      'description' => 'Popular Products Max Number',
      'section'     => 'section_home_page',
      'type'        => 'number'
    )
  );
  // Field 3 - Popular Products Max Column
  $wp_customize->add_setting(
    'set_popular_max_col', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint',
    )
  );
  $wp_customize->add_control(
    'set_popular_max_col', array(
      'label'       => 'Popular Products Max Columns',
      'description' => 'Popular Products Max Columns',
      'section'     => 'section_home_page',
      'type'        => 'number'
    )
  );

  // Field 4 - New arrivals products title
  $wp_customize->add_setting(
    'set_new_arrivals_title', array(
      'type'              => 'theme_mod',
      'default'           => 'New products',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  $wp_customize->add_control(
    'set_new_arrivals_title', array(
      'label'       => 'New arrivals title',
      'description' => 'Title of section to display',
      'section'     => 'section_home_page',
      'type'        => 'text'
    )
  );

  // Field 4 - New Arrivals Max Number
  $wp_customize->add_setting(
    'set_new_arrivals_max_num', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint',
    )
  );
  $wp_customize->add_control(
    'set_new_arrivals_max_num', array(
      'label'       => 'New Arrivals Max Number',
      'description' => 'New Arrivals Max Number',
      'section'     => 'section_home_page',
      'type'        => 'number'
    )
  );
  // Field 5 - New Arrivals Max Column
  $wp_customize->add_setting(
    'set_new_arrivals_max_col', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint',
    )
  );
  $wp_customize->add_control(
    'set_new_arrivals_max_col', array(
      'label'       => 'New Arrivals Max Columns',
      'description' => 'New Arrivals Max Columns',
      'section'     => 'section_home_page',
      'type'        => 'number'
    )
  );
  // Field 6 - Show deal of the week
  $wp_customize->add_setting(
    'set_deal_show', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'lamateria_sanitize_checkbox',
    )
  );
  $wp_customize->add_control(
    'set_deal_show', array(
      'label'       => 'Show deal of the week?',
      'section'     => 'section_home_page',
      'type'        => 'checkbox'
    )
  );

  // Field 1 - Deal of the week title
  $wp_customize->add_setting(
    'set_deal_title', array(
      'type'              => 'theme_mod',
      'default'           => 'Deal of the week',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  $wp_customize->add_control(
    'set_deal_title', array(
      'label'       => 'Deal of the week title',
      'description' => 'Title of section to display',
      'section'     => 'section_home_page',
      'type'        => 'text'
    )
  );
      
  // Deal of the Week
  $wp_customize->add_setting(
    'set_deal', array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint',
    )
  );
  $wp_customize->add_control(
    'set_deal', array(
      'label'       => 'Deal of the week',
      'description' => 'Product ID to display',
      'section'     => 'section_home_page',
      'type'        => 'number'
    )
  );

  // Field 1 - Blog Section Title
  $wp_customize->add_setting(
    'set_blog_title', array(
      'type'              => 'theme_mod',
      'default'           => 'News from our blog',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  $wp_customize->add_control(
    'set_blog_title', array(
      'label'       => 'Blog section title',
      'description' => 'Title of section to display',
      'section'     => 'section_home_page',
      'type'        => 'text'
    )
  );
}

add_action( 'customize_register', 'lamateria_customizer' );

function lamateria_sanitize_checkbox( $checked ) {
  return ( ( isset( $checked ) && $checked == true ) ? true : false );
}