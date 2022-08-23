<?php

/**
 * Photos Carousel
 *
 * @package aquila
 */

$args = [

	'post_type'              =>
'photos', 'update_post_meta_cache' => false, 'update_post_term_cache' => false,
]; $post_query = new \WP_Query($args); ?>
<div style=" 

  ">
    
<div class="multiple-items slider__video "  >
  <?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>
  <div>
    <!-- <button class="left" style="background: none; border: none">
			<i class="fa fa-chevron-left fa-2xl m-2"></i>
		</button> -->
  
      <!-- <div class="container" style=" padding:0; width: 210px; "> -->

      <div>
	  <?php the_content() 	?>
	</div>


    <!-- <button class="right" style="background: none; border: none"><i class="fa fa-chevron-right fa-2xl m-2"></i></button> -->
  </div>
  <?php endwhile;
		else :
			get_template_part('template-parts/content-none');
		endif;
		?>
</div>
</div>