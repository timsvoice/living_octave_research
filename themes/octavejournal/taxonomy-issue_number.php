<?php 
/**
* A Simple Taxonomy Template
*/

get_header( ); ?>

<div class="row">
	<div class="category-header small-8 columns">
		<h2 class="category-title"><?php single_cat_title( ); ?></h2>
	</div>
</div>



<div class="row">
	<img src="http://www.octavejournal.com/wp-content/uploads/2014/04/featured.png" alt="" class="article-single-contents-image small-12 columns">
	<div class="category small-12 large-8 large-offset-4 columns issue-intro">

	<p class="issue-intro-text">
		Octave approaches health & wellness improvement with a holistic perspective. We believe that mental, physical, emotional, and spiritual health are all connected. In order to improve our health and well-being, we must consider all of these aspects of our lives. Octave aims to empower people by providing a platform where they can explore, engage, and practice a healthy lifestyle. As we grow, we will develop a health and wellness management program where our coaches and practitioners will lead members through a wellness journey customized to the customer’s individual needs. The OLR will start by delivering one-to-one educational sessions and group classes in four main areas: Nurture, Practice, Connect, & Discover.
	</p>
	
	<img src="http://www.octavejournal.com/wp-content/uploads/2014/04/nurture1.png" alt="" class="article-single-contents-image small-12 columns alpha beta">

	<h3 class="issue-intro-section-title">Nurture - Nourishing from within</h3>
	<p class="issue-intro-section-text">
		The choices we make regarding food and exercise create a direct line to how we feel and act. Octave will empower people to make conscious decisions about what kinds of food, exercise, and other “nurturing” are most suitable for them. Our naturopath (natural medicine doctor) will work with together with our physiotherapist (Jurgen Bernaers) to treat and coach customers in areas including healthy eating, natural remedies, body alignment and rehabilitation. Octave’s creative, sustainability-conscious F&B team will work together with our naturopath, gardener, and local farmers to provide healthy whole foods and cooking classes.
	</p>

	<img src="http://www.octavejournal.com/wp-content/uploads/2014/04/practice4.jpg" alt="" class="article-single-contents-image small-12 columns alpha beta">

	<h3 class="issue-intro-section-title">Practice - Synergizing the body and mind</h3>
  <p class="issue-intro-section-text">
  	Developing a harmonious relationship between our minds and bodies is vital to a healthy life. Once we strengthen our awareness and connection with our selves, we will be able to relate with wider society in a more conscious and meaningful way. Octave’s mind-body practitioner (Alvaro Esteban) and his team will lead a diverse array of group classes including qigong, dance, meditation, breathwork, and yoga, as well as conduct one-to-one sessions for clients.
  </p>

	<img src="http://www.octavejournal.com/wp-content/uploads/2014/04/connect1.jpg" alt="" class="article-single-contents-image small-12 columns alpha beta">

  <h3 class="issue-intro-section-title">Connect - Building life-changing relationships</h3>
	<p class="issue-intro-section-text">
		Octave encourages the development of greater understanding and deeper connections between our customers and the people in their lives. Our family therapists (Maxi Quan and Leon Liu) and expat counselors will offer private, family, and group counseling, communication, and therapy sessions to help our customers develop healthy relationships.
	</p> 
	
	<img src="http://www.octavejournal.com/wp-content/uploads/2014/04/discover2.jpg" alt="" class="article-single-contents-image small-12 columns alpha beta">

	<h3 class="issue-intro-section-title">Discover - Activating your purpose</h3>
	<p class="issue-intro-section-text">
		Every person has their own unique life purpose and their own natural ways of expressing themselves. When we discover our purpose, we discover our most fulfilling way to engage and connect with life. Our life/career coaches and arts facilitator will work together to create a free, expressive and open environment where customers can be inspired to dive into their talents and passions. We will offer life coaching, career coaching, expressive arts classes, and more, aiming to bring people the tools needed to discover and realize their purpose.
	</p>
	
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