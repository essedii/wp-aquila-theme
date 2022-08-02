<?php
// Footer template
// @package Aquila

?>
<footer>

    <?php if (is_active_sidebar('sidebar-2')) {
    ?>
    <div class="container">
    <aside>
            <?php dynamic_sidebar('sidebar-2'); ?>
        </aside>
    </div>

    <?php
    }
    ?>

</footer>
<?php wp_footer(); ?>


</body>

</html>