<?php get_header(); ?>

	<div class="container-fluid" style="min-height: 100vh;">
		<div class='row' style="background-color: black; height: 100vh; ">
			<div class="col-md-6">
				<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();

							get_template_part( 'content', get_post_format() );

							endwhile; endif;
					?>
			</div>
			
		</div>
	</div>  

<?php get_footer(); ?>
