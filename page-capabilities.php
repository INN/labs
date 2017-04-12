<?php
/**
 * Template Name: Capabilities
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

				<br /><br />
				
				<h4>Custom Design &amp; Development</h4>
				<div class="flex-grid">
					<div>
						<h3>Web Development</h3>
						<p>Over the past few months, we've been soliciting feedback about Largo from members and the broader journalism-tech community – how they use it, what they like about, and, most importantly, what we can do to make it better. </p>
					</div>
					<div>
						<h3>Interface Design</h3>
						<p>Over the past few months, we've been soliciting feedback about Largo from members and the broader journalism-tech community – how they use it, what they like about, and, most importantly, what we can do to make it better. </p>
					</div>
					<div>
						<h3>Data Applications</h3>
						<p>Over the past few months, we've been soliciting feedback about Largo from members and the broader journalism-tech community – how they use it, what they like about, and, most importantly, what we can do to make it better. </p>
					</div>
				</div>

				<h4>White-Glove Services</h4>
				<div class="flex-grid">
					<div>
						<h3>Advertising for Publishers</h3>
						<p>Over the past few months, we've been soliciting feedback about Largo from members and the broader journalism-tech community – how they use it, what they like about, and, most importantly, what we can do to make it better. </p>
					</div>
					<div>
						<h3>Analytics for Membership</h3>
						<p>Over the past few months, we've been soliciting feedback about Largo from members and the broader journalism-tech community – how they use it, what they like about, and, most importantly, what we can do to make it better. </p>
					</div>
					<div>
						<h3>A/B Testing for Engagement</h3>
						<p>Over the past few months, we've been soliciting feedback about Largo from members and the broader journalism-tech community – how they use it, what they like about, and, most importantly, what we can do to make it better. </p>
					</div>
				</div>

				<h4>Ongoing Support</h4>
				<div class="flex-grid">
					<div>
						<h3>General Support</h3>
						<p>Over the past few months, we've been soliciting feedback about Largo from members and the broader journalism-tech community – how they use it, what they like about, and, most importantly, what we can do to make it better. </p>
					</div>
					<div></div>
					<div></div>
				</div>
			</div>
		</section>
	</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
