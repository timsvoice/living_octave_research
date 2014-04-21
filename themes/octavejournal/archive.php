<?php 
/**
* A Simple Category Template
*/

get_header( ); ?>

<div class="row">
	<div class="category-header small-8 columns">
		<h2 class="category-title"><?php single_cat_title( ); ?></h2>
		<div class="category-description">
			<?php echo category_description( ); ?>
		</div>
	</div>
</div>



<div class="row">
	<div class="category small-12 large-12 columns beta">
	

		<?php if( have_posts() ): ?>

    <?php while (have_posts() ) :the_post(); ?>	
    	<?php if (++$count > 1) break; ?>

		<div class="category-featured-article small-12 large-12 columns alpha">
			<img src="<?php the_field ('featured_image') ?>" alt="" class="category-featured-article-image small-12 medium-6 columns alpha">
			<h4 class="category-featured-article-header">Latest in <?php single_cat_title( ); ?></h4>
			<h3 class="category-featured-article-title"><?php the_title(); ?></h3>
				<p class="articles-article-meta">
					<a href="#"><?php the_author(); ?></a>
				</p>
			<p class="category-featured-article-teaser">
				<?php the_field ('teaser') ?>
				<a href="#">read more</a>
			</p>
		</div>

		<?php endwhile; ?>
	<?php endif; ?>


	</div>
</div><!-- row -->

<div class="row">
		<div class="articles small-12 columns">
			<ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1">
				
				<?php while ( have_posts() ) : the_post(); ?>		                		      

						<li class="articles-article">
							<a href="<?php the_permalink(); ?>">
		                		<img src="<?php the_field('featured_image');?>" alt="">
		                	</a>
							
							<h3 class="articles-article-title">
								<a href="<?php the_permalink(); ?>">
									<?php the_title( ); ?>									
								</a>
							</h3>
							<p class="articles-article-contents-meta">
									<a href="#"><?php the_author(); ?>
								</p>
							<p class="articles-article-teaser">
								<?php the_field('teaser') ?>
							</p>
						</li>

          <?php endwhile; ?>

				
			</ul>
		</div><!-- articles -->
	</div>

<?php get_footer( ); ?>