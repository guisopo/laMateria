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
          <div class="row">
            <?php if( is_active_sidebar( 'lamateria-sidebar-footer-1' )) : ?> 
              <div class="col-md-4 col-12"> 
                <?php dynamic_sidebar( 'lamateria-sidebar-footer-1' ); ?> 
              </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'lamateria-sidebar-footer-2' )) : ?> 
              <div class="col-md-4 col-22"> 
                <?php dynamic_sidebar( 'lamateria-sidebar-footer-2' ); ?> 
              </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'lamateria-sidebar-footer-3' )) : ?> 
              <div class="col-md-4 col-12"> 
                <?php dynamic_sidebar( 'lamateria-sidebar-footer-3' ); ?> 
              </div>
            <?php endif; ?>
          </div>
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