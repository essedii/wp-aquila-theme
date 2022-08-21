<?php
/**
 * Archive Page template file.
 *
 * @package Aquila
 */

get_header();

?>

	<div id="primary" >
		<main id="main" class=" my-5" role="main">
			<div class="container">
				<header class="page-header">
				
				</header><!-- .page-header -->
				<div class="">
				<?php
		get_template_part( 'template-parts/components/posts-carousel' );
		?>
			</div>
	
		</main>
	
	</div>

<?php

get_footer();