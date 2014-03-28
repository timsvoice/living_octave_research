<?php get_header( ); ?>

<div class="container">
	
	<div class="row">
		<div class="next-article large-12 columns alpha beta">
			<div class="next-article-left">				
				<i class="icon-ios7-arrow-left"></i>
				<p>previous <span class="show-for-medium-up">article</span></p>
			</div>
			<div class="next-article-right">
				<p>next <span class="show-for-medium-up">article</span></p>
				<i class="icon-ios7-arrow-right"></i>
			</div>			
		</div>
	</div>

	<div class="row">
		<div class="article-single large-12 columns">
			<h2 class="article-single-title">
				<a href="#">Big Bold Title</a>
			</h2>			
			<p class="article-single-contents-meta">
						By <a href="#">Author Name</a>, filed under <a href="#">category</a> on <a href="#">published date</a>
					</p>
			<!-- <h3 class="article-single-date">13/12/13</h3> -->
			
			<div class="article-single-contents">
				<img src="http://placehold.it/1000x516" alt="" class="article-single-contents-image">
				<?php get_sidebar( articleindex ); ?>
				<div class="article-single-contents-text large-8 medium-8 columns">
					
						<p class="article-single-contents-text-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, exercitationem, facilis, ut doloremque hic adipisci tempore accusantium ipsa quam doloribus enim saepe obcaecati nostrum quaerat nulla. Voluptatibus, et, possimus, dignissimos, consectetur sed maiores nemo similique tempore qui voluptates aliquam rerum facilis reprehenderit. Quis, odio, eligendi, nisi, a eum quibusdam quae quia adipisci illum unde delectus eius omnis modi? Reprehenderit, est, aspernatur iure quia incidunt numquam asperiores illo animi assumenda aliquam libero harum aperiam accusantium voluptatum quaerat eos quis.</p>
						
						<p class="article-single-contents-text-body">Officia, ab, molestias voluptas nobis rerum totam eveniet nemo deserunt debitis similique unde ullam excepturi animi eum libero sequi facilis tempore reprehenderit temporibus ipsam ad neque sit qui autem culpa laborum facere quibusdam tenetur inventore voluptate dicta nostrum recusandae sed.</p> 
						
						<div class="pull-quote">
							<p class="pull-quote-text">
								"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, voluptates!"
							</p>
						</div>

							<p class="article-single-contents-text-body">Dolore, repellendus ab tenetur iusto repellat incidunt exercitationem tempore itaque doloribus illo facere eum velit eius aliquid unde atque id delectus ipsam soluta corrupti impedit aliquam blanditiis sed odit aperiam deserunt asperiores illum consectetur eos! Veniam, similique, quidem, modi, odio et ipsa qui quae officiis corporis ratione blanditiis delectus quia omnis consequuntur explicabo! Eius, hic, numquam, consequatur, suscipit ex assumenda alias expedita nisi repudiandae voluptate itaque natus totam quaerat odio dolorem! Nemo, molestiae et officiis culpa iste deleniti rem. Totam, nobis, ratione, consequatur, qui ipsa aliquid voluptatem quisquam perspiciatis tempora laboriosam assumenda ab sed repudiandae molestias repellendus reprehenderit fuga excepturi architecto in distinctio labore dolore necessitatibus at possimus.</p>
					
				</div>
			</div><!-- article-single-contents -->
			
		</div><!-- article -->
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