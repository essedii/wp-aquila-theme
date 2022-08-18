<?php
/**
 * Archive Page template file.
 *
 * @package Aquila
 */

get_header();

?>
<div>Hello World</div>
	<div id="primary">
		<main id="main" class="site-main my-5" role="main">
			<div class="container">
            <div>Hello World archive</div>
				<header class="page-header">
					<?php
					if ( ! empty( single_term_title( '', false ) ) ) {
						printf(
							'<h1 class="page-title">%s</h1>',
							single_term_title( '', false )
						);
					}

					if ( ! empty( get_the_archive_description() ) ) {
						the_archive_description( '<div class="archive-description">', '</div>' );
					}
					?>
				</header><!-- .page-header -->
				<div class="site-content">
					<div class="row">
					<div>
                    <?php
                    	


                    ?>
                </div>
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
							the_content();
							endwhile;
						else :
							get_template_part( 'template-parts/content-none' );
						endif;
						?>
					</div>
					<div>
						<?php aquila_pagination(); ?>
					</div>
				</div>
			</div>
		</main>
	</div>

<?php

get_footer();