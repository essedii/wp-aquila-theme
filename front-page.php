<?php
// Main tempalte file.
// @package aquila
// include_once'header.php';
get_header();
?>
<div class=" d-flex row" style="height: 100%;" >
<?php

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'home',
    'posts_per_page' => 3,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <div class="col p-0 mh-auto bg-primary align-item-center  img-hover-zoom style="  width:
        100%;
    height:100%; "  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php
             $featured_img_url = get_the_post_thumbnail_url(); 
            if ( has_post_thumbnail() ) :

                echo '<img src="'.$featured_img_url.'" 
                style=" min-height:100%; max-width:100%; object-fit: cover;  object-position: 50% 50%;"
               "
                " >'; 
            endif;
            ?>
           
        </div>
        <?php
    endwhile;
endif;

