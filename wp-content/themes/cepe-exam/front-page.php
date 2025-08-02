<?php

/*
 * Theme Home Page
 */
GLOBAL $post;
$home_id = $post->ID;
get_header();
?>   

    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
    
    <main id="content" class="site-main">
        <!-- home banner section html start -->
        <section class="home-banner d-flex align-items-end">
            <div class="container">
                <div class="row align-items-end">
                    <div class=" banner-left col-md-6">
                        <div class="image-overlay pattern-overlay"></div>
                        <div class="banner-content">
                            <div class="title-divider"></div>
                            <div class="banner-title">
                                <h1><?php echo get_field('banner_title'); ?></h1>
                            </div>
                            <div class="banner-text">
                                <p><?php echo get_field('banner_texts'); ?></p>
                            </div>
                            <div class="banner-button">
                                <a href="#" class="button-round-secondary">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class=" banner-right col-md-6">
                        <figure class="banner-img">
                            <div class="image-overlay-oval pattern-overlay"></div>
                            <img src="<?php echo $featured_image[0]; ?>" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="overlay-image pattern-overlay"></div>
        </section>
        <!-- home about section html start -->
        <section class="home-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="about-left-content">
                            <figure class="figure-round-border">
                                <img src="<?php echo get_field('section_1_image'); ?>" alt="">
                            </figure>
                            <div class="regarding-us">
                                <div class="row">
                                    <?php if(have_rows('section_1_contents')): ?>
                                        <?php while(have_rows('section_1_contents')): the_row(); ?>
                                            <div class="qulifaction-content left-content col-lg-6 mb-3">
                                                <div class="qualification-tag">
                                                    <div class="qualifaction-icon">
                                                        <img src="<?php echo get_sub_field('section_1_icon'); ?>" />
                                                    </div>
                                                    <div class="qualifaction-title">
                                                        <h5>
                                                            <?php echo get_sub_field('section_1_title'); ?>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="qulifaction-detail">
                                                    <p>
                                                        <?php echo get_sub_field('section_1_texts'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="about-btn">
                                <!-- <a href="about.html" class="button-round-secondary">MORE ABOUT US</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-right-content">
                            <div class="title-divider"></div>
                            <h2 class="about-title"><?php echo get_field('section_2_title'); ?></h2>
                            <p class="about-desc">
                                <?php echo get_field('section_2_texts'); ?>
                            </p>
                            <figure class="figure-round-border">
                                <img src="<?php echo get_field('section_2_image'); ?>" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="pattern-overlay"></div>
            </div>
        </section>
        <!-- home Course section html start -->
        <section class="home-fact-section mb-0">
            <div class="overlay"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="fact-section-head">
                            <div class="title-divider"></div>
                            <h2 class="fact-section-title"><?php echo get_field('section_3_title'); ?></h2>
                            <div class="fact-section-info">
                                <?php echo get_field('section_3_texts'); ?>
                            </div>
                            <!-- <div class="fact-list">
                                <ul>
                                    <li>Aliqua est exercitationem quod sunt ipsum dolor.</li>
                                    <li>Expedita fugiat earum, voluptatem init sec smithquas.</li>
                                    <li>Nam porro cumque justo quas jingle swatto sec.</li>
                                </ul>
                            </div> -->
                            <div class="service-btn">
                                <a href="<?php echo get_page_link(98); ?>" class="button-round-secondary">MORE ABOUT US</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <figure class="figure-round-border">
                            <img src="<?php echo get_field('section_3_image'); ?>" alt="" class="w-100">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- home feature section html start -->
        <section class="home-feature-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="title-divider"></div>
                        <h2 class="feature-section-title text-center"><?php echo get_field('section_4_title');  ?></h2>
                        <p class="feature-section-info text-center"><?php echo get_field('section_4_texts');  ?></p>
                    </div>
                </div>
                <div class="feature-wrapper">
                    <?php if( have_rows('section_4_contents') ): ?>
                        <?php $counter = 1; ?>
                        <?php while( have_rows('section_4_contents') ): the_row(); ?>
                            <div class="feature-type">
                                <div class="feature-icon">
                                    <h5 class="meta-no"><?php echo $counter; ?></h5>
                                    <?php echo get_sub_field('section_4_icon'); ?>
                                </div>
                                <h4 class="feature-heading"><?php echo get_sub_field('section_4_title'); ?></h4>
                                <p class="feature-info"><?php echo get_sub_field('section_4_texts'); ?></p>
                                <a class="right-arrow-link">
                                    <i aria-hidden="true" class="icon icon-right-arrow"></i>
                                </a>
                            </div>
                            <?php $counter++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- home goal section html start -->
        <section class="home-goal-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="inner-goal-image">
                            <figure class="video-play-image">
                                <img src="<?php echo get_field('section_5_image'); ?>" alt="">
                                <div class="overlay02 overlay"></div>
                                <div class="video-button">
                                    <?php $video_url = get_field('video_url'); ?>
                                    <a id="video-container" data-video-id="IUN664s7N-c">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="goal-content">
                            <div class="pattern-overlay"></div>
                            <div class="title-divider"></div>
                            <h2 class="goal-title"><?php echo get_field('section_5_title'); ?></h2>
                            <p class="goal-info"><?php echo get_field('section_5_texts'); ?></p>
                            <a href="contact.html" class="button-round-secondary">JOIN US NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home progress section html start -->
        <div class="home-progress-section">
            <div class="overlay"></div>
            <div class="container">
                <div class="counter-inner">
                    <div class="counter-item-wrap row">
                        <?php if(have_rows('counters')): ?>
                            <?php while(have_rows('counters')): the_row(); ?>
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
            </div>
        </div>
        <?php if(have_rows('all_feedbacks','option')): ?>
            <!-- home testimonial section html start -->
            <section class="home-testimonial-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="title-divider-center"></div>
                            <h2 class="testimonial-section-title text-center">Review's From Students</h2>
                            <!-- <p class="testimonial-section-info text-center">Saepe quo labore aenean dictumst expedita commodi auctor, nisl, lorem iusto feugiat nemo reiciendis laboris.</p> -->
                        </div>
                    </div>
                    <div class="row">
                        <?php while(have_rows('all_feedbacks','option')): the_row(); ?>
                            <div class="col-md-6">
                                <div class="client-content left-content">
                                    <div class="pattern-overlay circle-patten"></div>
                                    <p class="client-review">
                                        <?php echo get_sub_field('feedback_texts','option'); ?>
                                    </p>
                                    <div class="author-content">
                                        <div class="author-info">
                                            <h5 class="author-name"><?php echo get_sub_field('person_name','option'); ?></h5>
                                            <span class="author-title"><?php echo get_sub_field('designation','option'); ?></span>
                                        </div>
                                        <figure class="author-img">
                                            <img src="<?php echo get_sub_field('feedback_image','option'); ?>" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="testimonial-btn text-center">
                        <!-- <a href="testimonial.html" class="button-round-primary">MORE REVIEWS NOW</a> -->
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- home blog section html start -->
        <section class="home-blog-section border-top">
            <div class="container">
                <div class="overlay-wrapper">
                    <div class="pattern-overlay c-patten"></div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="title-divider-center"></div>
                            <h2 class="blog-section-title text-center">Our Latest Notice</h2>
                            <!-- <p class="blog-section-info text-center">Saepe quo labore aenean dictumst expedita commodi auctor, nisl, lorem iusto feugiat nemo reiciendis laboris.</p> -->
                        </div>
                    </div>
                    <div class="inner-blog-wrap">
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'orderby' => 'date',
                                'order' => 'DESC'
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                        ?>
                                <article class="post">
                                    <figure class="feature-image">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                        <!-- <span class="cat-meta">
                                            <a href="blog-archive.html">EDUCATION</a>
                                        </span> -->
                                    </figure>
                                    <div class="entry-content">
                                        <h4>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h4>
                                        <p class="blog-info">
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                </article>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- home slider section html start -->
        <!-- <div class="slider-section about-slider border-top">
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
        </div> -->
    </main>
    
<?php get_footer(); ?>