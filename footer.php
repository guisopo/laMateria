<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lamateria
 */

$footer_menu_args = array(
  'theme_location'  => 'footer_menu'
);
?>
    <footer>
      <section class="footer-widgets">
        <div class="container">
          <div class="row">Footer Widets</div>
        </div>
      </section>
      <section class="copyright">
        <div class="container">
          <div class="row">
            <div class="copyright-text col-12 col-md-6">
              <?php echo get_theme_mod( 'set_copyright', 'Copyright '. date("Y") .' - All rights reserved' ) ?>
            </div>
            <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
              <?php 
                wp_nav_menu($footer_menu_args)
              ?>
            </nav>
          </div>
        </div>
      </section>
    </footer>
  </div><!-- #page -->
  <?php wp_footer(); ?>
</body>
</html>