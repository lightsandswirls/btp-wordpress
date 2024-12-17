            </article>
            <!-- END of <article> tag-->

        </main>
        <!-- END of .main-wrapper <main> tag-->

        <footer class="footer">

            <div class="footer-bottom">

                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-start mb-2 mb-md-0">
                            <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-widget-area' ); ?>
                            <?php endif; ?>
                            </div>
                            <div class="col-md-6">
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
        <!-- END of Footer -->

    </div>
    <!-- END of Panel -->

    <?php wp_footer(); ?>

</body>

</html>
