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
              <div class="main-menu"><?php wp_nav_menu($header_menu_args); ?></div>
            </div>

          </div>
        </div>
      </section>

    </header>