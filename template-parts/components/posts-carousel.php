<?php

/**
 * Posts Carousel
 *
 * @package aquila
 */

$args = [
	'posts_per_page'         => 'default',
	'post_type'              => 'videos',
	'update_post_meta_cache' => false,
	'update_post_term_cache' => false,
];

$post_query = new \WP_Query($args);
?>
<div class="slider d-flex flex-row align-items-center justify-content-center ">
	<?php
	if (have_posts()) :
		while (have_posts()) : the_post();
	?>
	<div class=" ">
		<!-- <button class="left" style="background: none; border: none">
			<i class="fa fa-chevron-left fa-2xl m-2"></i>
		</button> -->
		
		<div> <?php the_content(); 	?></div>

		<!-- <button class="right" style="background: none; border: none"><i class="fa fa-chevron-right fa-2xl m-2"></i></button> -->
	</div>
	<?php endwhile;
	else :
		get_template_part('template-parts/content-none');
	endif;
	?>

</div>

