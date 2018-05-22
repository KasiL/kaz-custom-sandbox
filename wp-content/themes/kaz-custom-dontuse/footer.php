        </div> <!-- col -->
    </div> <!-- row -->
</div> <!-- container -->

<!-- footer template file -->
        <footer>
            <div class="container">
                <p>
                    This is the footer
                </p> 
                <?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
            </div>
        </footer>
        <?php wp_footer() ?>
    </body>
</html>