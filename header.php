<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Awesome Theme</title>
		<?php wp_head(); ?>
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;
		
	?>
	
	<body <?php body_class( $awesome_classes ); ?>>
		
		<div class="">
		
			<div class="row">
				
				<div class="col-xs-12">
					
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">2
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#"><img src="<?php echo get_bloginfo('template_directory');?>/img/Logo-Master-Circuitos2.png"></a>
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right'
									)
								);
							?>
						</div>
					  </div><!-- /.container-fluid -->
					</nav>
				
				</div>				
			</div>