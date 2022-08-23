<?php

/**
 * Archive Video template file.
 *
 * @package Aquila
 */

get_header();
?>
<div class="grid__archive__videos">
	<div>
		<?php
		get_template_part('template-parts/components/videos-carousel');
		?>

	</div>


</div>
<?php

get_footer();