<?php while ( have_rows('testimonials') ) : the_row(); ?>
<div class="side <?php the_sub_field('cube_side'); ?>">
	<div class="fs-slider">
		<div class="fs-slide-item">
			<div class="row">
				<div class="col-md-4">
					<div class="fs-slider-testimony-profile">
						<div style="background-image:url('<?php echo get_sub_field('image')['url']; ?>')">
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<h4 class="fs-slider-rating-short"><?php the_sub_field('title'); ?> &nbsp
						<?php for($i=0;$i<get_sub_field('rating');$i++) : ?>
						<div class="fs-slider-rating">
							<img src="<?php bloginfo('template_url')?>/images/star.png"/>
						</div>
						<?php endfor; ?>
					</h4>
					<p><?php the_sub_field('text'); ?></p>
					<div class="fs-author">by <?php the_sub_field('author'); ?></div>
				</div>
			</div>
		</div>
	</div>
	<div class="testimonial-arrow testimonial-arrow-left"><</div>
	<div class="testimonial-arrow testimonial-arrow-right">></div>
</div>
<?php endwhile; ?>