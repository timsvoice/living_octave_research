<div class="article-index medium-4 columns show-for-medium-up alpha">
	<ul id="article-sticker" class="article-index-side-nav">
		<li >
			<h5 class="article-index-side-nav-header">Also in this Issue</h5>
		</li>
		
		<?php 
			
			$currentTaxonomy = wp_get_object_terms($post->ID, 'issue_number', array('fields' => 'slugs') );

			$issueRelated = array(
				'post_type' => 'any', 
				'posts_per_page' => '6',
				'post__not_in' => array($post->ID),
				'tax_query' => array(
						array(
							'taxonomy' => 'issue_number',
							'field' => 'slug',
							'terms' => $currentTaxonomy
					)
				)
			);

			$relatedPosts = new WP_Query($issueRelated); 
		
		?>
		
		<?php while($relatedPosts->have_posts() ) : $relatedPosts->the_post() ?>

		
			<li class="article-index-side-nav-item clearfix">			
			
			<a href="<?php the_permalink();?>">
				<img class="article-index-side-nav-image small-3 columns alpha beta" src="<?php the_field ('index_image'); ?>" alt="">
			</a>

			<!-- <h5 class="article-index-side-nav-title">
				<a href="#"><?php the_title (); ?></a>
			</h5> -->
			
			<p class="article-index-side-nav-teaser small-8 columns alpha beta">
				<a href="<?php the_permalink(); ?>">
					<?php the_field ('biline') ?>
				</a>
			</p>

		</li>
		
		
		<?php endwhile; 
		wp_reset_query();
		?>

	</ul>
</div><!-- article-index -->


