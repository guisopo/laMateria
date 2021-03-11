<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lamateria
 */

$header_menu_args = array(
  'theme_location'  => 'primary_menu'
);

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' );  ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>
  <div id="page" class="site">

    <header>

      <section class="search">
        <div class="container">
          Search:
        </div>
      </section>

      <section class="top-bar">
        <div class="container">
          <div class="row">

            <div class="brand col-3">Logo</div>

            <div class="second-column col-9">
              <div class="account">Account</div>
              <nav class="main-menu navbar navbar-expand-md navbar-light" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                  wp_nav_menu( array(
                      'theme_location'    => 'primary_menu',
                      'depth'             => 3,
                      'container'         => 'div',
                      'container_class'   => 'collapse navbar-collapse',
                      'container_id'      => 'bs-example-navbar-collapse-1',
                      'menu_class'        => 'nav navbar-nav',
                      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'            => new WP_Bootstrap_Navwalker(),
                  ) );
                ?>
              </nav>
            </div>
            
          </div>
        </div>
      </section>

    </header>