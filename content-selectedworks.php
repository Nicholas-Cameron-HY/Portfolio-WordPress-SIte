
<?php

$args = array(
	'post_type' => 'works',
	'posts_per_page' => 4,
	'orderby' => 'meta_value'
	);

	$selectedworks = new WP_Query($args); ?>

	<?php if ( $selectedworks->have_posts() ): ?>
		<div class="portfolioSection">
			<?php while ( $selectedworks->have_posts() ) : $selectedworks->the_post(); ?>

			<article class="portfolioItem">
				
				<div class="portfolioImage">
					<div class="portfolioOverlay">
						<?php $thelink = get_permalink(); ?>
							<a href="<?php the_field('works_link') ?>" target="_blank" >
			
							<img src="<?php echo hackeryou_featured_image_url($post) ?>" alt="">
							</a>
					</div>
				</div>
				
				<div class="portfolioContent">
					<div class="contentContainer">	
						<h3><?php the_title(); ?></h3>

						<p> <?php the_content(); ?></p>

						<ul class="skillsUsed">
							<?php 
							while(has_sub_field('skills_used')){
							?>
							
							<li><?php the_sub_field('skill_name') ?></li>
							<?php

							}

							?>
						</ul>

					</div>

					<div class="worksLink">

						<a href="<?php the_field('works_link') ?>" target="_blank">View Live
						</a>

					</div>


				</div>
			</article>
			

				<!-- target list item with nchild, every other list item, order reverse???? google -->

			<?php endwhile; // end the loop?>
		</div>
	<?php endif; ?>
	<?php wp_reset_postdata();?>

	

