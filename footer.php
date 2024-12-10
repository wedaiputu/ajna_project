<footer id="footer">
    <div class="footer2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="simplenav">
                            <?php wp_nav_menu(['theme_location' => 'footer']); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="text-right">
                            &copy; <?php echo date('Y'); ?>. Template by <a href="http://webthemez.com/" rel="develop">WebThemez.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
