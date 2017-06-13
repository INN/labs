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

			<div class="case" style="background-image:url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/showcase/case1.jpg');">
				<a href="http://projects.chicagoreporter.com/settlements/"><div class="overlay"><span class="case-title">Settling for Misconduct | The Chicago Reporter</span><span class="case-description">News Application Design &amp; Development</span></div></a>
			</div>

			<div class="case" style="background-image:url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/showcase/case2.jpg');">
				<a href="http://publicsource.org/"><div class="overlay"><span class="case-title">Public Source</span><span class="case-description">WordPress Design &amp; Development</span></div></a>
			</div>

			<div class="case" style="background-image:url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/labs/images/showcase/case3.jpg');">
				<a href="https://fresh-energy.org/"><div class="overlay"><span class="case-title">Fresh Energy</span><span class="case-description">WordPress Design &amp; Development</span></div></a>
			</div>
			
		</section>
	</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
