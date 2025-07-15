<?php
/*
 * Template Name: Gallery
 */
GLOBAL $post;
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
            <!-- gallery page html start -->
            <div class="gallery-section">
                <div class="container">
                    <div class="gallery-container">
                        <div class="single-gallery">
                            <figure class="gallery-img">
                                <a href="assets/img/educator-img12.jpg" data-fancybox="gallery">
                                    <img src="assets/img/educator-img12-500px.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery">
                            <figure class="gallery-img">
                                <a href="assets/img/educator-img13.jpg" data-fancybox="gallery">
                                    <img src="assets/img/educator-img13-500px.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery">
                            <figure class="gallery-img">
                                <a href="assets/img/educator-img14.jpg" data-fancybox="gallery">
                                    <img src="assets/img/educator-img14-500px.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery">
                            <figure class="gallery-img">
                                <a href="assets/img/educator-img15.jpg" data-fancybox="gallery">
                                    <img src="assets/img/educator-img15-500px.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery">
                            <figure class="gallery-img">
                                <a href="assets/img/educator-img27.jpg" data-fancybox="gallery">
                                    <img src="assets/img/educator-img27.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery">
                            <figure class="gallery-img">
                                <a href="assets/img/educator-img28.jpg" data-fancybox="gallery">
                                    <img src="assets/img/educator-img28.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery">
                            <figure class="gallery-img">
                                <a href="assets/img/educator-img29.jpg" data-fancybox="gallery">
                                    <img src="assets/img/educator-img29-300px.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery">
                            <figure class="gallery-img">
                                <a href="assets/img/educator-img30.jpg" data-fancybox="gallery">
                                    <img src="assets/img/educator-img30-300px.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery">
                            <figure class="gallery-img">
                                <a href="assets/img/educator-img31.jpg" data-fancybox="gallery">
                                    <img src="assets/img/educator-img31-300px.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <!-- gallery page html end -->
        </main>
<?php get_footer(); ?>