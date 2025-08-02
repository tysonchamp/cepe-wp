<?php
/*
 *Template Name: Download
 */
GLOBAL $post;
get_header();
?>
    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
    
        <!-- main part -->
        <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                <?php if(!empty($featured_image[0])): ?>
                    <div class="inner-baner-container" style="background-image: url(<?php echo $featured_image[0]; ?>);">
                <?php else: ?>
                    <div class="inner-baner-container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/banner.webp);">
                <?php endif; ?>
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="inner-title"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Banner html end-->
            <!-- About page html end -->
            <div class="download-section py-5">
                <div class="container">
                    <!-- <div class="title-divider-center"></div> -->
                    <!-- <h2 class="about-title text-center mb-5">Downloads</h2> -->
                    <div class="download-wrap">
                        <div class="card shadow border-0">
                            <div class="card-body p-4">
                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">Sl.</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Date</th>
                                                <th scope="col" class="text-center">Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(have_rows('all_items')): ?>
                                                <?php $counter = 1; ?>
                                                <?php while(have_rows('all_items')): the_row(); ?>
                                                    <tr>
                                                        <td><?php echo $counter; ?></td>
                                                        <td><?php echo get_sub_field('post_title'); ?></td>
                                                        <td><?php echo get_sub_field('post_date'); ?></td>
                                                        <td class="text-center">
                                                            <a href="<?php echo get_sub_field('attachement'); ?>" class="btn btn-primary btn-sm" download>
                                                                <i class="fas fa-download"></i> Download
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
<?php get_footer(); ?>