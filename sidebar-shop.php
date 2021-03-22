<?php
/**
 * The template for displaying the sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lamateria
 */

if( is_active_sidebar( 'lamateria-sidebar-shop' ) ) : ?> 

    <?php  dynamic_sidebar( 'lamateria-sidebar-shop' ); ?> 

<?php endif;