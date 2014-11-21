<?php

	/*
		Template Name:  About Page

	*/

?>


<?php get_header(); ?>

<div id="content">

<?php the_post(); ?>

		<div class="grid_12 body-text">

			
			<?php the_content(); ?>

		</div>	

</div> <!-- END content -->

<?php get_footer(); ?>