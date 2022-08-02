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
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script> -->

</body>

</html>