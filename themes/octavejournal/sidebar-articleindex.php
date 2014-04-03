<div class="article-index medium-4 columns show-for-medium-up alpha">
	<ul id="article-sticker" class="article-index-side-nav">
		<li class="article-index-side-nav-header">
			<h3>Also in this Issue</h3>
		</li>
		
		<?php 
			
			$currentTaxonomy = wp_get_object_terms($post->ID, 'issue_number', array('fields' => 'slugs') );

			$issueRelated = array(
				'post_type' => 'any', 
				'posts_per_page' => '5',
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
			
			<img class="article-index-side-nav-image small-3 columns alpha beta" src="<?php the_field ('featured_image'); ?>" alt="">
			
			<!-- <h5 class="article-index-side-nav-title">
				<a href="#"><?php the_title (); ?></a>
			</h5> -->
			
			<p class="article-index-side-nav-teaser small-8 columns alpha beta">
				<?php the_field ('summary') ?>
			</p>

		</li>
		
		<?php endwhile; ?>

	</ul>
</div><!-- article-index -->