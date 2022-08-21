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

$post_query = new \WP_Query( $args );
?>
<div class="video-carousel ">
<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
							?>
							<div class="m-3">
							<?php the_content(); 	?>
							</div>
							<?php				endwhile;
						else :
							get_template_part( 'template-parts/content-none' );
						endif;
						?>

</div>