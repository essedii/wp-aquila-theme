<?php
/**
 * Video Content Template 
 * 
 * To be used inside WordPress The Loop.
 * 
 * @package Aquila
 */

?>



<?php
if (is_single()) {
    the_content(
        sprintf(
            wp_kses(
                __('Continue reading %s <span class="meta-nav">&rerr;</span>', 'aquila'),
                [
                    'span' => [
                        'class' => []
                    ]
                ]
            ),
            the_title('<span class"screen-reader-text>"', '"</span>', false)
        )
    );

    // wp_link_pages(
    //     [
    //         'before' => '<div class"page-links">' . esc_html__('Pages:', 'aquila'),
    //         'after' => '</div>'
    //     ]
    // );
} 

?>
