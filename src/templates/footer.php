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
											<h4 class="no-border"><a href="#collapseFootNav1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseFootNav1">Shop and Learn</a></h4>
											<ul class="nav nav-tabs footer-links collapse" id="collapseFootNav1">
													<li class="nav-item"><a class="nav-link active" href="#">Mac</a></li>
													<li class="nav-item"><a class="nav-link" href="#">iPad</a></li>
													<li class="nav-item"><a class="nav-link" href="#">iPhone</a></li>
											</ul>
									</div>
									<div class="col-md-3">
											<h4><a href="#collapseFootNav2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseFootNav2">Apple Store</a></h4>
											<ul class="nav nav-tabs footer-links collapse" id="collapseFootNav2">
													<li class="nav-item"><a class="nav-link active" href="#">Mac</a></li>
													<li class="nav-item"><a class="nav-link" href="#">iPad</a></li>
													<li class="nav-item"><a class="nav-link" href="#">iPhone</a></li>
											</ul>
									</div>
									<div class="col-md-3">
											<h4><a href="#collapseFootNav3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseFootNav3">For Education</a></h4>
											<ul class="nav nav-tabs footer-links collapse" id="collapseFootNav3">
													<li class="nav-item"><a class="nav-link active" href="#">Mac</a></li>
													<li class="nav-item"><a class="nav-link" href="#">iPad</a></li>
													<li class="nav-item"><a class="nav-link" href="#">iPhone</a></li>
											</ul>
									</div>
									<div class="col-md-3">
											<h4><a href="#collapseFootNav4" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseFootNav4">Account</a></h4>
											<ul class="nav nav-tabs footer-links collapse" id="collapseFootNav4">
													<li class="nav-item"><a class="nav-link active" href="#">Mac</a></li>
													<li class="nav-item"><a class="nav-link" href="#">iPad</a></li>
													<li class="nav-item"><a class="nav-link" href="#">iPhone</a></li>
											</ul>
											<h4><a href="#collapseFootNav4" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseFootNav4">Apple Values</a></h4>
											<ul class="nav nav-tabs footer-links collapse" id="collapseFootNav4">
													<li class="nav-item"><a class="nav-link active" href="#">Mac</a></li>
													<li class="nav-item"><a class="nav-link" href="#">iPad</a></li>
													<li class="nav-item"><a class="nav-link" href="#">iPhone</a></li>
											</ul>
									</div>
							</div>
					</section>
					<div class="footer-legal">
							<div class="float-md-right region"><a href="#"><img src="<?= bloginfo('template_directory');?>/images/united-states-flag.png">United States</a></div>
							<div class="d-inline-block copyright">
									<p class="d-inline-block">Copyright © 2018. All rights reserved.<br></p>
							</div>
							<div class="d-inline-block legal-links">
									<div class="d-inline-block item">
											<h5>Privacy Policy</h5>
									</div>
									<div class="d-inline-block item">
											<h5>Terms of Use</h5>
									</div>
									<div class="d-inline-block item">
											<h5>Legal</h5>
									</div>
									<div class="d-inline-block item">
											<h5>License</h5>
									</div>
							</div>
					</div>
			</div>
	</footer>


	<script src="<?= bloginfo('template_directory');?>/scripts/app.bundle.js"></script>

<?php wp_footer(); ?>

</body>
</html>
