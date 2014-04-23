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


	</div>
</div><!-- row -->

<div class="row">
		<div class="articles small-12 columns suzhou-project">
			<div class="small-12 medium-12 large-12 columns alpha">
				<img src="http://128.199.206.98/wp-content/uploads/2014/04/20120426_SZHH_Feb2012_SD_Submission_Renderings-9.png" alt="" class="olr-project-image">
				<div class="olr-project-description">
					<h2 class="olr-project-title">Suzhou Harmony</h2>
					<p class="olr-project-intro">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, minima natus excepturi magnam nihil sed nam libero recusandae sunt odit.
					</p>
				</div>
			</div>
			
			<ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1">
				
				<?php
					$args = array(
					'post_type' => 'article', 
					'posts_per_page' => '3',
					'category_name' => 'suzhou-harmony'
				);

				$suzhou = new WP_Query($args); 

			?>
				
				<?php while ($suzhou->have_posts() ) : $suzhou->the_post(); ?>		                		      

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
									<a href="#"><?php the_author(); ?></a>
								</p>
							<p class="articles-article-teaser">
								<?php the_field('teaser') ?>
							</p>
						</li>

          <?php endwhile; 
          wp_reset_query();
          ?>
				
			</ul>
		</div><!-- articles -->
	</div>

	<div class="row">
		<div class="articles small-12 columns olr-project">
			<div class="small-12 medium-12 large-12 columns alpha">
				<img src="http://128.199.206.98/wp-content/uploads/2014/04/20120426_SZHH_Feb2012_SD_Submission_Renderings-91.png" alt="" class="olr-project-image">
				<div class="olr-project-description">
					<h2 class="olr-project-title">Octave Living Room</h2>
					<p class="olr-project-intro">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, minima natus excepturi magnam nihil sed nam libero recusandae sunt odit.
					</p>
				</div>
			</div>
			
			<ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1">
				
			<?php
					$args = array(
					'post_type' => 'article', 
					'posts_per_page' => '3',
					'category_name' => 'octave-living-room-project'
				);

				$olr = new WP_Query($args); 

			?>
				
				<?php while ($olr->have_posts() ) : $olr->the_post(); ?>		                		      

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
									<a href="#"><?php the_author(); ?></a>
								</p>
							<p class="articles-article-teaser">
								<?php the_field('teaser') ?>
							</p>
						</li>

          <?php endwhile; 
          wp_reset_query();
          ?>
				
			</ul>
		</div><!-- articles -->
	</div>

<?php get_footer( ); ?>