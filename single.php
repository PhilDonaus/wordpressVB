<?php get_header(); ?>

	<div class="container-fluid" style="min-height: 100vh;">
		<div class='row' style="background-color: black; height: 100vh; ">
			<div class="col-md-9">
				<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();

						get_template_part( 'content-single', get_post_format() );

						endwhile; endif;
				?>
			</div>
			<div class="col-md-3">
				<h1>This is where the sidebar will be is going to be</h1>
			</div>
		</div>
	</div>  

<?php get_footer(); ?>
