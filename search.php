<?php
/**
 * The template to show search results
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
        <h1><?php esc_html_e( 'Search results for', 'lamateria' ); ?>: <?php echo get_search_query(); ?></h1>
        <?php 
          get_search_form();
          // I there are any post
          if( have_posts() ):
            // Load them
            while ( have_posts() ) : the_post();
              
              get_template_part( 'template-parts/content', 'page' );

            endwhile;

            the_posts_pagination( array(
                'prev_text' => esc_html__( 'Previous' , 'lamateria'),
                'next_text' => esc_html__( 'Next' , 'lamateria')
            ) );

          else:
            ?>
              <p><?php esc_html_e( 'There are no results for your query.', 'lamateria' ); ?></p>
            <?php
          endif;
        ?>
      </div>
    </div>
  </main>
</div>

<?php 
  get_footer();
