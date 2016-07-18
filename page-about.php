<?php

/*
	Template Name: About
*/

	?>

<!-- LET'S START THE BIG LOOP -->

<?php get_header();  ?>

 <?php if ( have_posts() ) while ( have_posts('outside_skills', 'option') ) : the_post(); ?>

	<div class="bodyWrapper">
		<?php include('my_nav.php') ?>
			
			<section class="onsenContainer hideAbout">
				<div class="onsenWrapper">

					<div class="aboutImageHello">
						<h1> About Me.</h1>
					</div>		

					<div class="aboutImageContainer">

					</div>	
					
				</div>	


			</section>

			<article class="aboutImageHero displayMobileContact">
			  <?php $image = get_field('about_hero_image'); ?>
			  <img src="<?php echo $image['url'] ?>">
			</article>


			<section class="aboutInformationContainer clearfix">
					
					<article class="aboutBioContent">
						
						<h4><?php the_field('about_title'); ?></h4>
						
						<?php the_content(); ?>

					</article>

				<!-- START OF OTHER SKILLS LOOP -->
					
					<?php if( have_rows('tech_skills', 'option') ): ?>
				
				<!-- START OF TECH SKILLS LOOP 	 -->


						<article class="aboutSkills bumptotheLeft"> 

							<h4><?php the_field('tech_skills_title'); ?></h4>
							<ul class="listSkills">
								<?php while( have_rows('tech_skills', 'option') ): the_row(); ?>

					   		 	<li><?php the_sub_field('name_of_tech_skill', 'option'); ?></li>

								<?php endwhile; ?>

							</ul>

							<?php endif; ?>


						</article>

			<!-- END OF TECH SKILLS -->
				
					
						<?php if( have_rows('outside_skills', 'option') ): ?>

							<article class="aboutSkills">
								
								<h4><?php the_field('other_skills_title'); ?></h4>
								
							<ul class="listSkills">

								<?php while( have_rows('outside_skills', 'option') ): the_row(); ?>

					   		 	<li><?php the_sub_field('name_of_other_skill', 'option'); ?></li>

								<?php endwhile; ?>

							</ul>

								<?php endif; ?>

							</article>

				

				</section>
					
		<?php get_footer(); ?>

	</div>
		 <?php endwhile; // end the loop?>
		

         


