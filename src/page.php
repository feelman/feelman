<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package feelman
 */

get_header(); ?>

<main>
		<article class="about">
			<?php the_post(); ?>
			<h1 class="about__title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>

<?php
get_sidebar();
get_footer();
