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
							<div class="collapse navbar-collapse" id="menu">
									<ul class="nav navbar-nav flex-grow-1 justify-content-between">
											<li class="nav-item d-none d-xs-block d-md-block" role="presentation"><a class="nav-link" href="#"><i class="fab fa-apple logo"></i></a></li>
											<li class="nav-item" role="presentation"><a class="nav-link" href="#">Mac</a></li>
											<li class="nav-item" role="presentation"><a class="nav-link" href="#">iPad</a></li>
											<li class="nav-item" role="presentation"><a class="nav-link" href="#">iPhone</a></li>
											<li class="nav-item" role="presentation"><a class="nav-link" href="#">Watch</a></li>
											<li class="nav-item" role="presentation"><a class="nav-link" href="#">TV</a></li>
											<li class="nav-item" role="presentation"><a class="nav-link" href="#">Music</a></li>
											<li class="nav-item" role="presentation"><a class="nav-link" href="#">Support</a></li>
											<li class="nav-item d-none d-xs-block d-md-block" role="presentation"><a class="nav-link" href="#"><i class="icon ion-ios-search-strong"></i></a></li>
											<li class="nav-item d-none d-xs-block d-md-block" role="presentation"><a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i></a></li>
									</ul>
							</div>
					</div>
			</nav>
	</div>

	<div id="content" class="site-content">
