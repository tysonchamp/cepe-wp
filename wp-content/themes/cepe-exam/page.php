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
                            <div class="col-lg-12 primary right-sidebar">
                                <!-- single blog post html start -->
                                <figure class="feature-image">
                                    <img src="<?php echo $featured_image[0]; ?>" alt="">
                                </figure>
                                <div class="single-content-wrap">
                                    <!-- <h1 class="post-title"><?php the_title(); ?></h1> -->
                                    <?php the_content(); ?>
                                </div>
                                <!-- divider line html -->
                                <div class="divider-line">
                                    <span class="st-line"></span>
                                </div>
                                <!-- blog post item html end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  single blog html end -->
        </main>
        
<?php get_footer(); ?>
