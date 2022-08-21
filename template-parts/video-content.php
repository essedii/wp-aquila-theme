<?php

// Video Content  Template.
// @package Aquila

?>

<div style="" id='post-<?php the_ID(); ?>' <?php post_class('mb-3'); ?>>
    <?php
    get_template_part('template-parts/components/video/entry-header');
    get_template_part('template-parts/components/video/entry-meta');
    get_template_part('template-parts/components/video/entry-content');
    get_template_part('template-parts/components/video/entry-footer');
    ?>
</div>

