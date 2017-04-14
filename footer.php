<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Largo
 */

?>
		<section id="contact-cta" class="section">
			<div class="inner">
				<div>
					<h1 class="highlight-line site-description">Let's talk ideas.</h1>
					<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class="button"><span>What's your project?</span></a></p>
				</div>
			</div>
		</section>

	</div><!-- #content -->

	<?php if ( is_front_page() && is_home() ) : ?>
		<section id="villian-container" class="section intro">
		</section>
	<?php endif;?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'largo' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'largo' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'largo' ), 'largo', '<a href="https://automattic.com/" rel="designer">inn_nerds</a>' ); ?> -->
			<p>INN Labs is brought to you by the <a href="//inn.org">Institute for Nonprofit News</a>.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
	