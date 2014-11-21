<?php
/**
 * @package The Park
 */
?>

<article>
	<header>
		<p class="blog-date"><?php the_date(); ?></p>
		<h1><?php the_title(); ?></h1>
	</header>

	<div class="blog-comment"><?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></div>

	<div class="blog-text">

		<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
		</div>

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'thepark' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .blog-text -->

	<footer class="entry-footer">
		<?php thepark_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
