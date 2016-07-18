<footer class="upperFooter clearfix">

	<div class="footerLeft">
		<h4> Status </h4>
		<p>Available for hire.</p>
	</div>

	<div class="footerRight">
		
		
		<h4>Social</h4>

	<?php 
	
	if( have_rows('social_icons', 'option') ): ?>
		<ul class= "socialFavicons">
		<?php 
			while ( have_rows('social_icons','option') ): the_row(); ?>
			<li>
				<a href="<?php the_sub_field('social_link', 'option') ?>"> 
				<?php the_sub_field('icon', 'option'); ?>
				</a>
			</li>

			<?php endwhile; 

		else : ?>

		</ul>
		<?php 
		
		endif;

		?>

	</div>	

</footer>


<footer class="lowerFooter">
  <div class="container">
    <p> &copy Nicholas Cameron <?php echo date('Y'); ?></p>
    <p class="credit"> Inspired by <a href="http://quasimondo.com/" target="_blank">Mario Klingemann</a> & <a href="http://marloyarlo.com/" target="_blank">Marlo Hwang</a>'s work with gradient animation. </p> 
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>