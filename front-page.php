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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="intro-container" class="section intro">
			</section>
			<script>
				var num = Math.round(Math.random()*1) + 1; //if there are more illustrations, increase the multiplier
				var url = '/wp-content/themes/labs/images/INN-Labs-Hero-0' + num + '.svg';
				document.getElementById('intro-container').setAttribute( 'style','background-image:url(' + url + ')' );
			</script>
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
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'largo' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav> <!-- #site-navigation -->

			<section class="section">
				<div class="inner content">
					<div id="learn-more" >
						<p>We are a <a href="<?php echo esc_url( home_url( '/' ) ); ?>team">team of technologists</a> who believe in journalism that furthers democracy, challenges corruption, and dismantles structural oppression.</p>
						<p>We exist to elevate that work – and we contribute by <a href="<?php echo esc_url( home_url( '/' ) ); ?>projects">building tools</a> that promote engagement, build trust, optimize distribution, and tell stories in new and compelling ways. </p>
						<p>If you're tackling a problem facing the news industry, <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">we want to work with you</a>.</p>
					</div>
				</div>
			</section>

			<section id="promos" class="section flex-grid">
				<div class="promo-largo">
					<div class="overlay"></div>
					<h3 class="abs-center">Establish Roots</h3>
				</div>
				<div class="promo-revenue">
					<div class="overlay"></div>
					<h3 class="abs-center">Grow Revenue</h3>
				</div>
				<div class="promo-custom">
					<div class="overlay"></div>
					<h3 class="abs-center">Innovate</h3>
				</div>
			</section>

			<section  id="featured-blogs" class="section">
				<div class="inner content">
					<div class="flex-grid">
						<div>
							<img src="http://placehold.it/300x200" width="100%"/>
						</div>
						<div>
							<!-- Should display the most recent featured post -->
							<h4>FROM THE TEAM </h4>
							<h3>Reimagining Largo</h3>
							<p>Over the past few months, we've been soliciting feedback about Largo from members and the broader journalism-tech community – how they use it, what they like about, and, most importantly, what we can do to make it better. </p>
							<date>April 2, 2017</date>

						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
//get_sidebar();
get_footer();


