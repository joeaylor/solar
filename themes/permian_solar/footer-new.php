<?php
/**
 * The template for displaying the new-footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
?>

<div class="footer_wrap">
		<div class="footer-top relative">
			<ul class="nav-menu-single ta-center">
				<li><a href="" target="_blank">Facebook</a></li>
				<li><a href="" target="_blank">Linkedin</a></li>
				<li><a href="#">Free Estimate</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Reviews</a></li>
			</ul>
		
			
			<div class="popup-menu">
				<h2 class="small-titles ta-center">The Menu</h2>
				<ul>
					<li><a href="http://localhost:8888/cbc/#about">About</a></li>
					<li><a href="http://localhost:8888/cbc/#services">Services</a></li>
					<li><a class="anchorLink" href="#freeEstimate">Free Estimate</a></li>
					<li><a href="#">Testimonials</a></li>
					<li><a href="http://localhost:8888/cbc/gallery/">Gallery</a></li>
					<li><a href="http://localhost:8888/cbc/#contact">Contact</a></li>
				</ul>
				<a href="javascript:void(0);" class="btn-close toggleButton">
					<img src="<?php bloginfo('template_directory'); ?>/img/close.png">
				</a>
			</div>

		</div>
</div>


<?php wp_footer(); ?>

</body>
</html>
