<!DOCTYPE html>
<html>
<head>
	<title>Vinnie Brand</title>
	<!-- bootstrap CDN Style -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/vinnie-brand-theme.css">
	<?php wp_head();?>
</head>
<body>
	<!--bootstrap CDN Js Jq-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/index.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<!-- My custom header -->
	<div id="navwrap" class="info-box" style="visibility: visible;">
		<div id="" style="height: 70px" >
			<button  type="" class="X" data-toggle="modal" data-target="#menuModalTry">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/index_img/vinniefavicon.png" style="height:10vh;"/>
				<h3  style="display: inline;">MENU</h3>
			</button>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="menuModalTry" tabindex="-1" role="dialog" aria-labelledby="menuModal" aria-hidden="true">
		<button  type="" class="X" data-dismiss="modal">X</button>
	  	<div class="modal-dialog" style="">
	    	<div class="modal-content" style="background-color: rgba(0,0,0,0); border-color:rgba(0,0,0,0);">
      			<div class="row" style="">
      				<div class="col-md-3 menu-pane fit2 ">
      					<img src="https://images.pexels.com/photos/908286/pexels-photo-908286.jpeg?cs=srgb&dl=close-up-concrete-creativity-908286.jpg&fm=jpg">
      					<h2>Blog</h2>
      				</div>
      				<div class="col-md-4 menu-pane fit2 ">
      					<img src="https://images.pexels.com/photos/908286/pexels-photo-908286.jpeg?cs=srgb&dl=close-up-concrete-creativity-908286.jpg&fm=jpg">
      					<h2>Podcast</h2>
      				</div>
      				<div class="col-md-3 menu-pane fit2 ">
      					<img src="https://images.pexels.com/photos/908286/pexels-photo-908286.jpeg?cs=srgb&dl=close-up-concrete-creativity-908286.jpg&fm=jpg">
      					<h2>Videos</h2>
      				</div>
      				<div class="col-md-3 menu-pane fit2 ">
      					<img src="https://images.pexels.com/photos/908286/pexels-photo-908286.jpeg?cs=srgb&dl=close-up-concrete-creativity-908286.jpg&fm=jpg">
      					<h2>Social Media</h2>
      				</div>
      			</div>
	    	</div>
	  	</div>
	</div>

	<!-- my custom header end-->