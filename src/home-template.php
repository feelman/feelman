<?php
/* Template Name: Home Page Template */

get_header(); ?>

<main>
    <article class="about-me">
      <h1 class="about-me__title">Feelman - HTML/CSS верстка сайтов. Натяжка верстки на Wordpress.</h1>
    </article>
    <article id="portfolio" class="portfolio">
      <h2 class="portfolio__title">Последние работы</h2>
      <section class="portfolio__items">
        <?php
          $args = array(
              'posts_per_page' => 4,
          );
          $query = new WP_Query( $args );
          ?>

          <?php
          while ( $query->have_posts() ) {
              $query->the_post();
              include 'template-parts/content-portfolio.php';
          }
        ?>
      </section>
    </article>

<?php
get_sidebar();
get_footer();
