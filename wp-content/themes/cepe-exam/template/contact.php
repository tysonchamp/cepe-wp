<?php
/*
 *Template Name: Contact Us
 */
GLOBAL $post;
get_header('inner');

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
            <!-- contact form html start -->
            <div class="contact-page-section">
                <div class="container">
                    <div class="map-section">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317838.95217734354!2d-0.27362819527326965!3d51.51107287614788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c7c7eb9be3%3A0x3918653583725b56!2sRiverside%20Building%2C%20County%20Hall%2C%20Westminster%20Bridge%20Rd%2C%20London%20SE1%207JA%2C%20UK!5e0!3m2!1sen!2snp!4v1632135241093!5m2!1sen!2snp" height="400" allowfullscreen="" loading="lazy"></iframe> -->
                        <?php echo get_field('google_iframe'); ?>
                    </div>
                    <div class="contact-form-inner">
                        <div class="pattern-overlay zigzag-patten"></div>
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="contact-detail-container">
                                    <div class="section-head">
                                        <div class="title-divider"></div>
                                        <h2 class="section-title"><?php echo get_field('contact_form_title'); ?></h2>
                                        <div class="section-disc">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <div class="contact-details-list">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i aria-hidden="true" class="icon icon-phone1"></i>
                                                </span>
                                                <div class="details-content">
                                                    <h5>Phone Number :</h5>
                                                    <span>Office Phone : <?php echo get_field('phone_no_1', 'option'); ?></span>
                                                    <span>Office Phone : <?php echo get_field('phone_no_2', 'option'); ?></span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                                </span>
                                                <div class="details-content">
                                                    <h5>School Address :</h5>
                                                    <span><?php echo get_field('address', 'option'); ?></span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i aria-hidden="true" class="icon icon-envelope3"></i>
                                                </span>
                                                <div class="details-content">
                                                    <h5>Email address :</h5>
                                                    <span><a href="mailto:<?php echo get_field('email_address', 'option'); ?>"><?php echo get_field('email_address', 'option'); ?></a> //</span>
                                                    <span><a href="mailto:<?php echo get_field('email_address_2', 'option'); ?>"><?php echo get_field('email_address_2', 'option'); ?></a></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-from-wrap">
                                    <div class="pattern-overlay circle-patten"></div>
                                    <form class="contact-from">
                                        <p>
                                            <input type="text" name="name" placeholder="Enter Name*">
                                        </p>
                                        <p>
                                            <input type="email" name="email" placeholder="Enter Email*">
                                        </p>
                                        <p>
                                            <input type="text" name="subject" placeholder="Enter Subject*">
                                        </p>
                                        <p>
                                            <input type="number" name="name" placeholder="Enter Number*">
                                        </p>
                                        <p class="width-full">
                                            <textarea rows="8" placeholder="Enter Message*"></textarea>
                                        </p>
                                        <p class="width-full">
                                            <input type="submit" name="submit" value="Submit Now">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact form html end -->
        </main>
        
<?php get_footer(); ?>