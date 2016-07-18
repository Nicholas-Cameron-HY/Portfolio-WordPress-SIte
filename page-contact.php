<?php

/*
	Template Name: Contact
*/

	?>

<?php get_header();  ?>

<!-- LET'S START THE BIG LOOP -->
<?php if ( have_posts() ) while ( have_posts('') ) : the_post(); ?>

	<div class="bodyWrapper">
		<?php include('my_nav.php') ?>

		
		<section class="contactContainer">
			<div class="onsenWrapper">
				<div class="contactImageContainer">

				</div>	
				<div class="contactImageHello">
					<h1> Give me a shout.</h1>
				</div>		
			</div>	


		</section>


		<!-- <section class="aboutImageSection">
			<article class="aboutImageHero">
			  <?php $image = get_field('hero_image'); ?>
			  <img src="<?php echo $image['url'] ?>">
			</article>
			

		</section>

 -->
		<article class="aboutSidePhotoContainer">
				<div class="aboutSidePhoto">
					<?php //$image = get_field('image_box_left'); ?>
				  	<img src="<?php //echo $image['url'] ?>">
				</div>

				<div class="aboutSidePhoto">
					<?php //$image = get_field('image_box_right'); ?>
				  	<img src="<?php //echo $image['url'] ?>">
				</div>
		</article> 
		
		<section class="contactInformationContainer">	
			
			<!-- 	<div class="contactForm">
					<?php the_content(); ?>

				</div> -->

				<div class="contactForm">
						<form action="http://www.focuspocus.io/magic/nicholashawkescameron@gmail.com" 
						method="POST">
							<input type="name" name="Your Name" placeholder="Your Name" class="marginBump">
							<input type="email" name="Your E-mail" placeholder="Your E-mail" class="marginBump">
						<input type="phone" name="Your Phone Number" placeholder="Your Phone Number" class="marginBump">
						 	<textarea name="comments" class="emailbox marginBump" placeholder ="Your Idea"></textarea>
					 	<input type="submit" value="Submit" class="submitbutton marginBump">
						</form>
				</div>

				<div class="largeHoller">
					<h1> Let's work together. </h1>
				</div>

		</section>
			
		<?php get_footer(); ?>

	</div>
		 <?php endwhile; // end the loop?>
		
