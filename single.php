<?php

/**
 * Single post template.
 * 
 * @package Aquila.
 */
get_header();
?>
<div id="primary">
    <main id="main" class="site-main mt-5" role='main'>
        <?php
        if (have_posts()) {
        ?>
            <div class="container">
            <div>helloworldsingle</div>


                <?php
                if (is_home() && !is_front_page()) {
                ?>
                    <header class="mb-5">
                        <h1 class="page-title screen-reader-text">
                            <?php single_post_title(); ?>
                        </h1>
                    </header>
                <?php
                }

                while (have_posts()) : the_post();
                ?>
              
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <?php
                        get_template_part('template-parts/content'); {
                        ?>
                    </div>
            <?php
                        }
                    endwhile;
            ?>
            <!-- <div class="conatiner d-flex flex-row">
                <div class="prev-link"><?php previous_post_link(); ?></div>
                <div class="next-link"><?php next_post_link(); ?></div>
            </div> -->
            </div>
</div>
<?php } else {
?>
    <div class="container">
        <?php get_template_part('template-parts/content-none'); ?>

    </div>


<?php
        }

?>

</main>