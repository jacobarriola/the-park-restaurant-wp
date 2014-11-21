<?php
/**
 * The template for displaying all single posts.
 *
 * @package The Park
 */

get_header(); ?>

	<div class="grid_9 blog-content">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php thepark_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- .blog-content -->

	<!--begin sidebar-->

	<aside class="grid_3 omega blog-sidebar">
		<h3>Newsletter</h3>

		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">

			<form action="http://thepark1400sunset.us4.list-manage.com/subscribe/post?u=efba98615d22d2979f4a24db6&amp;id=2d60dd07b7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email@yourdomain.com" required>

				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">

			</form>

		</div><!--End mc_embed_signup-->

		<p>Weekly menus, promos and other fun stuff that comes to mind.</p>
	</aside><!--end sidebar-->
	
<?php get_footer(); ?>
