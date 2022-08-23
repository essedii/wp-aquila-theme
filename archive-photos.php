<?php

/**
 * Archive Photos template file.
 *
 * @package Aquila
 */

get_header();
?>
<div class="" style="width: 50%; justify-content: center; margin: auto">
	<div style="margin: auto; margin-top: 50px">
		<?php
		get_template_part('template-parts/components/photos-carousel');
		?>

	</div>


</div>
<?php

get_footer();