<footer>
    <div class="container">

        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-bar',
                    // 'menu' => 'Top Bar'
                )
            );
        ?>
    </div>
</footer>

<?php wp_footer();?>

</body>
</html>