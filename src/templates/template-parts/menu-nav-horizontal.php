<?php
/**
 * Template part for displaying a horizontal menu
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bare
 */
?>
<nav class="nav-horizontal nav-horizontal--apple">
  <?php
  $title = str_replace(" ","", strtolower(get_the_title()));

  wp_nav_menu( array(
    //'theme_location' => 'product-category',
    'menu' => 'product-category-' . $title,
    'items_wrap' => '<ul class="nav-horizontal__items">%3$s</ul>',
    'walker' => new Product_Category_Walker(),
    'container' => 'div',
    'container_class' => 'nav-horizontal__wrapper'
  ));
  ?>
</nav>
