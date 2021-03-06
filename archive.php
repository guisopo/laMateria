<?php
/**
 * The template for displaying archive files
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
      <div class="row">
        <div class="col-lg-9 col-md-8 col-12">
        <?php 

          the_archive_title( '<h1 class="article-title">', '</h1>');
          
          if( get_the_archive_description() ) :
            the_archive_description( '<p>', '</p>');
          endif;
          
          // I there are any post
          if( have_posts() ):
            // Load them
            while ( have_posts() ) : the_post();
            
            get_template_part( 'template-parts/content', 'archive' );

            endwhile;

            the_posts_pagination( array(
              'prev_text' => esc_html__( 'Previous' , 'lamateria'),
              'next_text' => esc_html__( 'Next' , 'lamateria')
            ) );

          else:
            ?>
              <p><?php _e( 'Nothing to display.', 'lamateria' ); ?></p>
            <?php
          endif;
        ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </main>
</div>

<?php 
  get_footer();
