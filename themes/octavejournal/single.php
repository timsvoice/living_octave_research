<?php get_header( ); ?>

<div class="container"> 
	<?php if ( have_posts() ) : while (have_posts() ) :
		the_post(); ?>
		<?php get_post_custom_values('issue_number'); ?>

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

	
	<div class="row">


		<div class="article-single large-12 columns">
			<h2 class="article-single-title">
				<?php the_title(); ?>			
			</h2>			
			<p class="article-single-contents-meta">
						By <?php the_author_posts_link(); ?> ,  filed under <?php the_category( ', ' ); ?> on <?php the_date( ); ?>
					</p>
			<!-- <h3 class="article-single-date">13/12/13</h3> -->
			
			<div class="article-single-contents">
				<img src="<?php the_field('featured_image') ?>" alt="" class="article-single-contents-image small-12 columns alpha beta">
				<?php get_sidebar( articleindex ); ?>
				<div class="article-single-contents-text large-8 medium-8 columns">
					
						<p class="article-single-contents-text-body">
							<?php the_content( ); ?>
						</p>
						
				</div>
			</div><!-- article-single-contents -->
			
		</div><!-- article -->

		<?php endwhile; else: ?>
<p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
	</div><!-- row -->
	
	<div class="row">
		<div class="related-articles medium-8 medium-offset-4 columns">
			<hr class="divider">
			<h3 class="related-articles-header">Related Reading</h3>
			<ul class="large-block-grid-3 medium-block-grid-3">
				<li class="related-articles">
					<img class="related-articles-image show-for-medium-up" src="http://placehold.it/300x168" alt="">
					<img class="related-articles-image show-for-small-only" src="http://placehold.it/100x100" alt="">
					<h5 class="related-articles-title">
						<a href="#">Article Title</a>
					</h5>
					<p class="related-articles-teaser small">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					</p>
				</li>
				<li class="related-articles">
					<img class="related-articles-image show-for-medium-up" src="http://placehold.it/300x168" alt="">
					<img class="related-articles-image show-for-small-only" src="http://placehold.it/100x100" alt="">
					<h5 class="related-articles-title">
						<a href="#">Article Title</a>
					</h5>
					<p class="related-articles-teaser small">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					</p>
				</li><li class="related-articles">
					<img class="related-articles-image show-for-medium-up" src="http://placehold.it/300x168" alt="">
					<img class="related-articles-image show-for-small-only" src="http://placehold.it/100x100" alt="">
					<h5 class="related-articles-title">
						<a href="#">Article Title</a>
					</h5>
					<p class="related-articles-teaser small">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					</p>
				</li>
			</ul>
		</div>
	</div><!-- row -->

</div><!-- container -->

<?php get_footer( ); ?>