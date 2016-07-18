
<?php

$args = array(
	'post_type' => 'headline',
	'posts_per_page' => 1,
	);

	$headline = new WP_Query($args); ?>

	<?php if ( $headline->have_posts() ): ?>
		<ul class="selected-works">
			<?php while ( $headline->have_posts() ) : $headline->the_post(); ?>

				<li>
					<h4><?php the_content(); ?></h4>
				</li>

			<?php endwhile; // end the loop?>
		</ul>
	<?php endif; ?>
	<?php wp_reset_postdata();?>