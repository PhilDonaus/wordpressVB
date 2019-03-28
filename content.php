<div class="card mb-3">
	<div class="row no-gutters">
		<div class="col-md-4 fit2">
			<img src="<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}
				else{
					echo 'https://pbs.twimg.com/profile_images/1002939866194165761/xq8jUSN-_400x400.jpg';
				} ?>" 
				class="card-img" 
				alt="...">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title"><?php the_title(); ?></h5>
				<p class="card-text"><?php the_content(); ?></p>
				<p class="card-text">
					<small class="text-muted">Last updated 3 mins ago</small>
				</p>
			</div>
		</div>
	</div>
</div>