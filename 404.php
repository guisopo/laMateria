<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lamateria
 */

  get_header();
?>

<div class="content-area">
  <main>
    <div class="container">
      <div class="error-404">
        <header>
          <h1><?php _e( 'Page not found', 'lamateria' ); ?></h1>
          <p><?php _e( 'Unfortunately, the page you tried to reach does not exist on this site.', 'lamateria' ); ?></p>
        </header>
        <?php 
          the_widget( 'WP_Widget_Recent_Posts', array(
            'title'   => __( 'Take a look to our latest posts.', 'lamateria' ),
            'number'  => 3
          ));
        ?>
      </div>
    </div>
  </main>
</div>

<?php 
  get_footer();
