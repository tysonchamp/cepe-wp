<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;
    ?>
    <title>
        <?php wp_title( '' );
    
        // Add the blog name.
        //bloginfo( 'name' );
    
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
    
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'eventsmore' ), max( $paged, $page ) );  ?>
    </title>
    <?php wp_head(); ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/fontawesome/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css">
    <!-- progress bar CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/progressbar-fill-visible/css/progressBar.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/modal-video/modal-video.min.css">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/fancybox/dist/jquery.fancybox.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/slick/slick-theme.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2d6ad.css?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
</head>
<body class="home">
    <div id="siteLoader" class="site-loader ">
        <div class="preloader-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/assets/img/loader1.gif" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        <header class="site-header site-header-transparent">
            <!-- header html start -->
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="header-contact-info">
                                <ul>
                                    <li>
                                        <a href="tel:<?php echo get_field('phone_no_1', 'option'); ?>"><i class="fas fa-phone-alt"></i> <?php echo get_field('phone_no_1', 'option'); ?></a>
                                    </li>
                                    <li>
                                        <a href="mailto:<?php echo get_field('email_address', 'option'); ?>"><i class="fas fa-envelope"></i> <?php echo get_field('email_address', 'option'); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'top_menu',
                                    'container'     => '',
                                    'menu_id' => false,
                                    'menu_class'        => 'nav-links d-flex align-items-center gap-3 mb-0', 
                                    'echo'          => true,
                                    'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                                    'depth'         => 10,
                                    'walker'        => new top_nav_menu
                                ) );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header" id="masthead">
                <div class="container">
                    <div class="hb-group d-flex align-items-center justify-content-between">
                        <div class="site-identity col-lg-2">
                            <p class="site-title">
                                <a href="<?php echo site_url(); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
                                </a>
                            </p>
                        </div>
                        <div class="main-navigation col-lg-10 justify-content-between d-flex align-items-center">
                            <nav id="navigation" class="navigation d-none d-lg-inline-block">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'main_menu',
                                        'container'     => '',
                                        'menu_id' => false,
                                        'menu_class'        => '', 
                                        'echo'          => true,
                                        'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                                        'depth'         => 10,
                                        'walker'        => new main_nav_menu
                                    ) );
                                ?>
                            </nav>
                            <div class="header-btn d-inline-block">
                                <a href="https://cepe.org.in/exam-registration/public/registration/create" class="button-round-secondary">Online Form Fillup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-container"></div>
        </header>
        