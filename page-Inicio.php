<?php get_header(); ?>
		
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>   
<div class="carousel-inner">
               <?php
 $class_active="active";

 $args=array(
      'post_type'=> 'sliders',
      'post_status' => 'publish',
      'posts_per_page' => 3,
 
     );
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
             
                <div class="item <?php echo $class_active ;?>">
					<?php the_content();?>          
                  </div>
                   <?php

 $class_active="";
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
                 
  
                </div>

<!-- Left and right controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
</div>
<?php get_footer(); ?>