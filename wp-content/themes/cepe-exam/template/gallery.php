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
                        <?php $image_galley = get_field('image_gallery'); ?>
                        <?php if($image_galley): ?>
                            <?php foreach($image_galley as $image): ?>
                                <div class="single-gallery">
                                    <figure class="gallery-img">
                                        <a href="<?php echo $image['url']; ?>" data-fancybox="gallery">
                                            <img src="<?php echo $image['url']; ?>" alt="">
                                        </a>
                                    </figure>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- gallery page html end -->
        </main>
<?php get_footer(); ?>