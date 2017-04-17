<?php
/**
 * Template Name: Team Home
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

			<section class="section">
				<div class="inner content">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
			</section>

			<section id="promos" class="promos section flex-grid">
				<div class="promo promo-largo">
					<a href="/projects">
						<div class="overlay"></div>
						<h3 class="abs-center">Office Hours</h3>
						<div class="detail">
							<h4>Reimagining Largo</h4>
							<p>Over the past few months, we've been soliciting feedback about Largo from members and the broader journalism-tech community – how they use it, what they like about, and, most importantly, what we can do to make it better. </p>
						</div>
					</a>
				</div>
				<div class="promo promo-revenue">
					<a href="/capabilities">
						<div class="overlay"></div>
						<h3 class="abs-center">Nerd Alert!</h3>
						<div class="detail">
							<h4>Reimagining Largo</h4>
							<p>Over the past few months, we've been soliciting feedback about Largo from members and the broader journalism-tech community – how they use it, what they like about, and, most importantly, what we can do to make it better. </p>
						</div>
					</a>
				</div>
				<div class="promo promo-custom">
					<a href="/capabilities">
						<div class="overlay"></div>
						<h3 class="abs-center">Book Club</h3>
						<div class="detail">
							<h4>Reimagining Largo</h4>
							<p>Over the past few months, we've been soliciting feedback about Largo from members and the broader journalism-tech community – how they use it, what they like about, and, most importantly, what we can do to make it better. </p>
						</div>
					</a>
				</div>
			</section>

			<section id="process" class="section">
				<div class="filtered-bg"></div>
				<div class="inner content">
					<div class="content">
						<h2>Our Process</h2>
						<p>Over the past few months, we've been soliciting feedback about Largo from members and the broader journalism-tech community – how they use it, what they like about, and, most importantly, what we can do to make it better. </p>
					</div>
				</div>
			</section>

			<section id="sign-up" class="section">
				<div class="inner">
					<p><strong>Nerd Alert!</strong> Sign up for our newsletter. </p>
					<form>
					<label>Email Address: </label>
					<input type="email" placeholder="Email Address"/>
					<label>First Name: </label>
					<input type="text" placeholder="First Name"/>
					<label>Last Name: </label>
					<input type="text" placeholder="Last Name"/>
					<input type="button" value="Sign Up"/>
					</form>
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


