<?php get_header(); ?>

<div class="container">

	<div class="issue">
		<div class="issue-intro" id="splash">
			<img class="background-image" src="<?php bloginfo('template_url'); ?>/css/assets/background.jpg" alt="">
			<div class="issue-overlay"></div><!-- issue-overlay -->
			<div class="horizon">
				<div class="issue-intro-center">
					<div class="row">
						<div class="issue-meta large-12 columns">
							<h3 class="issue-title"><a href="http://www.octavejournal.com/?issue_number=issue-4-activating-wellbeing">Activating Wellbeing</a></h3>
							<h3 class="issue-date">April 2014</h3>
						</div><!-- issue-meta -->
					</div><!-- row -->
					
					<div class="row">
							<div class="issue-intro-text small-12 medium-8 columns small-centered">
								<p class="">
									With our two ongoing projects in Shanghai and Suzhou underway, many of Octave’s team are working tirelessly on the details of real estate design and construction. As our daily tasks require us to often focus on the exterior “hardware” of our projects, it can be easy to overlook the importance of Octave’s “software” - our programs. As we prepare to launch the Octave Living Room this summer, it is the perfect time for our team to take a closer look at our health and wellness service offerings.									
								</p>
								<a href="http://www.octavejournal.com/?issue_number=issue-4-activating-wellbeing" class="large button">read issue</a>
							</div>
						</div>
				</div><!-- issue-intro-center -->
			</div><!-- horizon -->
		</div><!-- issue-intro -->

		<!-- <div class="issue-articles">
			<div class="issue-contents">
			<div class="issue-contents-carousel">
				<div id="issue-carousel" class="owl-carousel">
					
					<?php $loop = new WP_Query( array(  
					'issue_number' => 'Issue #4: Activating Wellbeing', 
					'posts_per_page' => 9,
					'orderby' => 'title',
					'order' => 'ASC') ); ?>
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
									<?php the_field('teaser') ?>
								</p>
							</div>
						</div>

            <?php endwhile; ?>
					
				</div>
			</div>
		</div><!-- issue-contents -->
		</div><!-- issue-articles -->

	</div><!-- issue -->

		
	<div class="row">
		<div class="articles small-12 columns">
			<h2 class="articles-header small-12 columns alpha beta">
				Reading List
			</h2>
			<ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1">
				
				<?php $loop = new WP_Query( array(  
					'post_type' => 'articles', 
					'posts_per_page' => 9,
					'tax_query' => array(
						array(
							'taxonomy' => 'issue_number',
							'field' => 'id',
							'terms' => array(112, 113, 114, 115),
							'operator' => 'NOT IN'
								)
							)	
						) 
					); 
					?>
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

</div><!-- container -->

<?php get_footer(); ?>