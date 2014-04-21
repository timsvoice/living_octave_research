<?php get_header( ); ?>

<div class="container"> 

	<div class="row">
		<div class="next-article large-12 columns alpha beta">
			<div class="next-article-left">				
				<?php next_post_link( '%link', '<i class="icon-ios7-arrow-left"></i><p>previous <span class="show-for-medium-up">article</span></p>', false, $in_same_term = true, 'issue_number' ); ?>				
			</div> <!-- next-article-left -->
			<div class="next-article-right">
				<?php previous_post_link( '%link', '<p>next <span class="show-for-medium-up">article</span></p><i class="icon-ios7-arrow-right"></i>', false, $in_same_term = true, 'issue_number' ); ?>			
			</div><!-- next article right -->			
		</div><!-- next article -->
	</div><!-- row -->

	<?php while ( have_posts()) : the_post(); ?>	
	<div class="row">


		<div class="article-single large-12 columns">
			<h2 class="article-single-title">
				<?php the_title(); ?>			
			</h2>			
			<p class="article-single-contents-biline"><?php the_field('biline') ?></p>
			<p class="article-single-contents-meta">
						By <?php the_author_posts_link(); ?> ,  filed under <?php the_category( ', ' ); ?> on <?php the_date( ); ?>
					</p>
			<!-- <h3 class="article-single-date">13/12/13</h3> -->
			
			

			<div class="article-single-contents">
				<img src="<?php the_field('featured_image') ?>" alt="" class="article-single-contents-image small-12 columns alpha beta">
				
				<div class="article-single-contents-text large-8 medium-8 columns">
						
						<p class="article-single-contents-text-body">
							<?php the_content( ); ?>
						</p>
						
				</div><!-- article-single-contents-text -->
			</div><!-- article-single-contents -->

			<?php endwhile ?>

			<?php get_sidebar( articleindex ); ?>
			
		</div><!-- article -->
	</div><!-- row -->
	
	<?php get_sidebar( relatedreading ); ?>

</div><!-- container -->

<?php get_footer( ); ?>