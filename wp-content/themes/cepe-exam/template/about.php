<?php
/*
 *Template Name: About Us
 */
GLOBAL $post;
get_header('inner');

?>
    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
    
        <!-- main part -->
        <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(<?php echo $featured_image[0]; ?>);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="inner-title"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Banner html end-->
            <!-- About page html start -->
            <section class="about-section">
                <div class="container">
                    <div class="title-divider-center"></div>
                    <h2 class="about-title text-center"><?php echo get_field('about_us_title'); ?></h2>
                    <div class="text-center">
                        <?php echo get_field('about_texts'); ?>
                    </div>
                    <div class="about-banner mt-5">
                        <figure class="about-image figure-round-border">
                            <img src="<?php echo get_field('about_us_image'); ?>" alt="">
                        </figure>
                        <div class="about-right-banner">
                            <h5>School Tour</h5>
                            <?php $school_tour_video_url = get_field('school_tour_video_url'); ?>
                            <div class="video-button">
                                <a id="video-container" data-video-id="IUN664s7N-c">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <?php echo get_field('school_tour_video_texts'); ?>
                        </div>
                    </div>
                    <div class="counter-inner">
                        <div class="counter-item-wrap row">
                            <?php if(have_rows('all_counters')): ?>
                                <?php while(have_rows('all_counters')): the_row(); ?>
                                    <div class="col-lg-3 col-sm-6 counter-item">
                                        <div class="counter-no">
                                            <span class="counter"><?php echo get_sub_field('counter_number'); ?></span>+
                                        </div>
                                        <div class="Completed">
                                            <?php echo get_sub_field('counter_title'); ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if(have_rows('contents_section')): ?>
                        <?php while(have_rows('contents_section')): the_row(); ?>
                            <div class="content-item">
                                <div class="row g-5">
                                    <div class="col-lg-6">
                                        <figure class="about-image figure-round-border">
                                            <img src="<?php echo get_sub_field('content_section_image');  ?>" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="caption">
                                            <?php echo get_sub_field('content_section_texts');  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- <div class="content-item">
                        <div class="row g-5">
                            <div class="col-lg-6">
                                <div class="caption">
                                    <h3 class="about-title">At vero eos et accusamus iusto odio dignissimos</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <figure class="about-image figure-round-border">
                                    <img src="assets/img/educator-img15.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="content-item">
                        <div class="row g-5">
                            <div class="col-lg-6">
                                <div class="caption">
                                    <h3 class="about-title">At vero eos et accusamus iusto odio dignissimos</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="caption">
                                    <h3 class="about-title">At vero eos et accusamus iusto odio dignissimos</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </section>
            <div class="slider-section about-slider border-top">
                <div class="container">
                    <div class="title-divider-center"></div>
                    <h2 class="about-title text-center mb-5">At vero eos et accusamus</h2>
                    <div class="client-slider text-center">
                        <div class="client-item">
                            <figure>
                                <img src="assets/img/educator-img16.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/img/educator-img17.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/img/educator-img18.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/img/educator-img19.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/img/educator-img20.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/img/educator-img18.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/img/educator-img16.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/img/educator-img17.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/img/educator-img18.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/img/educator-img19.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/img/educator-img20.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/img/educator-img18.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About page html end -->
        </main>
        
<?php get_footer(); ?>