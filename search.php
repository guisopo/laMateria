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
        <h1>Search results for: <?php echo get_search_query(); ?></h1>
        <?php 
          get_search_form();
          // I there are any post
          if( have_posts() ):
            // Load them
            while ( have_posts() ) : the_post();
              
              get_template_part( 'template-parts/content', 'page' );

            endwhile;

            the_posts_pagination( array(
              'prev_text' => 'Previous',
              'next_text' => 'Next'
            ) );

          else:
            ?>
              <p>There are nor results for your query.</p>
            <?php
          endif;
        ?>
      </div>
    </div>
  </main>
</div>

<?php 
  get_footer();
