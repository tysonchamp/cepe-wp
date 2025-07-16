<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>
    
        <!-- main part -->
        <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/educator-img12.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="inner-title">Search: <?php echo get_search_query(); ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Banner html end-->
            <!-- archive html start -->
            <div class="single-post-section">
                <div class="single-post-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 primary right-sidebar">
                                <div class="inner-blog-wrap">
                                    <?php if(have_posts()): ?>
                                        <?php while(have_posts()): the_post(); ?>
                                            <article class="post">
                                                <figure class="feature-image">
                                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                                    <span class="cat-meta">
                                                        <a href="<?php the_permalink(); ?>"><?php the_category_list(', '); ?></a>
                                                    </span>
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
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-4 secondary">
                                <div class="sidebar">
                                    <aside class="widget widget_latest_post widget-post-thumb">
                                        <div class="fw-bold">
                                            <p class="widget-title-dash-border">Latest News</p>
                                        </div>
                                        <ul>
                                            <?php
                                                $args = array(
                                                    'post_type' => 'post',
                                                    'posts_per_page' => 5,
                                                    'order' => 'DESC',
                                                );
                                                $args = new WP_Query($args);
                                                if ($args->have_posts()) : while ($args->have_posts()) : $args->the_post();
                                            ?>
                                                    <li>
                                                        <figure class="post-thumb">
                                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
                                                        </figure>
                                                        <div class="post-content">
                                                            <h6>
                                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                            </h6>
                                                            <div class="entry-meta">
                                                                <span class="posted-on">
                                                                    <a href="<?php the_permalink(); ?>"><?php the_date('F j, Y'); ?></a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                            <?php 
                                                    endwhile; 
                                                endif; 
                                            ?>
                                        </ul>
                                    </aside>
                                    <!-- <aside class="widget widget_social">
                                        <div class="">
                                            <p class="widget-title-dash-border">Follow us on</p>
                                        </div>
                                        <div class="socialgroup">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.pinterest.com/">
                                                        <i class="fab fa-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.whatsapp.com/">
                                                        <i class="fab fa-whatsapp"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/">
                                                        <i class="fab fa-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  archve html end -->
        </main>
        
<?php get_footer(); ?>
