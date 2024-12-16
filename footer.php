            </article>
            <!--end of <article> tag-->

        </main>
        <!--end of .main-wrapper <main> tag-->

        <footer class="footer">

            <div class="footer-bottom">

                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 d-md-flex align-items-md-center justify-content-md-center justify-content-xl-start">
                                <span class="copyright py-md-0">&copy; Copyright <?php echo date( 'Y' ); ?>, By the Pixel</span>
                            </div>
                            <div class="col-xl-6">
                                <nav class="footer-nav">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'container' => 'div',
                                            'container_class' => 'menu-container',
                                            'theme_location' => 'footer-menu',
                                            'menu_class' => 'navbar-nav footer-menu',
                                            'walker' => new WP_Bootstrap_Navwalker(),
                                        )
                                    );
                                    ?>
                                </nav>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </footer>

    </div>
    <!-- END of Panel -->

    <?php wp_footer(); ?>

</body>

</html>
