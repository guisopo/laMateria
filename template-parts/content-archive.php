<?php
/**
 * Template part for displaying archive posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lamateria
 */

?>

<article <?php post_class(); ?>>
  <h2>
    <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
  <div class="meta">
      <p><?php esc_html_e( 'Published by', 'lamateria'); ?> <?php echo get_the_author_posts_link(); ?> <?php esc_html_e( 'on', 'lamateria' ); ?> <?php echo esc_html( get_the_date() ); ?></p>
      <?php if( has_category() ) : ?>
        <p><?php esc_html_e( 'Categories ', 'lamateria' ); ?>: <span><?php the_category( ',' ); ?></span></p>
      <?php endif; ?>
      <?php if( has_tag() ) : ?>
        <p><?php esc_html_e( 'Tags', 'lamateria' ); ?>: <span><?php the_tags('', ','); ?></span></p>
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