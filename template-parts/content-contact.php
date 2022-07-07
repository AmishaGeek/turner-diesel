<?php echo do_shortcode('[contact-form-7 id="30" title="Contact Us"]'); ?>

<?php $frontpage_id = get_option( 'page_on_front' ); ?>
<!-- service sec start -->
<!-- <section class="service-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                <h2 class="h2-title"> Service</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="service-menu dot-class">
                </div>
            </div>
        </div>
        <div class="service-slider">
            <?php
                if (have_rows('services',$frontpage_id)) {
                    while (have_rows('services',$frontpage_id)) {
                        the_row(); ?>
                        <div class="service-box">
                            <div class="service-content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="service-info  ">
                                            <h3 class="h3-title dot-title"><?php the_sub_field('service_title'); ?></h3>
                                                <?php the_sub_field('service_content'); ?>
                                            <a href="<?php the_sub_field('page_link'); ?>" title="learn more">Learn more <span><i class="fal fa fa-angle-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                    }
                } ?>
        </div>
    </div>
</section> -->
<!-- service sec end -->