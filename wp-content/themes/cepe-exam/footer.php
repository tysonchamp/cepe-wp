        <!-- footer part -->
        <footer id="colophon" class="site-footer">
            <div class="footer-overlay"></div>
            <div class="subscribe-section">
                <div class="container">
                    <div class="subscribe-content">
                        <div class="overlay"></div>
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <h3 class="subscribe-title">Subscribe Our Newsletter!</h3>
                                <p class="subscribe-info">Elementum ex similique sollicitudin eveniet sem eveniet proin, iste euismod! Quia! Fugiat molestie leo placerat.</p>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-content d-flex align-items-center">
                                    <input type="email" name="email" placeholder="Enter Email Address">
                                    <button type="submit" class="button-round-primary">SUBSCRIBE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget_text img-textwidget">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/educator-logo1.png" alt="logo"></a>
                                </div>
                                <div class="textwidget widget-text">
                                    <?php echo get_field('footer_texts','option'); ?>
                                </div>
                            </aside>
                            <div class="footer-social-links">
                                <ul>
                                    <?php if(have_rows('social_media_ac','option')): ?>
                                        <?php while(have_rows('social_media_ac','option')): the_row(); ?>
                                            <li>
                                                <a href="<?php echo get_sub_field('social_media_url','option'); ?>" target="_blank">
                                                    <?php echo get_sub_field('social_media_icon','option'); ?>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget">
                                <h5 class="widget-title">Quick LInks</h5>
                                <!-- <ul>
                                    <li>
                                        <a href="about.html">About us</a>
                                    </li>
                                    <li>
                                        <a href="career.html">Careers</a>
                                    </li>
                                    <li>
                                        <a href="single-blog.html">News & Articles</a>
                                    </li>
                                    <li>
                                        <a href="legal-notice.html">Legal Notice</a>
                                    </li>
                                </ul> -->

                                <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'footer_menu',
                                        'container'     => '',
                                        'menu_id' => false,
                                        'menu_class'        => '', 
                                        'echo'          => true,
                                        'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                                        'depth'         => 10,
                                        'walker'        => new footer_nav_menu
                                    ) );
                                ?>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget">
                                <h5 class="widget-title">Support</h5>
                                
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'footer_menu1',
                                        'container'     => '',
                                        'menu_id' => false,
                                        'menu_class'        => '', 
                                        'echo'          => true,
                                        'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                                        'depth'         => 10,
                                        'walker'        => new footer_nav_menu
                                    ) );
                                ?>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget_text school-time">
                                <h5 class="widget-title">School Hours</h5>
                                <span>
                                    <i aria-hidden="true" class="far fa-clock"></i>
                                    <?php echo get_field('school_timeing','option'); ?>
                                </span>
                                <p>Aut, quae convallis minim cum ornare! Pede dictum convallis.</p>
                                <a href="contact.html" class="button-round-secondary ">JOIN US NOW</a>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copy-right">Copyright &copy; 2023 Educator. All rights reserved.</div>
                        </div>
                        <div class="col-md-6">
                            <div class="legal-list">
                                <ul>
                                    <li>
                                        <a href="legal-notice.html">PRIVACY POLICY</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">SUPPORT</a>
                                    </li>
                                    <li>
                                        <a href="legal-notice.html">TERMS & CONDITION</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- back to top -->
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- custom search field html -->
        <!-- <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div> -->
    </div>
    <!-- JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/waypoint/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/progressbar-fill-visible/js/progressBar.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/counterup/jquery.counterup.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/modal-video/jquery-modal-video.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/slick-nav/jquery.slicknav.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
    <?php wp_footer(); ?>
</body>
</html>