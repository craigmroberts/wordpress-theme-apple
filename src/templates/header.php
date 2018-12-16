<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bare
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bare' ); ?></a>

	<div class="navbar navbar--apple fixed-top"><div class="navbar__logo"><a href="#" class="nav-link"><i class="fab fa-apple logo"></i></a></div>
			<nav class="navbar navbar-dark navbar-expand-md bg-dark">
					<div class="container"><button class="navbar-toggler" data-toggle="collapse" data-target="#menu"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"><i class="la la-navicon"></i></span></button>

							<?php
							wp_nav_menu( array(
								'menu' => 'main',
								'items_wrap' => '<ul id="%1$s<" class="nav navbar-nav flex-grow-1 justify-content-between">%3$s</ul>',
								'walker' => new IBenic_Walker(),
								'container' => 'div',
								'container_id' => 'menu',
								'container_class' => 'collapse navbar-collapse'
							));
							?>
					</div>
			</nav>
	</div>

	<div id="content" class="site-content">
