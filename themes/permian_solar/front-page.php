<?php
/**
 * The template for the homepage
 *
 * @package WordPress
*/

get_header(); ?>



	<div id="top" class="header_wrap">
		<div class="relative">
			<h1>Residential & Commercial Solar Energy Solar Services</h1>
			<div class="mobile">
				<a href="javascript:void(0);" class="menu-icon btnMobileMenu">						
					<svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
						<rect x="5" y="11.15" fill="#FFFFFF" width="90" height="15.54"></rect>
						<rect x="5" y="73.31" fill="#FFFFFF" width="90" height="15.54"></rect>
						<rect x="5" y="42.23" fill="#FFFFFF" width="90" height="15.54"></rect>
					</svg>
				</a>
			</div><! -- end header --> 
			<div class="desktop">
				<ul class="social-media">
					<li class="icon">	
						<svg width="26" height="29" xmlns="http://www.w3.org/2000/svg"><ellipse fill="#FFF" cx="950" cy="29.5" rx="13" ry="14.5" fill-rule="evenodd" transform="translate(-937 -15)"/>
						</svg>
					</li>
					<li class="icon last">	
						<svg width="26" height="29" xmlns="http://www.w3.org/2000/svg"><ellipse fill="#FFF" cx="950" cy="29.5" rx="13" ry="14.5" fill-rule="evenodd" transform="translate(-937 -15)"/>
						</svg>
					</li>
					<li class="icon-mail">Email <span class="us">Us</span></li>
					<li class="icon-call">Call Us! 432.689.8186</li>

				</ul>
			</div><!-- end desktop --> 
			<div class="push"></div>
		</div><!-- end relative --> 
		<div class="push"></div>
	</div>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
		<div class="content_wrap">
			<div class="content">
	
				<div id="head-content" class=" bg-image relative" style="background-image: url(http://localhost:8888/permian_solar/wp-content/uploads/2018/03/final.jpg); background- color: #111;">
					<div class="page-hero-wrap relative">
						<div class="border-hero relative">
							<div class="section-hero">
								<img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/img/hero-logo.png">
								<h2 class="titles marg-t-40">Invest in your future</h2>
								<a href="#" class="button">Call for estimate</a>
							</div><!-- end section-hero -->
						</div><!-- end border-hero --> 
					</div><!-- end page-hero-wrap -->
					
					<?php get_template_part( 'template-parts/big-photo', get_post_format() ); ?>
					
					
				</div><!-- end bg-image --> 
				
				<?php get_template_part( 'template-parts/services', get_post_format() ); ?>

				<?php get_template_part( 'template-parts/team', get_post_format() ); ?>
				
<!-- 				<?php get_template_part( 'template-parts/form', get_post_format() ); ?> -->

			</div><!-- end content -->
		</div><!-- end content_wrap -->

	<?php endwhile; ?>






<?php
get_footer();