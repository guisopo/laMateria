<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lamateria
 */

  get_header();
?>

<div class="content-area">
  <main>
    <div class="container">
      <div class="row">
        <?php 
          while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if( comments_open() || get_comments_number() ):
              comments_template();
            endif;

          endwhile;
        ?>
      </div>
    </div>
  </main>
</div>

<?php 
  get_footer();
