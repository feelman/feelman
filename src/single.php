<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package feelman
 */

get_header(); ?>

<main>
      <article class="page">
        <div class="page__info">
					<?php the_post(); ?>
          <div class="page__info-column">
            <h1 class="page__title"><?php the_title(); ?></h1>
            <p class="page__description">
              <?php the_content(); ?>
            </p>
          </div>
          <div class="page__info-column">
            <h2 class="page__title  page__title--second">Инструменты</h2>
            <ul class="page__description  page__description--skills">
              <?php the_field('instruments'); ?>
            </ul>
          </div>
          <div class="page__info-column">
            <h2 class="page__title  page__title--second">Посмотреть</h2>
            <ul class="page__description  page__description--skills">
              <?php the_field('urls'); ?>
            </ul>
          </div>
        </div>
        <img class="page__photo" src="<?php the_field('image_portfolio'); ?>">
      </article>

<?php
get_sidebar();
get_footer();
