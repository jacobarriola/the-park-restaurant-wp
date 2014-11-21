<?php get_header(); ?>

<div id="content">


		<div class="grid_12 blog-page">

			<h1>The Park Restaurant Blog</h1>
			

		</div>	

		

		<div class="grid_12">


<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$the_query = new WP_Query( 'cat=1&paged=' . $paged ); 
?>

<?php if ( $the_query->have_posts() ) : ?>

<?php
while ( $the_query->have_posts() ) : $the_query->the_post(); 
?>

			<div class="latest-post">

				
				<p class="blog-date blog-main-list"><?php the_date(); ?></p>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="byline">by <?php the_author(); ?></p>
				<span style="blog-post"><?php the_excerpt(); ?></span>
				<a href="<?php the_permalink(); ?>" class="blog-read-more">Read More &gt;&gt;</a>

				<hr>
			</div>



<?php endwhile; ?>

<?php
previous_posts_link('<span class="pagination-button">&laquo; previous</span>' );
?>
<span style="float:right;"><?php

next_posts_link( '<span class="pagination-button">next &raquo;</span>', $the_query->max_num_pages ); ?> </span>

<?php 
// clean up after our query
wp_reset_postdata(); ?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


		</div> <!-- END Latest Posts -->

	


</div> <!-- END content -->



<?php get_footer(); ?>