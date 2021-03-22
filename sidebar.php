<?php
/**
 * The template for displaying the sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lamateria
 */

if( is_active_sidebar( 'lamateria-sidebar-1' ) ) : ?> 

  <aside class="col-lg-3 col-md-4 col-12 h-100"> 
    <?php  dynamic_sidebar( 'lamateria-sidebar-1' ); ?> 
  </aside> 

<?php endif;