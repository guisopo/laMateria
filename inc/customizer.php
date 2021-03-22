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
      'title'       => __( 'Copyright Setting', 'lamateria' ),
      'description' => __( 'Copyright Section', 'lamateria' )
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
      'label'       => __( 'Copyright', 'lamateria' ),
      'description' => __( 'Please, add your copyright information here', 'lamateria' ),
      'section'     => 'section_copyright',
      'type'        => 'text'
    )
  );
  //*---------------------------------------
  // Slider Section
  $wp_customize->add_section(
    'section_slider', array(
      'title'       => __( 'Slider Settings', 'lamateria' ),
      'description' => __( 'Slider Section', 'lamateria' )
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
      'label'       => __( 'Set slider 1', 'lamateria' ),
      'description' => __( 'Set slider 1', 'lamateria' ),
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
      'label'       => __( 'Button text for slider 1', 'lamateria' ),
      'description' => __( 'Button text for slider 1', 'lamateria' ),
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
      'label'       => __( 'URL text for slider 1', 'lamateria' ),
      'description' => __( 'URL text for slider 1', 'lamateria' ),
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
      'label'       => __( 'Set slider 2', 'lamateria' ),
      'description' => __( 'Set slider 2', 'lamateria' ),
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
      'label'       => __( 'Button text for slider 2', 'lamateria' ),
      'description' => __( 'Button text for slider 2', 'lamateria' ),
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
      'label'       => __( 'URL text for slider 2', 'lamateria' ),
      'description' => __( 'URL text for slider 2', 'lamateria' ),
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
      'label'       => __( 'Set slider 3', 'lamateria' ),
      'description' => __( 'Set slider 3', 'lamateria' ),
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
      'label'       => __( 'Button text for slider 3', 'lamateria' ),
      'description' => __( 'Button text for slider 3', 'lamateria' ),
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
      'label'       => __( 'URL text for slider 3', 'lamateria' ),
      'description' => __( 'URL text for slider 3', 'lamateria' ),
      'section'     => 'section_slider',
      'type'        => 'url'
    )
  );

 //*---------------------------------------
  // Home Page Settings
  $wp_customize->add_section(
    'section_home_page', array(
      'title'       => __( 'Home Page Products and Blog Settings', 'lamateria' ),
      'description' => __( 'Home Page Section', 'lamateria' )
    )
  );
  // Field 1 - Popular products title
  $wp_customize->add_setting(
    'set_popular_title', array(
      'type'              => 'theme_mod',
      'default'           => __( 'Popular products', 'lamateria' ),
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  $wp_customize->add_control(
    'set_popular_title', array(
      'label'       => __( 'New arrivals title', 'lamateria' ),
      'description' => __( 'Title of section to display', 'lamateria' ),
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
      'label'       => __( 'Popular Products Max Number', 'lamateria' ),
      'description' => __( 'Popular Products Max Number', 'lamateria' ),
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
      'label'       => __( 'Popular Products Max Columns', 'lamateria' ),
      'description' => __( 'Popular Products Max Columns', 'lamateria' ),
      'section'     => 'section_home_page',
      'type'        => 'number'
    )
  );

  // Field 4 - New arrivals products title
  $wp_customize->add_setting(
    'set_new_arrivals_title', array(
      'type'              => 'theme_mod',
      'default'           => __( 'New products', 'lamateria' ),
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  $wp_customize->add_control(
    'set_new_arrivals_title', array(
      'label'       => __( 'New arrivals title', 'lamateria' ),
      'description' => __( 'Title of section to display', 'lamateria' ),
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
      'label'       => __( 'New Arrivals Max Number', 'lamateria' ),
      'description' => __( 'New Arrivals Max Number', 'lamateria' ),
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
      'label'       => __( 'New Arrivals Max Columns', 'lamateria' ),
      'description' => __( 'New Arrivals Max Columns', 'lamateria' ),
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
      'label'       => __( 'Show deal of the week?', 'lamateria' ),
      'section'     => __( 'section_home_page', 'lamateria' ),
      'type'        => 'checkbox'
    )
  );

  // Field 1 - Deal of the week title
  $wp_customize->add_setting(
    'set_deal_title', array(
      'type'              => 'theme_mod',
      'default'           => __( 'Deal of the week', 'lamateria' ),
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  $wp_customize->add_control(
    'set_deal_title', array(
      'label'       => __( 'Deal of the week title', 'lamateria' ),
      'description' => __( 'Title of section to display', 'lamateria' ),
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
      'label'       => __( 'Deal of the week', 'lamateria' ),
      'description' => __( 'Product ID to display', 'lamateria' ),
      'section'     => 'section_home_page',
      'type'        => 'number'
    )
  );

  // Field 1 - Blog Section Title
  $wp_customize->add_setting(
    'set_blog_title', array(
      'type'              => 'theme_mod',
      'default'           => __( 'News from our blog', 'lamateria' ),
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  $wp_customize->add_control(
    'set_blog_title', array(
      'label'       => __( 'Blog section title', 'lamateria' ),
      'description' => __( 'Title of section to display', 'lamateria' ),
      'section'     => 'section_home_page',
      'type'        => 'text'
    )
  );
}

add_action( 'customize_register', 'lamateria_customizer' );

function lamateria_sanitize_checkbox( $checked ) {
  return ( ( isset( $checked ) && $checked == true ) ? true : false );
}