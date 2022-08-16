<?php
// Main tempalte file.
// @package aquila
// include_once'header.php';
get_header();
echo 'Index';
?>
<div id="primary">
    <main id="main" class="site-main mt-5" role='main'>
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 col-md-8 col-sm-12 ">
                    <?php if (have_posts()) { ?>
                        <div class="container">
                            <?php
                            if (is_home() && !is_front_page()) {
                            ?>
                                <header class="mb-5">
                                    <h1 class="page-title">
                                        <?php single_post_title(); ?>
                                    </h1>
                                </header>
                            <?php
                            }
                            ?>
                            <div class="row">
                                <?php
                                while (have_posts()) : the_post(); {
                                ?>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                        <?php
                                    }
                                    get_template_part('template-parts/content'); {
                                        ?>
                                        </div>
                                <?php
                                    }
                                endwhile;
                                ?>
                            </div>
                            <div class="container">
                                <?php aquila_pagination(); ?>
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


                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <?php get_sidebar('sidebar-1') ?>
            </div>
            </div>

            
        </div>

    </main>
</div>
<?php
get_footer();
