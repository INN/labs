<?php
/**
 * Template Name: Showcase
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
		<!-- <section class="section">
			<div class="inner content">

				<?php
				// while ( have_posts() ) : the_post();

				// 	get_template_part( 'template-parts/content', 'page' );

				// 	// If comments are open or we have at least one comment, load up the comment template.
				// 	if ( comments_open() || get_comments_number() ) :
				// 		comments_template();
				// 	endif;

				// endwhile; // End of the loop.
				?>

				<br /><br />
				
				
			</div>
		</section> -->

		<section class="section">

			<div class="case"><div class="inner" style="background-image:url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/showcase/case1.jpg');">
				<a href="http://projects.chicagoreporter.com/settlements/"><div class="overlay"><span><span class="case-title">The Chicago Reporter: Settling for Misconduct</span><span class="case-description">News Application Design &amp; Development</span></span></div></a>
			</div></div>

			<div class="case"><div class="inner" style="background-image:url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/showcase/case2.jpg');">
				<a href="http://wisconsinwatch.org/"><div class="overlay"><span><span class="case-title">Wisconsin Watch</span><span class="case-description">WordPress Design &amp; Development</span></span></div></a>
			</div></div>

			<div class="case"><div class="inner" style="background-image:url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/showcase/case3.jpg');">
				<a href="http://voiceofoc.org/"><div class="overlay"><span><span class="case-title">Voice of OC</span><span class="case-description">WordPress Development</span></span></div></a>
			</div></div>

			<div class="case"><div class="inner" style="background-image:url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/showcase/case4.jpg');">
				<a href="http://therivardreport.com/"><div class="overlay"><span><span class="case-title">The Rivard Report</span><span class="case-description">WordPress Design &amp; Development</span></span></div></a>
			</div></div>

			<div class="case"><div class="inner" style="background-image:url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/showcase/case5.jpg');">
				<a href="https://fresh-energy.org/"><div class="overlay"><span><span class="case-title">Fresh Energy</span><span class="case-description">WordPress Design &amp; Development</span></span></div></a>
			</div></div>

			<div class="case"><div class="inner" style="background-image:url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/showcase/case6.jpg');">
				<a href="https://ctmirror.org/2017/05/22/english-learners-struggling-ct-schools-ignore-a-proven-path/"><div class="overlay"><span><span class="case-title">CT Mirror</span><span class="case-description">WordPress Development</span></span></div></a>
			</div></div>
			
		</section>
	</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
