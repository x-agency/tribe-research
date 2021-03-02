<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->

	<!-- nav modal -->
	<div id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="modalMenu">
		<div class="modal-dialog" role="document">
			<ul class="list-unstyled">
				<li><a class="simple-link" href="/">Home</a></li>
				<li><a class="simple-link" href="/about">About</a></li>
				<li><a class="simple-link" href="/clinical-trials">Clinical Trials</a></li>
				<li><a class="simple-link" href="/volunteers">Volunteers</a></li>
				<li><a class="simple-link" href="/sponsors">Sponsors</a></li>
				<li><a class="simple-link" href="/contact">Contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Custom Footer Code -->
	<footer>
		<img src="/wp-content/themes/tribe-research/img/footer-logo.png" class="logo">
		<div class="menu">
			<div class="">
				<a class="simple-link link-dark" href="/about">About Us</a>
				<a class="simple-link link-dark" href="/clinical-trials">Clinical Trials</a>
				<a class="simple-link link-dark" href="/volunteers">Volunteers</a>
				<a class="simple-link link-dark" href="/sponsors">Sponsors</a>
			</div>
			<div class="">
				<p class="simple-link link-dark">Contact</p>
				<a href="/terms-of-service" class="simple-link">Terms of Service</a>
				<a href="/privacy-policy" class="simple-link">Privacy Policy</a>
			</div>
			<div>
				<p class="title purple">Get in Touch:</p>
				<p><strong>Phone:</strong> <a class="simple-link link-dark" href="tel:864.334.0141">864.334.0141</a></p>
				<p><strong>Fax:</strong> <a class="simple-link link-dark" href="fax:+18643340137">864.334.0137</a></p>
				<p><strong>Email:</strong> <a class="simple-link link-dark" href="mailto:info@tribeclinicalresearch.com">info@tribeclinicalresearch.com</a></p>
			</div>
		</div>
		<div class="copyright">
			<a href="https://www.xagency.io" class="simple-link">Made by X</a>
			<p class="title purple">©2020 Tribe Clinical Research.</p>
			<p>All Rights Reserved.</p>
		</div>
	</footer>
	<!-- Custom Footer Code -->

	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
<script>
wow = new WOW(
	{
		boxClass:     'wow',      // default
		animateClass: 'animate__animated', // default
		offset:       0,          // default
		mobile:       true,       // default
		live:         true        // default
	}
)
wow.init();
</script>
	</body>
</html>
