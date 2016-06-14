<?php
/**
 * Template Name: Homepage Rafa
 *
 */

get_header(); ?>

	<div class="home-landing">
		<div class="home-landing-image" style="background-image:url('<?php bloginfo('template_url');?>/images/bonsai.jpg')">
		</div>
		<div class="home-landing-cover">
		</div>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="post-wrap" role="main">
			
			<div class="home-section">
				<div class="container content-wrapper">
					<div style="text-align:center">
						<h3 style="margin-bottom:10px">
							<?php the_field('section_1_title'); ?>
						</h3>
						<p style="margin-bottom:40px">
							The three best ways to help you balance your life and achieve your goals
						</p>
					</div>
					<div class="row fs-home-services">
						<div class="col-md-4">
							<div class="home-section-columns home-section-columns-left">
								<h5>Feng Shui</h5>
								<div class="fs-home-services-image" style="background-image:url('<?php bloginfo('template_url');?>/images/feng-shui.png')"></div>
								<p>
									Whether you just moved into a new home or have been living in the same place for a while, Tree of Life Classical Feng Shui specializes in aligning your home with your passions, goals and reaching your full potential
								</p>
							</div>
						</div>
						<hr class="home-section-hr">
						<div class="col-md-4">
							<div class="home-section-columns">
								<h5>Yoga</h5>
								<div class="fs-home-services-image" style="background-image:url('<?php bloginfo('template_url');?>/images/yoga2.jpg')"></div>
								<p>
									a Hindu spiritual and ascetic discipline, a part of which, including breath control, simple meditation, and the adoption of specific bodily postures, is widely practiced for health and relaxation
								</p>
							</div>
						</div>
						<hr class="home-section-hr">
						<div class="col-md-4">
							<div class="home-section-columns home-section-columns-right">
								<h5>Pranic Healing</h5>
								<div class="fs-home-services-image" style="background-image:url('<?php bloginfo('template_url');?>/images/pranic.jpg')"></div>
								<p>
									a claimed energy healing system developed and promoted by Choa Kok Sui which claims that prana (energy) can heal ailments in the body by contributing to the person's energy field
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="home-section" id="mission-statement">
				<div class="container content-wrapper">
					<h3><?php the_field('section_2_title'); ?></h3>
				</div>
			</div>
			<div class="home-section" id="testimonials">
				<div class="container content-wrapper">
					<div class="cube-container">
					    <div id="cube">
					    	<?php get_template_part('content-testimony'); ?>
					    </div>
					</div>
				</div>
			</div>
			<div class="home-section" id="featured-article">
				<div class="container content-wrapper">
					<h3>Featured Article</h3>
					<?php get_template_part('content-bagua'); ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
