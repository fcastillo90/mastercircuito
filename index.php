<?php get_header(); ?>
<br><br>


<div class="row">
	
	<div class="col-xs-12 col-sm-8">
		
		<div class="row text-center no-margin">

		<?php 
		$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array('posts_per_page' => 3, 'paged' => $currentPage);
		query_posts($args);
		if( have_posts() ): $i = 0;
			
			while( have_posts() ): the_post(); ?>
            		
			<?php $i++; endwhile; ?>			
		<?php endif;
				wp_reset_query();
		?>
		</div>
	
	</div>
</div>

<?php get_footer(); ?>