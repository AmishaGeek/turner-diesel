<!-- Start of Inner Banner -->
<section class="inner-banner contact-us">
    <div class="inner-banner-img bg-img" style="background-image: url('<?php the_field('banner_image'); ?>');"></div>
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner-banner-content white-text">
                        <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_title(); ?></h1>
                        <div class="inner-banner-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <?php the_field('banner_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Contact -->
<div class="main-contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 order-lg-1 order-2">
                <div class="footer-contact-info">
                    <ul class="contact-link">
                        <li class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <?php
                            //Phone number
                            $phone = get_field('phone', 'option');
                            $val = array("(", ")", " ", "-", ".");
                            $replace = array("", "-", "", "", "-");
                            //Phone link
                            $phone_link = str_replace($val, $replace, $phone);
                            ?>
                            <a href="tel:<?php echo $phone_link; ?>" title="Call <?php echo $phone; ?>" class="phone">
                                <span class="icon"><img width="20" height="20" src="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/images/phone-alt.svg" alt="Phone Icon"></span>
                                <span class="text callus"><?php echo $phone; ?></span>
                            </a>
                        </li>
                        <li class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <a href="<?php the_field('address_link', 'option'); ?>" target="_blank" title="<?php echo strip_tags(get_field('footer_address', 'option')); ?>">
                                <span class="icon"><img width="15" height="20" src="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/images/map-marker-alt.svg" alt="Map Icon"></span>
                                <span class="text"><?php the_field('footer_address', 'option'); ?></span>
                            </a>
                        </li>
                        <li class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            <a href="mailto:<?php the_field('email', 'option'); ?>" title="<?php the_field('email', 'option'); ?>">
                                <span class="icon"><img width="19" height="15" src="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/images/email.svg" alt="Email"></span>
                                <span class="text"><?php the_field('email', 'option'); ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 order-lg-2 order-1">
                <div class="main-contact-form wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <?php echo do_shortcode('[contact-form-7 id="30" title="Contact Us"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Contact -->
