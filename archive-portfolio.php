<?php

/*
	Template Name: Portfolio
*/

	?>

	<?php get_header();  ?>
		
		<?php if ( have_posts() ) while ( have_posts('') ) : the_post(); ?>

			<div class="bodyWrapper">
				<?php include('my_nav.php') ?>
		

			<section class="selectedWorks">


			      <h4> Selected Works</h4>
			      <?php the_content(); ?>

			      <?php include('content-selectedworks.php') ?>


		    </section>

		<?php get_footer(); ?>

	</div>

	<?php endwhile;?>

