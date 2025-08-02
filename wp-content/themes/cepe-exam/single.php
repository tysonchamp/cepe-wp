<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage clean blog
 * 
 */
global $post;

get_header();
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
            <!--  single blog html start -->
            <div class="single-post-section">
                <div class="single-post-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 primary right-sidebar">
                                <!-- single blog post html start -->
                                <figure class="feature-image">
                                    <img src="<?php echo $featured_image[0]; ?>" alt="">
                                </figure>
                                <div class="single-content-wrap">
                                    <h3 class="post-title"><?php the_title(); ?></h3>
                                    <?php the_content(); ?>
                                </div>
                                <!-- <div class="meta-wrap">
                                    <div class="tag-links">
                                        <?php the_tags(); ?>
                                    </div>
                                </div> -->
                                <!-- divider line html -->
                                <!-- <div class="divider-line">
                                    <span class="st-line"></span>
                                </div> -->
                                <!-- blog post item html end -->
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
            <!--  single blog html end -->
        </main>
        
<?php get_footer(); ?>
