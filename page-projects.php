<?php
/**
 * Template Name: Projects
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
				
				<h4>Largo</h4>
				<div class="flex-grid">
					<div>
						<p>Get your publication off the ground with Largo, our premium WordPress theme for new organizations. Whether you publish frequently or sparingly, with in-depth reports or new briefs, you can customize Largo to fit your publication's individual needs.</p>
						<p>Then take your site to the next level with Largo+, a set of publishing plugins that improve content creation, ease distribution, and enhance visual presentation.</p>
					</div>
				</div>

				<h4>WordPress Plugins</h4>
				<div id="plugins" class="flex-grid">
					<div>
						<h3><a href="https://wordpress.org/plugins/client-hosting-manager/" target="_blank">Client Hosting Manager</a></h3>
						<p>Active Installs: 50+</p>
					</div>
					<div>
						<h3><a href="https://wordpress.org/plugins/doubleclick-for-wp/" target="_blank">DoubleClick for WordPress</h3></h3>
						<p>Active Installs: 100+</p>
					</div>
					<div>
						<h3><a href="https://wordpress.org/plugins/ga-popular-posts/" target="_blank">Google Analytics Popular Posts</h3></h3>
						<p>Active Installs: 100+</p>
					</div>
					<div>
						<h3><a href="https://wordpress.org/plugins/link-roundups/" target="_blank">Link Roundups</h3></h3>
						<p>Active Installs: 100+</p>
					</div>
					<div>
						<h3><a href="https://wordpress.org/plugins/news-quiz-shortcode/" target="_blank">News Quiz Shortcode</h3></h3>
						<p>Active Installs: 40+</p>
					</div>
					<div>
						<h3><a href="https://wordpress.org/plugins/no-nonsense-google-analytics/" target="_blank">No-Nonsense Google Analytics</h3></h3>
						<p>Active Installs: 30+</p>
					</div>
					<div>
						<h3><a href="https://wordpress.org/plugins/npr-story-api/" target="_blank">NPR Story API</h3></h3>
						<p>Active Installs: 50+</p>
					</div>
					<div>
						<h3><a href="https://wordpress.org/plugins/public-media-platform/" target="_blank">Public Media Platform</h3></h3>
						<p>Active Installs: 50+</p>
					</div>
					<div>
						<h3><a href="https://wordpress.org/plugins/pym-shortcode/" target="_blank">Pym Shortcode</h3></h3>
						<p>Active Installs: 60+</p>
					</div>
					<div>
						<h3><a href="https://wordpress.org/plugins/super-cool-ad-inserter/" target="_blank">Super Cool Ad Inserter Plugin</h3></h3>
						<p>Active Installs: 60+</p>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
