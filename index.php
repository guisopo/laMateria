<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
        <?php 
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
          else:
            ?>
              <p>Nothing to display.</p>
            <?php
          endif;
        ?>
      </div>
    </div>
  </main>
</div>

<?php 
  get_footer();
