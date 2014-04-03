<div class="row">
    <div class="related-articles medium-8 medium-offset-4 columns">
      <hr class="divider">
      <h3 class="related-articles-header">Related Reading</h3>
      <ul class="large-block-grid-3 medium-block-grid-3">
        
        <?php 

        $relatedReading = array(
          'post_type' => 'any', 
          'posts_per_page' => '3',
          'orderby' => 'rand',
          'post__not_in' => array($post->ID) 
        );

        $relatedPosts = new WP_Query($relatedReading); 

        ?>

        <?php while($relatedPosts->have_posts() ) : $relatedPosts->the_post() ?>

        <li class="related-articles-image">
          <img src="<?php the_field( 'featured_image' ) ?>" alt="" class="">
          <p><?php the_field( 'summary' ) ?></p>
        </li>

      <?php endwhile ?>
        
      </ul>
    </div>
  </div><!-- row -->