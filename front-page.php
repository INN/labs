<?php
/**
 * The main template file
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
			<section class="section intro">
			</section>
			<section id="front" class="section transparent">
				<div class="inner">
					<div class="abs-center">
						<!--INN Labs works with newsroom technologists to build the future of nonprofit news.-->
						<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<div class="highlight-line site-description"><?php echo $description; /* WPCS: xss ok. */ ?></div>
						<?php endif; ?>
						<ul>
							<li><a href="#learn-more" class="button"><span>Learn more</span></a></li>
							<li><a href="http://inn.us1.list-manage.com/subscribe?u=81670c9d1b5fbeba1c29f2865&id=1476113985" target="_blank"  class="button"><span>Get Updates</span></a></li>
						</ul>
					</div>
				</div>
			</section>			  

			<nav class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'largo' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav> <!-- #site-navigation -->

			<section class="section">
				<div class="inner">
					<div id="learn-more" class="content">
						<p>They often don’t consider the <b>performance implications</b> of adding third party services to their sites. How much “weight” does any one script add to the page? How much longer will users be waiting for the site to load? How does this impact low-bandwidth and mobile audience?</p>
					</div>
					<div class="content three-up">
						<div>
							<img src="http://placehold.it/350x150" width="100%"/>
							<h3>Largo Collective</h3>
							<p>Largo is a premium WordPress framework for news websites. Built and maintained by the INN Labs, Largo powers news operations around the world. </p>
						</div>
						<div>
							<img src="http://placehold.it/350x150" width="100%"/>
							<h3>WordPress Plugins</h3>
							<p>They often don’t consider the <b>performance implications</b> of adding third party services to their sites. How much “weight” does any one script add to the page? How much longer will users be waiting for the site to load? How does this impact low-bandwidth and mobile audience?</p>
						</div>
						<div>
							<img src="http://placehold.it/350x150" width="100%"/>
							<h3>Custom Design &amp; Development</h3>
							<p>They often don’t consider the <b>performance implications</b> of adding third party services to their sites. How much “weight” does any one script add to the page? How much longer will users be waiting for the site to load? How does this impact low-bandwidth and mobile audience?</p>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

	<script>
	// show sticky nav
	var win_height;
	function showStickyNav($){
		if($(this).scrollTop() >= win_height-88) {
		    $('#site-navigation').show();
		} else {
			$('#site-navigation').slideUp('fast');
		}
		
	}

	jQuery(document).ready(function(){
		var $ = jQuery;
		win_height = jQuery(window).height();

		// smooth scroll to anchor
		$('a[href*="#"]:not([href="#"])').click(function() {
	      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	        if (target.length) {
	          $('html, body').animate({
	            scrollTop: target.offset().top
	          }, 500);
	          return false;
	        }
	      }
	    });

	    showStickyNav($);
	});	

	jQuery(window).resize(function(){  
		win_height = jQuery(window).height();
		showStickyNav(jQuery);
	});

	jQuery(window).scroll(function() {  
		showStickyNav(jQuery);
	});
	</script>


<?php
//get_sidebar();
get_footer();


