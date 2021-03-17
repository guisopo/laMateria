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
            ?>
              <article <?php post_class(); ?>>
                <h2>
                  <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="meta">
                    <p>Published by <?php echo get_the_author_posts_link(); ?> | on <?php echo get_the_date(); ?></p>
                    <?php if( has_category() ) : ?>
                      <p>Categories: <span><?php the_category( ',' ); ?></span></p>
                    <?php endif; ?>
                    <?php if( has_tag() ) : ?>
                      <p>Tags: <span><?php the_tags('', ','); ?></span></p>
                    <?php endif; ?>
                </div>
                <div class="post-thumbnail">
                  <?php 
                    if( has_post_thumbnail() ) :
                      the_post_thumbnail( 'lamateria_blog', array( 'class' => 'img-fluid' ) );
                    endif; 
                  ?>
                </div>
                <div><?php the_excerpt(); ?></div>
              </article>
            <?php
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
