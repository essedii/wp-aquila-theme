<?php

/** 
 * Template for entry meta.
 * 
 * To be used inside WP The Loop.
 * 
 * @package Aquila
 */

?>

<div class="entry-meta mb-3">
    <?php aquila_post_on();
    aquila_posted_by();
    ?>
</div>