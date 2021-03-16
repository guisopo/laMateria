<?php
/*
Template Name: Home Page
*/

get_header();
?>

<div class="content-area">
  <main>
    <section class="slider">
      <div class="flexslider">
        <ul class="slides">
          <?php
            // Getting data from Customizer to display the Slider section
            for ($i=1; $i < 4; $i++) { 
              $slider_page[$i] = get_theme_mod('set_slider_' . $i);
              $slider_button_text[$i] = get_theme_mod('set_slider_button_text_' . $i);
              $slider_button_url[$i] = get_theme_mod('set_slider_button_url_' . $i);
            }
            $args = array(
              'post_type'     =>  'page',
              'post_per_page' =>  3,
              'post__in'      =>  $slider_page,
              'orderby'       =>  'post__in'
            );

            $slider_loop = new WP_Query($args);

            if( $slider_loop -> have_posts() ) :
              while( $slider_loop -> have_posts() ) : $slider_loop -> the_post();
              ?>
                <li>
                hola
                  <?php the_post_thumbnail('lamateria_slider', array( 'class' => 'img-fluid' ) ); ?>
                </li>
              <?php
              endwhile;
              wp_reset_postdata();
            endif;
          ?>
        </ul>
      </div>
    </section>
    <section class="popular-products">
      <div class="container">
        <div class="row">Popular Products</div>
      </div>
    </section>
    <section class="popular-products">
      <div class="container">
        <div class="row">New Arrivals</div>
      </div>
    </section>
    <section class="deal-of-the-week">
      <div class="container">
        <div class="row">Deal of the week</div>
      </div>
    </section>
    <section class="blog">
      <div class="container">
        <div class="row">
          <?php 
            // I there are any post
            if( have_posts() ):
              // Load them
              while ( have_posts() ) : the_post();
              ?>
                <article>
                  <h2><?php the_title(); ?></h2>
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
    </section>
  </main>
</div>

<?php 
  get_footer();
