<!-- Start of Banner -->
<section class="main-banner">
    <div class="banner-img bg-img" style="background-image: url('<?php the_field('banner_image'); ?>');"></div>
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content white-text">
                        <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s"><?php the_field('banner_title'); ?></h1>
                        <p class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('banner_sub_title'); ?></p>
                        <div class="banner-btn">
                                    <?php
									//Phone number
									$phone = get_field('phone','option');
									$val = array("(", ")", " ", "-", ".");
									$replace = array("", "-", "", "", "-");
									//Phone link
									$phone_link = str_replace($val, $replace, $phone);
									?>
                            <a href="tel:<?php echo $phone_link; ?>" title="Call Now <?php echo $phone; ?>" class="sec-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">Call Now<span class="call-us callus"><?php echo $phone; ?></span></a>
                            <a href="<?php echo get_permalink(16) ?>" title="Contact Us" class="sec-btn white-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Banner -->

<!-- Start of About Us -->
<section class="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-img-wp wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="about-img bg-img" style="background-image: url('<?php the_field('about_us_image'); ?>');"></div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-content white-text">
                    <h2 class="h2-title wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('about_us_title'); ?></h2>
                    <div class="about-text wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                        <?php the_field('about_us_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About Us -->

<!-- Start of Our Service -->
<section class="our-service-sec" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('our_services_title'); ?></h2>
                </div>
                <div class="service-menu dot-class  wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s"></div>
            </div>
        </div>
        <div class="row our-service-slider">
            <?php
                if (have_rows('services')) {
                    while (have_rows('services')) {
                        the_row(); ?>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="service-img-wp">
                                        <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_image'); ?>');"></div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="service-content">
                                        <h3 class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">Services</h3>
                                        <h2 class="h2-title dot-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s" ><?php the_sub_field('service_title') ?></h2>
                                            <?php the_sub_field('service_content') ?>
                                        <a href="<?php the_sub_field('page_link') ?>" title="<?php echo strip_tags(get_sub_field('service_title')); ?> Learn More" class="learn-more">Learn More <span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                    }
                } ?>
        </div>
    </div>
</section>
<!-- End of Our Service -->

<?php get_template_part( 'template-parts/content', 'gallery' ); ?>