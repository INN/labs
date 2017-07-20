<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Largo
 */

get_header(); ?>

<section id="hero-container" class="section intro">
</section>
<script>
	var image_ids = [1,2]; //if there are more illustrations, add to the array
	var id = image_ids[Math.floor(Math.random() * image_ids.length)];
	var index = image_ids.indexOf(id);
	if (index > -1) {
	    image_ids.splice(index, 1);
	}
	var url_1 = '/wp-content/themes/labs/images/INN-Labs-Hero-0' + id + '.svg';
	var url_2 = '/wp-content/themes/labs/images/INN-Labs-Hero-0' + image_ids[Math.floor(Math.random()*image_ids.length)] + '.svg';
	document.write('<style>#hero-container{background-image:url(' + url_1 + ');} #villian-container{background-image:url(' + url_2 + ');}</style>');
</script>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section id="front" class="section transparent">

				<div class="inner">
					<div class="abs-center">
						<!--INN Labs works with newsroom technologists to build the future of nonprofit news.-->
						<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<h1 class="highlight-line site-description"><?php echo $description; /* WPCS: xss ok. */ ?></h1>
						<?php endif; ?>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class="button"><span>Work with us</span></a></li>
							<li><a href="#learn-more" class="button secondary"><span>Learn more</span></a></li>
							<!-- <li><a href="http://inn.us1.list-manage.com/subscribe?u=81670c9d1b5fbeba1c29f2865&id=1476113985" target="_blank"  class="button"><span>Get Updates</span></a></li> -->
						</ul>
					</div>
				</div>
			</section>

			<nav class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><svg version="1.1"x="0px" y="0px"
	 viewBox="0 0 103 71" style="enable-background:new 0 0 103 71;">
<rect class="st0" width="103" height="15"/>
<rect y="28" class="st0" width="103" height="15"/>
<rect y="56" class="st0" width="103" height="15"/>
</svg></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav> <!-- #site-navigation -->

			<section class="section">
				<div class="inner content">
					<div id="learn-more" >
						<!-- <h2>We create robust publishing solutions for nonprofit news organizations.</h2> -->
						<p>We are a <a href="<?php echo esc_url( home_url( '/' ) ); ?>team">team of technologists</a> who believe in journalism that builds communities, holds the powerful accountable, and encourages civic engagement.</p>
						<p>We exist to elevate that work – and we contribute by <a href="<?php echo esc_url( home_url( '/' ) ); ?>our-projects">developing tools</a> and <a href="<?php echo esc_url( home_url( '/' ) ); ?>showcase">tailored news experiences</a> that establish trust, optimize distribution, and tell stories in new and compelling ways. </p>
						<p>If you're tackling a problem facing independent news, <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">we want to work with you</a>.</p>
						<p>Here's how <a href="<?php echo esc_url( home_url( '/' ) ); ?>capabilities">we can help</a>.</p>
					</div>
				</div>
			</section>

<!-- 			<section id="how-we-help" class="section">
				<div class="inner">
					<p><strong>Nerd Alert!</strong> Sign up for the INN Labs newsletter. </p>
				</div>
			</section> -->

			<section id="promos" class="promos section flex-grid">
				<div class="promo promo-largo">
					<a href="/our-projects">
						<div class="overlay"></div>
						<h2 class="abs-center">Build</h2>
						<div class="detail">
							<h3>Largo: The News Theme</h3>
							<p>Get your publication off the ground with Largo, our WordPress theme for new organizations. Whether you publish frequently or sparingly, with in-depth reports or new briefs, you can customize Largo to fit your publication's individual needs. <!-- Take your site to the next level with Largo+, a set of publishing plugins that improve content creation, ease distribution, and enhance visual presentation. --></p>
							<a href="/our-projects" class="button">Learn More</a>
						</div>
					</a>
				</div>
				<div class="promo promo-revenue">
					<a href="/capabilities">
						<div class="overlay"></div>
						<h2 class="abs-center">Grow</h2>
						<div class="detail">
							<h3>Analytics &amp; Advertising</h3>
							<p>Need to engage your audience? Build revenue? Improve SEO? We can teach you how to understand your analytics and recommend proven solutions to connect you with your community.</p>
							<a href="/capabilities" class="button">Learn More</a>
						</div>
					</a>
				</div>
				<div class="promo promo-custom">
					<a href="/capabilities">
						<div class="overlay"></div>
						<h2 class="abs-center">Evolve</h2>
						<div class="detail">
							<h3>Partner With Us</h3>
							<p>Let's make news better. With years of experience in newsroom tech, our team of technologists can help build your next news app, redesign your website, and collaborate with you to build something completely new.</p>
							<a href="/capabilities" class="button">Learn More</a>
						</div>
					</a>
				</div>
			</section>

			<section id="process" class="section">
				<div class="filtered-bg"></div>
				<div class="inner content">
					<div class="content">
						<h2>Our Process</h2>
						<p>We approach each new project as a partnership. Come to us with an idea or a problem to solve, and we will work with you every step of the way to develop innovative and cost-effective solutions that align with your vision.</p>
						<p>Our team values user-centered design, open-source development, and a lean approach to product management. We typically follow <a href="<?php echo esc_url( home_url( '/' ) ); ?>process/">the process outlined here</a> as a general framework for collaborations.</p>
					</div>
				</div>
			</section>

			<section id="sign-up" class="section">
				<div class="inner">
					<p><strong>Nerd Alert!</strong> Sign up for the INN Labs newsletter. </p>
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="//inn.us1.list-manage.com/subscribe/post?u=81670c9d1b5fbeba1c29f2865&amp;id=1476113985" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
					    	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
							<input type="email" placeholder="Email Address" value="" name="EMAIL" class="required email" id="mce-EMAIL">

							<label for="mce-FNAME">First Name </label>
							<input type="text" placeholder="First Name" value="" name="FNAME" class="" id="mce-FNAME">


							<label for="mce-LNAME">Last Name </label>
							<input type="text" placeholder="Last Name" value="" name="LNAME" class="" id="mce-LNAME">

							<div class="mc-field-group input-group" style="display:none;">
							    <strong>Project Updates </strong>
							    <ul><li><input type="checkbox" value="1" name="group[4097][1]" id="mce-group[4097]-4097-0"><label for="mce-group[4097]-4097-0">Largo</label></li>
							<li><input type="checkbox" value="2" name="group[4097][2]" id="mce-group[4097]-4097-1"><label for="mce-group[4097]-4097-1">One Liner</label></li>
							</ul>
							</div>
							<input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button">
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_81670c9d1b5fbeba1c29f2865_1476113985" tabindex="-1" value=""></div>
					    </div>
					</form>
					</div>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='radio';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					<!--End mc_embed_signup-->
				</div>
			</section>

			<section  id="featured-blogs" class="section">
				<div class="inner content">
					<div class="flex-grid">
						<?php
						$args = array( 'numberposts' => 1 );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
							<div>
								<!-- <img src="http://placehold.it/300x200" width="100%"/> -->
								<?php echo the_post_thumbnail( 'large', array('class' => 'max-three') ); ?>
							</div>
							<div>
								<!-- Should display the most recent ****featured*** post -->
								<h4>FROM THE TEAM </h4>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<date><?php the_time( 'F j, Y' ); ?></date>
								<?php the_excerpt(); ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
