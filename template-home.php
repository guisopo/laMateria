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
          <li>
            <img src="slide1.jpg" />
          </li>
          <li>
            <img src="slide2.jpg" />
          </li>
          <li>
            <img src="slide3.jpg" />
          </li>
          <li>
            <img src="slide4.jpg" />
          </li>
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
