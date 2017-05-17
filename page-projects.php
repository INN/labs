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
				
				<section id="largo">
				<h2>Largo</h2>
					<div class="flex-grid">
						<div>
							<a href="//largo.inn.org"><img src="https://largo.inn.org/wp-content/themes/largoproject/homepages/assets/img/logos/largo-project-logo.svg" alt="Largo logo" /></a>
						</div>
						<div>
							<h3>Largo is <em>the</em> WordPress theme for news websites.</h3>
							<p>More than 150 organizations currently use Largo as their primary website solution, and INN is committed to maintaining and improving the theme for the benefit of nonprofit news organizations.</p>

							<p><strong>Largo Features:</strong></p>
							<ul>
								<li><strong>Powerful Publishing Tools:</strong> Unlike other WordPress "news" themes, Largo is built by real news nerds. We obsess about workfow, too.</li>
								<li><strong>Responsive Design:</strong> Largo is clean, modern, and mobile first &mdash; it's designed to look great on any device.</li>
								<li><strong>Developer Friendly:</strong> Logical organization, documentation, and a sample child theme make it easy to use Largo for your next project.</li>
							</ul>

							<p>Visit the main <a href="//largo.inn.org">Largo project site</a> for more information.</p>
						</div>
					</div>
				</section>

				<section id="plugins">
					<h2>Largo+</h2>
					<p>Take your site to the next level with Largo+, a set of publishing plugins that improve content creation, ease distribution, and enhance visual presentation.</p>
					<div class="flex-grid grid-wrap">
						<div>
							<h3><a href="https://wordpress.org/plugins/doubleclick-for-wp/" target="_blank">DoubleClick for WordPress</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/double-click.svg" alt="plugin-icon" />
							<p>DoubleClick for WordPress gives site administrators an easy way to serve DFP inventory on their WordPress site.</p>
						</div>
						<div>
							<h3><a href="https://wordpress.org/plugins/ga-popular-posts/" target="_blank">Google Analytics Popular Posts</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/popular-posts.svg" alt="plugin-icon" />
							<p>This plugin queries Google Analytics for pageview data and determines a post's weighted popularity score based on publish date and total number of pageviews.</p>
						</div>
						<div>
							<h3><a href="https://wordpress.org/plugins/link-roundups/" target="_blank">Link Roundups</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/link-roundups.svg" alt="plugin-icon" />
							<p>This plugin creates curated lists of links that you can display in a widget or use to generate new MailChimp campaigns.</p>
						</div>
					</div>
					<div class="flex-grid grid-wrap">
						<div>
							<h3><a href="https://wordpress.org/plugins/news-quiz-shortcode/" target="_blank">News Quiz Shortcode</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/news-quiz.svg" alt="plugin-icon" />
							<p>This shortcode allows you to embed a news quiz created with Mother Jones’ news quiz library.</p>
						</div>
						<div>
							<h3><a href="https://wordpress.org/plugins/no-nonsense-google-analytics/" target="_blank">No-Nonsense Google Analytics</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/no-nonsense.svg" alt="plugin-icon" />
							<p>No-Nonsense Google Analytics provides a simple way to embed multiple Universal Analytics codes on your site. No dashboard, no reports.</p>
						</div>
						<div>
							<h3><a href="https://wordpress.org/plugins/npr-story-api/" target="_blank">NPR Story API</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/story-api.png" alt="plugin-icon" />
							<p>Add syndicated content to your site via the NPR Story API. The available content includes audio, text, images and other content from most NPR programs dating back to 1995.</p>
						</div>
					</div>
					<div class="flex-grid grid-wrap">
						<div>
							<h3><a href="https://wordpress.org/plugins/public-media-platform/" target="_blank">Public Media Platform</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/pmp.png" alt="plugin-icon" />
							<p>Expand your reach by distributing your posts on the Public Media Platform.</p>
						</div>
						<div>
							<h3><a href="https://wordpress.org/plugins/pym-shortcode/" target="_blank">Pym Shortcode</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/pym-shortcode.svg" alt="plugin-icon" />
							<p>Pym Shortcode will resize an iframe responsively based on the height of its content and the width of its container – perfect for embedding interactive graphics within a post.</p>
						</div>
						<div>
							<h3><a href="https://wordpress.org/plugins/super-cool-ad-inserter/" target="_blank">Super Cool Ad Inserter Plugin</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/scaip.svg" alt="plugin-icon" />
							<p>This plugin allows you to insert ads, newsletter signups, and other calls to action into post content at set intervals.</p>
						</div>
					</div>
				</section>
			</div>
		</section>
	</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
