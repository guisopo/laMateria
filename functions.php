<?php

/**
 *
 * Lamateria functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lamateria
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Enqueue scripts and styles.
 *
 * @since Lamateria 1.0
 *
 * @return void
 */
function lamateria_scripts() {
  // Bootstrap
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css', array(), '4.6.0', 'all' );
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.3.1', true);
  // Theme's main styles
  wp_enqueue_style( 'lamateria-style', get_stylesheet_uri(), array(), '1.0', 'all' );
  // Google Fonts
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );
  // Flexslider
  wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true);
  wp_enqueue_style( 'flexslisder-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );
  wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true);
}

add_action( 'wp_enqueue_scripts', 'lamateria_scripts' );


function lamateria_config() {

  register_nav_menus(
    array(
      'primary_menu' => __( 'Primary Menu', 'text_domain' ),
      'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
    )
  );

  add_theme_support( 'woocommerce', array(
    'thumbnail_image_width' => 255,
    'single_image_width'    => 255,
    'product_grid' 			=> array(
      'default_rows'    => 10,
      'min_rows'        => 5,
      'max_rows'        => 10,
      'default_columns' => 1,
      'min_columns'     => 1,
      'max_columns'     => 1,				
    )
  ));

  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
  add_theme_support( 'custom-logo', array(
    'height'      => 85,
    'width'       => 160,
    'flex_height' => true,
    'flex_width'  => true
  ) );

  if(!isset( $content_width ) ) {
    $content_width = 600;
  }
}

add_action( 'after_setup_theme', 'lamateria_config', 0);

require get_template_directory() . '/inc/wc-modifications.php';


/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'lamateria_woocommerce_header_add_to_cart_fragment' );

function lamateria_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
  <span class="items"><?php echo $woocommerce->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}