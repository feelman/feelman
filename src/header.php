<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package feelman
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body>
	<header class="page-header">
	      <div class="page-header__logo">
					<a href="/">Feelman</a>
				</div>
	      <div class="page-header__nav  page-header__nav--closed  page-header__nav--nojs">
	        <button class="page-header__toggle" type="button">Открыть меню</button>
	        <nav class="main-nav">
						<?php
		          wp_nav_menu( array(
				        'theme_location' => 'primary',
								'container'       => 'false',
				        'menu_class'     => 'main-nav__items',
								'items_wrap'      => '<ul class="main-nav__items">%3$s</ul>',
		          ) );
           ?>
	        </nav>
	      </div>
	    </header>
