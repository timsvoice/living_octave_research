<div class="row">
    <div class="related-articles medium-8 medium-offset-4 columns">
      <hr class="divider">
      <h3 class="related-articles-header">Related Reading</h3>
      <ul class="large-block-grid-3 medium-block-grid-3">
    
    <?php 
      
      $currentCategory = wp_get_object_terms($post->ID, 'issue_number', array('fields' => 'slugs') );

      $issueRelated = array(
        'post_type' => 'articles', 
        'posts_per_page' => '3',
        'orderby' => 'rand',
        'tax_query' => array(
            array(
              'taxonomy' => 'issue_number',
              'field' => 'slug',
              'terms' => $currentCategory,
              'operator' => 'NOT IN'
          )
        )
      );

      $relatedReading = new WP_Query($issueRelated); 
    
    ?>
    
    <?php while($relatedReading->have_posts() ) : $relatedReading->the_post() ?>

        <li class="related-articles">
          <img src="<?php the_field( 'featured_image' ) ?>" alt="" class="related-articles-image">
          <h5 class="related-articles-title"><?php the_title(); ?></h5>
          <p class="related-articles-teaser"><?php the_field( 'biline' ) ?></p>
        </li>

      <?php endwhile;
      wp_reset_query();
      ?>
        
      </ul>
    </div>
  </div><!-- row -->