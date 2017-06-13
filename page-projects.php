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
				
				<section id="largo">
				<h2>Largo</h2>
					<div class="flex-grid">
						<div>
							<a href="//largo.inn.org"><img src="https://largo.inn.org/wp-content/themes/largoproject/homepages/assets/img/logos/largo-project-logo.svg" alt="Largo logo" /></a>
						</div>
						<div>
							<h3>Largo: The WordPress Theme for Publishers</h3>
							<!-- <p>Unlike other "news" themes, Largo is built by actual news nerds.</p> -->
							<ul>
							<li><strong>Powerful Publishing Tools:</strong> Largo includes capabiities for curated content, editorial series, author management, transparent revisions, and much, much more.</li>
							<li><strong>Responsive Design:</strong> Clean, modern and mobile first, Largo is designed to look great and function seamlessly on any type of device.</li>
							<li><strong>Developer Friendly:</strong> With logical organization, extensive documentation, and a sample child theme, it's easy to extend Largo to fit your exact needs.</li>
							</ul>
							<p>Visit the main <a href="//largo.inn.org">Largo project site</a> for more information.</p>
						</div>
					</div>
				</section>

				<section id="plugins" class="plugins">
					<h2>Advertising Tools</h2>
					<!-- <p>Take your site to the next level with Largo+, a set of publishing plugins that improve content creation, ease distribution, and enhance visual presentation.</p> -->
					<div class="flex-grid grid-wrap">
						<div>
							<h3><a href="https://wordpress.org/plugins/doubleclick-for-wp/" target="_blank">DoubleClick for WordPress</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/double-click.svg" alt="plugin-icon" />
							<p>Serve ads via DoubleClick for Publishers on your WordPress site with this user-friendly widget.</p>
						</div>
						<div>
							<h3><a href="https://wordpress.org/plugins/super-cool-ad-inserter/" target="_blank">Super Cool Ad Inserter</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/scaip.svg" alt="plugin-icon" />
							<p>Automatically insert ads, donation messaging, and other calls to action into posts at set intervals.</p>
						</div>				
						<!-- <div>
							<h3><a href="https://wordpress.org/plugins/link-roundups/" target="_blank">Link Roundups</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/link-roundups.svg" alt="plugin-icon" />
							<p>This plugin creates curated lists of links that you can display in a widget or use to generate new MailChimp campaigns.</p>
						</div> -->
					</div>
				</section>
				<section class="plugins">
					<h2>Easy Embeds</h2>
					<div class="flex-grid grid-wrap">
						<div>
							<h3><a href="https://wordpress.org/plugins/pym-shortcode/" target="_blank">Pym Shortcode</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/pym-shortcode.svg" alt="plugin-icon" />
							<p>Responsively embed iframes within post content – perfect for interactive graphics.</p>
						</div>
						<div>
							<h3><a href="https://wordpress.org/plugins/news-quiz-shortcode/" target="_blank">News Quiz Shortcode</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/news-quiz.svg" alt="plugin-icon" />
							<p>This shortcode allows you to embed a news quiz created with Mother Jones’ news quiz library.</p>
						</div>	
					</div>
				</section>
				<section class="plugins">
					<h2>Analytics in Action</h2>
					<div class="flex-grid grid-wrap">
						<div>
							<h3><a href="https://wordpress.org/plugins/no-nonsense-google-analytics/" target="_blank">No-Nonsense Google Analytics</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/no-nonsense.svg" alt="plugin-icon" />
							<p>A simple way to embed multiple Universal Analytics codes on your site. No dashboard, no reports.</p>
						</div>
						<div>
							<h3><a href="https://wordpress.org/plugins/ga-popular-posts/" target="_blank">Google Analytics Popular Posts</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/popular-posts.svg" alt="plugin-icon" />
							<p>Surface your site's most popular posts based on Google Analytics pageview data.</p>
						</div>
					</div>
				</section>				
				<section class="plugins">
					<h2>Public Media</h2>
					<div class="flex-grid grid-wrap">
						<div>
							<h3><a href="https://wordpress.org/plugins/npr-story-api/" target="_blank">NPR Story API</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/story-api.png" alt="plugin-icon" />
							<p>Add syndicated audio, text, and images to your site via the NPR Story API. <i>Requires an NPR API Key.</i></p>
						</div>
						<div>
							<h3><a href="https://wordpress.org/plugins/public-media-platform/" target="_blank">Public Media Platform</a></h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/plugins/pmp.png" alt="plugin-icon" />
							<p>Incorporate content from the Public Media Platform on your WordPress site. <i>Requires a PMP API Key.</i></p>
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
