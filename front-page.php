<?php get_header(); ?>

	<div class="grid_5">

		<div class="top-left-headline">

			<div class="tag-line">

				<p>A place to relax and get nourished</p>

			</div>

			<?php query_posts("posts_per_page=1"); the_post(); ?>

			<div class="featured-bpost">

				<p class="featured-bpost-date"><?php the_date(); ?></p>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="featured-bpost-byline">by:  <?php the_author(); ?></p>
				<span style="featured-bpost-body"><?php the_excerpt(); ?></span>
				<a href="<?php the_permalink(); ?>" class="featured-bpost-more">Read More &gt;&gt;</a>

			</div>

			<?php wp_reset_query(); ?>	

		</div>

	</div>

	<div class="grid_7 omega">
		<?php easyrotator_display_rotator('erc_21_1379221782'); ?>
	</div>



		<!--begin Secondary Navigation-->
	

			<div class="sec-nav grid_12">

				<div class="grid_8 menus">
				
					<ul>
						<a href="http://www.thepark1400sunset.com/dinner-menu/" title="The Park Dinner Menu"><li>Dinner Menu</li></a>
						<a href="http://www.thepark1400sunset.com/lunch-menu/" title="The Park Lunch Menu"><li>Lunch Menu</li></a>
						<a href="http://www.thepark1400sunset.com/brunch-menu/" title="The Park Brunch Menu"><li>Brunch Menu</li></a>
					</ul>

				</div>
				
				<div class="grid_1">

					&nbsp;

				</div>

				<div class="grid_3 book-table omega">

					<ul>
							<li><a href="http://www.opentable.com/the-park-restaurant-reservations-los-angeles?rid=95863&restref=95863" title="Book a table at The Park using Open Table">Book a Table</a></li>
					</ul>

				</div>

			</div><!--end Secondary Navigation-->

	

		<div class="grid_3">

			<img src="<?php bloginfo( 'template_url' ); ?>/img/joshcover.png" alt="Chef Josh of The Park Restaurant" title="Chef Josh" class="josh-image" />

		</div>

		<div class="grid_9 omega">

			<blockquote class="main-quote">
			<p>The Park is a place to relax, get nourished and hang out with your neighbors.  Our food is simple, tasty and moderately priced, and our service is friendly and professional. </p>

			<p>We have great options for vegetarians, vegans and carnivores alike.  We look forward to seeing you soon. </p>
			<cite>- Chef Josh</cite>
			</blockquote>

		</div>

		<!--Begin Weekly Calendar-->

		<div class="grid_6">

			<table class="week-calendar-table calendar">
				<tbody>
					<tr class="week-calendar-header">
						<td><img src="<?php bloginfo( 'template_url' ); ?>/img/lantern.png" title="The Weekly Rundown" alt="fork and knife icon" class="calendar-icon"></td>
						<td>
							<h3>The Weekly Rundown</h3>
						</td>	
					</tr>

					<tr>
						<td colspan="2">
							<div class="downarrow"></div>
						</td>
					</tr>

					<tr class="toprow">
						<td class="week-calendar-day">Monday:</td>
						<td class="week-calendar-description"><?php the_field('monday'); ?></td>
					</tr>

					<tr class="week-calendar-row">
						<td class="week-calendar-day">Tuesday:</td>
						<td class="week-calendar-description"><?php the_field('tuesday'); ?></td>
					</tr>

					<tr class="week-calendar-row">
						<td class="week-calendar-day">Wednesday:</td>
						<td class="week-calendar-description"><?php the_field('wednesday'); ?></td>
					</tr>

					<tr class="week-calendar-row">
						<td class="week-calendar-day">Thursday:</td>
						<td class="week-calendar-description"><?php the_field('thursday'); ?></td>
					</tr>

					<tr class="week-calendar-row">
						<td class="week-calendar-day">Friday:</td>
						<td class="week-calendar-description"><?php the_field('friday'); ?></td>
					</tr>

					<tr class="week-calendar-row">
						<td class="week-calendar-day">Sunday:</td>
						<td class="week-calendar-description"><?php the_field('sunday'); ?></td>
					</tr>
				</tbody>
			</table>

		</div><!--end Weekly Calendar-->

		<div class="grid_1">
			&nbsp;
		</div>

		<div class="grid_5 omega">

			<!--Begin Tuesday Calendar-->

			<table class="tuesday-table calendar">
				<tbody>
					<tr class="tuesday-header">
						<td><img src="<?php bloginfo( 'template_url' ); ?>/img/key.png" title="Speakeasy Tuesday" alt="speakeasy Tuesday icon" class="calendar-icon"></td>
						<td><h3>Speakeasy Tuesday</h3></td>
						<td><span>[</span>3 courses for $15<span>]</span></td>
					</tr>

					<tr class="tuesday-row">
						<td class="main-calendar-column">Soup:</td>
						<td colspan="2" class="tuesday-description"><?php the_field('soup'); ?></td>
					</tr>

					<tr class="tuesday-row">
						<td class="main-calendar-column">Salad:</td>
						<td colspan="2" class="tuesday-description"><?php the_field('salad'); ?></td>
					</tr>

					<tr class="tuesday-row">
						<td class="main-calendar-column">Entree:<br>(carnivore)</td>
						<td colspan="2" class="tuesday-description"><?php the_field('meat_entree'); ?></td>
					</tr>

					<tr class="tuesday-row">
						<td class="main-calendar-column">Entree:<br>(veggie)</td>
						<td colspan="2" class="tuesday-description"><?php the_field('vegetarian_entree'); ?></td>
					</tr>

					<tr class="tuesday-row">
						<td class="main-calendar-column">Desert:</td>
						<td colspan="2" class="tuesday-description"><?php the_field('desert'); ?></td>
					</tr>
				</tbody>
			</table><!--end Tuesday Calendar-->

			<!--Begin Weekend Calendar-->

			<table class="weekend-special-table calendar">
				<tbody>
					<tr class="tuesday-header">
						<td><img src="<?php bloginfo( 'template_url' ); ?>/img/cal.png" title="Weekend Special" alt="weekend special icon" class="calendar-icon"></td>
						<td><h3>Weekend Special</h3>
					</tr>

					<tr class="weekend-special-row">
						<td class="main-calendar-column">Appetizer:</td>
						<td class="tuesday-description"><?php the_field('appetizer'); ?></td>
					</tr>

					<tr class="weekend-special-row">
						<td class="main-calendar-column">Entree:</td>
						<td class="tuesday-description"><?php the_field('entree'); ?></td>
					</tr>
				</tbody>
			</table><!--end Weekend Calendar-->	
		</div>
<!--Begin Footer-->
<?php get_footer(); ?>