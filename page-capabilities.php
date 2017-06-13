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

				
				
				<!-- <h2>Custom Design &amp; Development</h2>
				<div class="flex-grid">
					<div>
						<h3>Web Development</h3>
						<p>Whether you need a completely new website or simply want to add a few features, our team can deliver exactly what you’re envisioning. We’re experts at building responsive, user-friendly WordPress themes and plugins, and we take care to ensure your site is performant and standards-compliant.</p>
					</div>
					<div>
						<h3>Interface Design</h3>
						<p>We take a user-centered approach to design digital experiences that are intuitive, elegant, and functional. From user research to site architecture to interaction design, we can create solutions that will take your brand to the next level.</p>
					</div>
					<div>
						<h3>Data Applications</h3>
						<p>Are you working on a data-driven investigation? Our team includes specialists in data visualization and news application design, and we’d love to work with you to present your data in beautiful and highly effective ways.</p>
					</div>
				</div>

				<h2>Advertising for Publishers</h2>
				<div class="flex-grid">
					<div>
						<h3>Google for Nonprofits &amp; Google Ad Grants Implementation</h3>
						<p>Who wouldn’t want $10k per month to spend on advertising? The INN Labs team knows the ins and outs of applying for Google Ad grants and can help you in this critical, but sometimes overwhelming, first step. Then, we’ll make sure all guidelines are followed as you create and submit your first campaign for approval.</p>
					</div>
					<div>
						<h3>Google AdWords / Ad Grants Audit</h3>
						<p>If you’re already advertising with Google, our AdWords experts can identify areas for optimization and provide an action plan for getting the most out of your current campaigns. Then, we’ll work with you to set a strategy for future campaigns that’s in line with your organizational goals.</p>
					</div>
					<div>
						<h3>Google AdWords / Ad Grants Ongoing Management &amp; Consulting</h3>
						<p>Our consulting guides you in the ongoing optimization of your Google AdWords account. We’ll assess your strategies, plan and execute innovative techniques and help you achieve your search marketing and larger organizational goals.</p>
					</div>
				</div>

				<h2>Analytics for Membership</h2>
				<div class="flex-grid">
					<div>
						<h3>Google Analytics Audit &amp; Implementation</h3>
						<p>The first – and most important – step is to guarantee that you can trust your data. Our team will identify pitfalls in your Google Analytics setup, finding any inaccuracies and inefficiencies, and correct them. Then, we’ll work with you to set a benchmarking strategy that’s in line with your organizational goals. If you'd like help updating audience, distribution, engagement or revenue goals, INN also can help you with that.</p>
					</div>
					<div>
						<h3>Google Analytics Ongoing Management &amp; Consulting</h3>
						<p>Google Analytics provides mountains of data, so how do you make sense of it all? Without analysis, data is just numbers. We’ll combine implementation and reporting with helpful training and ongoing analysis to build your internal capacity and teach you the right questions to ask. That way, you’re able to better attribute your data and prove your return on investment. </p>
					</div>
					<div>
					</div>
				</div>

				<h2>Ongoing Support</h2>
				<div class="flex-grid">
					<div>
						<h3>General Support</h3>
						<p>If you’re running a lean operation or website maintenance isn’t your forté, INN's shared services can be a cost-effective way to offload many of your ongoing maintenance needs. </p>
					</div>
					<div></div>
					<div></div>
				</div> -->
			</div>
		</section>
	</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
