<?php get_header(); ?>

<div class="container">

	<div class="issue">
		
		<div class="row">
			<div class="issue-meta large-12 columns">
				<h3 class="issue-title"><a href="#">Galloping into the Year of the Horse</a></h3>
				<h3 class="issue-date">November 2013</h3>
			</div><!-- issue-meta -->
		</div><!-- row -->
		
		<div class="issue-contents">
			<div class="issue-contents-carousel">
				<div id="issue-carousel" class="owl-carousel">
					
					<?php $loop = new WP_Query( array(  
					'issue_number' => 'Issue #3: Galloping into the Year of the Horse', 
					'posts_per_page' => 9) ); ?>
		            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		                
		                <div class="item">
		                	<a href="<?php the_permalink(); ?>">
		                		<img alt="" class="lazyOwl" data-src="<?php the_field('featured_image');?>">
		                	</a>
							<div class="issue-contents-carousel-item-content hidden">
								<h3 class="issue-contents-carousel-item-content-title"><a href="<?php the_permalink(); ?>">
									<?php the_title( ); ?>
								</a></h3>
								<p class="issue-contents-carousel-item-content-teaser">
									<?php the_field('summary') ?>
								</p>
							</div>
						</div>

		            <?php endwhile; ?>
					
				</div>
			</div>
		</div><!-- issue-contents -->

	</div><!-- issue -->

		
	<div class="row">
		<div class="articles small-12 columns">
			<h2 class="articles-header small-12 columns alpha beta">
				Articles
			</h2>
			<ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1">
				
				<?php $loop = new WP_Query( array(  
					'post_type' => 'articles', 
					'posts_per_page' => 9) ); ?>
		            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>		                		      

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
									By <a href="#">Author Name</a>, filed under <a href="#">Category</a>
								</p>
							<p class="articles-article-teaser">
								<?php the_field('summary') ?>
							</p>
						</li>

		            <?php endwhile; ?>

				
			</ul>
		</div><!-- articles -->
	</div>

</div><!-- container -->

<?php get_footer(); ?>