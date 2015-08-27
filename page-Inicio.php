<?php get_header(); ?>
		
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <!-- 
    <div class="item active">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide1.jpg" alt="...">
      <div class="caro-caps">
  <h2>BOND / EXIT CLEAN SPECIALISTS</h2>
        <p>Moving Out? We can save you time and moneyby providing you
with bond cleaning, carpet cleaning and pest control
services at a discounted price</p>
  <div class="lnk-btn more-btn"><a href="#">More Details</a></div>
      </div>
    </div>
    -->
   
   
   
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
                 <?php the_post_thumbnail('full'); ?>

                  <h2> <?php the_title(); ?> </h2>
                  <p> <?php the_content();?> </p>           
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