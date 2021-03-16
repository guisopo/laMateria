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
            $j = 1;

            if( $slider_loop -> have_posts() ) :
              while( $slider_loop -> have_posts() ) : $slider_loop -> the_post();
              ?>
                <li>
                  <?php the_post_thumbnail('lamateria_slider', array( 'class' => 'img-fluid' ) ); ?>
                  <div class="container">
                    <div class="slider-details-container">
                      <div class="slider-title">
                        <h1><?php the_title(); ?></h1>
                      </div>
                      <div class="slider-description">
                        <div class="subtitle"><?php the_content(); ?></div>
                        <a class="link" href="<?php echo $slider_button_url[$j]; ?>">
                          <?php echo $slider_button_text[$j]; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
              <?php
              $j++;
              endwhile;
              wp_reset_postdata();
            endif;
          ?>
        </ul>
      </div>
    </section>


    <?php 
      $popular_limit =  get_theme_mod( 'set_popular_max_num', 4 );
      $popular_columns =  get_theme_mod( 'set_popular_max_col', 4 );
      $arrival_limit =  get_theme_mod( 'set_new_arrivals_max_num', 4 );
      $arrival_columns =  get_theme_mod( 'set_new_arrivals_max_col', 4 );
    ?>

    <section class="popular-products">
      <div class="container">
        <h2>Popular products</h2>
        <?php echo do_shortcode( '[products limit = " ' . $popular_limit . ' " columns=" ' . $popular_columns . ' " orderby="popularity"]' ); ?>
      </div>
    </section>
    
    <section class="popular-products">
      <div class="container">
        <h2>New Arrivals</h2>
        <?php echo do_shortcode( '[products limit = " ' . $arrival_limit . ' " columns=" ' . $arrival_columns . ' " orderby="date"]' ); ?>
      </div>
    </section>

    <section class="deal-of-the-week">
      <div class="container">
      <h2>Deal of the week</h2>
        <div class="row d-flex align-items-center">
            <div class="deal-img col-md-6 col-12 ml-auto text-center">
            
            </div>
            <div class="deal-desc col-md-6 col-12 mr-auto text-center">
            
            </div>
        </div>
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
