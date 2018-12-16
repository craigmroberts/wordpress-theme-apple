<?php /* Template Name: Product Category */

  get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      	<header class="entry-header">
      		<?php the_title( '<h1 class="entry-title visuallyhidden">', '</h1>' ); ?>
      	</header><!-- .entry-header -->
      	<?php get_template_part( 'template-parts/menu-nav-horizontal', 'none' ); ?>
      	<?php bare_post_thumbnail(); ?>

      	<div class="entry-content">
      		<?php
      		the_content();

      		wp_link_pages( array(
      			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bare' ),
      			'after'  => '</div>',
      		) );
      		?>
      	</div><!-- .entry-content -->

      	<?php if ( get_edit_post_link() ) : ?>
      		<footer class="entry-footer">
      			<?php
      			edit_post_link(
      				sprintf(
      					wp_kses(
      						/* translators: %s: Name of current post. Only visible to screen readers */
      						__( 'Edit <span class="screen-reader-text">%s</span>', 'bare' ),
      						array(
      							'span' => array(
      								'class' => array(),
      							),
      						)
      					),
      					get_the_title()
      				),
      				'<span class="edit-link">',
      				'</span>'
      			);
      			?>
      		</footer><!-- .entry-footer -->
      	<?php endif; ?>
      </article><!-- #post-<?php the_ID(); ?> -->


    </main><!-- #main -->
  </div><!-- #primary -->

<?php
endwhile; // End of the loop.
get_footer();
