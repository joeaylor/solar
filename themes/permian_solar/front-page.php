<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
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
			</div>
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
					<li class="icon-mail">Email Us</li>
					<li class="icon-call">Call Us! 432.689.8186</li>
				</ul>
			</div>
			<div class="push"></div>
		</div>
		<div class="push"></div>
		
	</div>
	
<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="content_wrap">
		<div class="content">

			<div class=" bg-image relative" style=" background-image: url(http://localhost:8888/permian_solar/wp-content/uploads/2018/03/img-2.png); background- color: #111;">
				<div class="page-hero-wrap black-opacity relative">
					<div class="border-hero relative">
						<div class="section-hero">
							<img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/img/hero-logo.png">
							<h2 class="titles marg-t-40">Invest in your future</h2>
							<a href="#" class="button">Call for estimate</a>
						</div><!-- end section-hero -->
					</div><!-- end border-hero --> 
				</div><!-- end page-hero-wrap -->
				
				<div class="big-photo relative pad-b-320">
					<div class="right">
							<img src="<?php bloginfo( 'template_directory' ); ?>/img/panel.png">
					</div>
					<div class="section-hero">
						<div class="left marg-t-390">
							<h4 class="marg-b-60">The one thing we have a hard time living without is electricity.</h4>
							<p class="marg-b-40">We depend on it for almost every aspect of our daily lives. But what happens when the cost of electricity skyrockets? And what kind of long-term impact are we having on our planet in order to keep the lights on?</p>
							<p>Permian Solar & Energy Solutions exists to help provide a sustainable solution to those problems.</p>
							<a href="#" class="button marg-t-120">Call for Estimate</a>
						</div>
					</div>
					<div class="push"></div>
				</div>
			</div>
			
			<div class="services relative">
				<div class="right">
					<h2 class="marg-b-60">Services</h2>
					<h3 class="marg-b-40">Grid-tied and off-grid solar power systems</h3>
					<p>- Whether you want to off-set your electricity bill or power a remote cabin in the woods, our team has you covered with efficient, forward-thinking solar systems designed to meet your goals.</p>
					<h3 class="marg-b-40">Back-up energy systems</h3>
					<p>- It can be frustrating to go hours, or even days, without electricity. Don’t let the next storm or equipment failure send you to the dark ages. Permian Solar can design and install a solar or generator back up system to keep you safe when everything around you goes dark.</p>
					<h3 class="marg-b-40">Direct kit and DIY systems</h3>
					<p>- Want to save some money and install a complete solar system on your own? We can help by providing a kit sized to meet your needs.</p>
					<a href="#" class="art-button marg-t-120">Call for estimate</a>
				</div>
				
				<div class="left">
					<img src="<?php bloginfo( 'template_directory' ); ?>/img/panel-2.png">
				</div>
				<div class="push"></div>
			</div>
			
			<div class="team">
				<div class="section">
					<h2 class="marg-b-60">Team</h2>
					<div class="panel">
						<img src="<?php bloginfo( 'template_directory' ); ?>/img/panel-1.png">
					</div>
					<div class="panel">
												<img src="<?php bloginfo( 'template_directory' ); ?>/img/team-2.png">

					</div>
					<div class="panel last">
												<img src="<?php bloginfo( 'template_directory' ); ?>/img/team-3.png">

					</div>
					<div class="push"></div>
				</div>
			</div>
			
			<div class="form pad-140">
				<div class="left relative">
					<div class="meta">
						<h2 class="sub-titles marg-b-40">Contact <br>Us</h2>
						<p><strong>Call Today!</strong><br>432.689.8186</p>
						<p><strong>Email Us</strong><br>info@permiansolar.com</p>
						<p><strong>Mailing Address</strong><br>10105 E County Rd 103,<br>Midland, TX 79706</p>
					</div>
				</div>
				<div class="left">
					<div class="form-box">
						<p>Full Name</p>
					</div>
					<div class="form-box">
						<p>Phone Number</p>
					</div>
					<div class="form-box">
						<p>Email</p>
					</div>
					<div class="text-area">
						<p class="pad-20">Mailing Address</p>
					</div>
				</div>
				<div class="push"></div>
			</div>



		
		
			
<?php endwhile; ?>


		</div><!-- end content -->
	</div><!-- end content_wrap -->



<?php
get_footer();