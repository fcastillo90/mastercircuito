<?php get_header(); ?>
<div class="banner">
</div>
<div class="col-md-12" style="margin-top:40px;">
	<div class="container">
			<?php
            $args = array( 'numberposts' => 5, 'order'=> 'DESC', 'orderby' => 'post_date', 'tag' =>'certificaciones');
            $postslist = get_posts( $args );
            
            foreach ($postslist as $post) :  setup_postdata($post); ?>
    				<div class="row">
                    	  <div class="col-md-6">
                                <hr class="section-heading-spacer">
                                <div class="clearfix"></div>
                                <h2 class="section-heading"><?php the_title(); ?></h2>
                                <p class="lead"><?php the_content(); ?></p>
                          </div>
                          <div class="col-md-6">
                          </div>
       				 </div>
            <?php endforeach; ?>
    </div>
</div>
<?php get_footer(); ?>