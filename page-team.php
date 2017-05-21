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

			<section id="team-photos">
				<div class="flex-grid">
					<div class="teammember">
						<img class="size-medium wp-image-111063" src="https://inn.org/wp-content/uploads/2016/02/JSMITH-INN-336x336.jpg" alt="Julia Smith" width="336" height="336" />
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>meet-the-team#julia"><div class="overlay"><span>Julia</span></div></a>
					</div>
					<div class="teammember">
						<img class="size-medium wp-image-111063" src="https://inn.org/wp-content/uploads/2016/08/RC-e1470591530253-336x336.jpg" alt="RC Lations" width="336" height="336" />
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>meet-the-team#rc"><div class="overlay"><span>RC</span></div></a>
					</div>
					<div class="teammember">
						<img class="size-medium wp-image-111063" src="https://inn.org/wp-content/uploads/2017/01/kay-1-336x336.jpg" alt="Kay Lima" width="336" height="336" />
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>meet-the-team#kay"><div class="overlay"><span>Kay</span></div></a>
					</div>
					<div class="teammember">
						<img class="size-medium wp-image-106850" src="https://inn.org/wp-content/uploads/2014/05/senior_photo1-336x336.jpg" alt="ben keith" width="336" height="336" />
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>meet-the-team#ben"><div class="overlay"><span>Ben</span></div></a>
					</div>
					<div class="teammember">
						<img class="size-medium wp-image-106850" src="https://inn.org/wp-content/uploads/2014/05/GabeHongsdusit-336x336.png" alt="gabriel hongsdusit" width="336" height="336" />
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>meet-the-team#gabe"><div class="overlay"><span>Gabe</span></div></a>
					</div>
				</div>
			</section>

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
						<?php
						$args = array( 'numberposts' => 3 );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
							<div>
								<!-- <img src="http://placehold.it/300x200" width="100%"/> -->
								<?php echo the_post_thumbnail( 'large', array('class' => 'max-three') ); ?>
							</div>
							<div>
								<!-- Should display the most recent ****featured*** post -->
								<h4><?php get_the_category(); ?></h4>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php the_excerpt(); ?>
								<date><?php the_time( 'F j, Y' ); ?></date>
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


