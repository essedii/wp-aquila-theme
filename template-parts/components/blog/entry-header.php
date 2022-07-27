<?php
//  Template for post entry header.
// @package Aquila


$the_post_id   = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail($the_post_id);
?>
<header class="">
    <?php
    //Featured Images.
    if ($has_post_thumbnail) {
    ?>
        <div class="mb-3">
            <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php
                the_post_thumbnail(
                    $the_post_id,
                    'featured-thumbnail',
                    [
                        'sizes' => '(max-width: 350px) 350px, 233px',
                        'class' => ''
                    ]
                )
                ?>
            </a>
        </div>
    <?php
    }
    ?>
</header>