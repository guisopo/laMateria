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
          <h1>Page not found</h1>
          <p>Unfortunately, the page you tried to reach does not exist on this site.</p>
        </header>
        <?php 
          the_widget( 'WP_Widget_Recent_Posts', array(
            'title'   => 'Take a look to our latest posts.',
            'number'  => 3
          ));
        ?>
      </div>
    </div>
  </main>
</div>

<?php 
  get_footer();
