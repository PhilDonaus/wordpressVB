
<?php get_header(); ?>

	<div class="container-fluid disp">
		<div class="row my-pane">
			<div class="col-12 fit ">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/index_img/vinniepromo1.gif">
			</div>
			<div class="center-logo">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/index_img/vinnielogowhite.png">
			</div>
			
		</div>
	</div>
	<a id="more"></a>
	
	<div class="container-fluid" style="height:100vh; max-height:700px; overflow:hidden;">
		<div class="row" style="height: 100%">
			<!-- Carousel Starts Here -->
			<div class="col-md-5" style="padding:0;">
				<div id="vinnieEvents" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="xyfit dotted">
								<img  src="<?php echo get_bloginfo('template_directory'); ?>/index_img/stressfactory.jpg">
								<div class="content">
									<h2>Stress Factory</h2>
									<p>New Brunswick, NJ</p>
									<h3>March 21 to March 23</h3>
								</div>
							</div>
						</div>
						<div class="carousel-item ">
							<div class="xyfit dotted">
								<img src="https://d1p2fuior9l0tb.cloudfront.net/wp-content/uploads/2016/11/04144051/feature.jpg">
								<div class="content">
									<h2>Carnegie Hall</h2>
									<p>New York, New York</p>
									<h3>April 21 to April 23</h3>
								</div>
							</div>
						</div>
						<div class="carousel-item ">
							<div class="xyfit dotted">
								<img src="http://images.tritondigitalcms.com/5829/sites/15/2018/05/02204818/IMG_7281.jpg">
								<div class="content">
									<h2>Stress Factory</h2>
									<p>Bridgeport, CT</p>
									<h3>March 21 to March 23</h3>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#vinnieEvents" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#vinnieEvents" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div> 
			</div>
			<!--Cards Here -->
			<div class="col-md-7 negative-space">
				<div class="float-array">
					<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();

							get_template_part( 'content', get_post_format() );

							endwhile; endif;
					?>
					<div class="card mb-3">
						<div class="row no-gutters">
							
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title">Vinnie Brand - Biography</h5>
									<p class="card-text">Vinnie Brand, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
							<div class="col-md-4 fit2">
								<img src="https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-9/49206063_10214675570455164_9165319029794013184_o.jpg?_nc_cat=100&_nc_ht=scontent-lga3-1.xx&oh=2e8967caf21bb08e999b24d94d5fb737&oe=5D242263" class="card-img" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid console">
		<div class="row case">
			<div class="col-md-4 blog-case">
				<div class="fit2 " style="">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/index_img/vinnieHeadshot3.jpg">
				</div>
				<div class="bord"></div>
			</div>
			<div class="col-md-4 blog-case">
				<div class="fit2">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/index_img/vinnieHeadshot2.jpg">
				</div>
				<div class="bord"></div>
			</div>
			<div class="col-md-4 blog-case">
				<div class="fit2" >
					<img style="right:0" src="<?php echo get_bloginfo('template_directory'); ?>/index_img/vinnieHeadshot.jpg">
				</div>
				<div class="bord"></div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>