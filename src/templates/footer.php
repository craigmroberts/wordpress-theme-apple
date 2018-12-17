<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bare
 */

?>

	</div><!-- #content -->


	<footer class="page-footer">
			<div class="container">
					<section class="foot-notes">
							<p>* Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</section>
					<section class="footer__directory">
							<div class="row">
									<div class="col-md-3">
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_col_1') ) : endif; ?>
									</div>
									<div class="col-md-3">
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_col_2') ) : endif; ?>
									</div>
									<div class="col-md-3">
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_col_3') ) : endif; ?>
									</div>
									<div class="col-md-3">
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_col_4') ) : endif; ?>
									</div>
							</div>
					</section>
					<div class="footer-legal">
							<div class="float-md-right region"><a href="#"><img src="<?= bloginfo('template_directory');?>/images/united-states-flag.png">United States</a></div>
							<div class="d-inline-block copyright">
									<p class="d-inline-block">Copyright © 2018. All rights reserved.<br></p>
							</div>
							<div class="d-inline-block legal-links">
									<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_bottom_links') ) : endif; ?>
							</div>
					</div>
			</div>
	</footer>


	<script src="<?= bloginfo('template_directory');?>/scripts/app.bundle.js"></script>

<?php wp_footer(); ?>

</body>
</html>
