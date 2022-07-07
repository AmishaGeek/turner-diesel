<?php
$frontpage_id = get_option( 'page_on_front' );
?>
<!-- service sec start -->
<section class="service-sec" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/service-bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                <h2 class="h2-title" data-title="Service"> Service</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="service-menu custom-dot-slider">
                </div>
            </div>
        </div>
        <div class="services-tabbing-slider">
            <?php
                if (have_rows('services',$frontpage_id)) {
                    while (have_rows('services',$frontpage_id)) {
                        the_row(); ?>
                        <div class="service-box">
                <div class="service-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service-info  ">
                                <h3 class="h3-title dot-title" title="<?php the_sub_field('service_title'); ?>"><?php the_sub_field('service_title'); ?></h3>
                                    <?php the_sub_field('service_content'); ?>
                                <a href="<?php the_sub_field('page_link'); ?>" title="learn more">Learn more <span><i class="fal fa fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="service-img">
                                <div class="back-img" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/service-img.jpg');"></div>
                                <div class=" service-back" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/serviceback-img.jpg');"></div>

                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
                        <?php 
                    }
                }

?>
            <!-- <div class="service-box">
                <div class="service-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service-info  white-text">
                                <h3 class="h3-title dot-title" title="Asphalt">Asphalt</h3>
                                <p>We provide quality asphalt paving and sealcoating for all your commercial or industrial needs, from installation to maintenance. Parking lots, railroad crossings, and much more!</p>
                                <a href="#" title="learn more">Learn more <span><i class="fal fa fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-img">
                                <div class="back-img" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/service-img.jpg');"></div>
                                <div class=" service-back" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/serviceback-img.jpg');"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-box">
                <div class="service-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service-info  white-text">
                                <h3 class="h3-title dot-title" title="Concrete">Concrete</h3>
                                <p>We provide quality asphalt paving and sealcoating for all your commercial or industrial needs, from installation to maintenance. Parking lots, railroad crossings, and much more!</p>
                                <a href="#" title="learn more">Learn more <span><i class="fal fa fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-img">
                                <div class="back-img" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/service-img.jpg');"></div>
                                <div class=" service-back" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/serviceback-img.jpg');"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-box">
                <div class="service-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service-info  white-text">
                                <h3 class="h3-title dot-title" title="Commercial Demolition">Commercial Demolition</h3>
                                <p>We provide quality asphalt paving and sealcoating for all your commercial or industrial needs, from installation to maintenance. Parking lots, railroad crossings, and much more!</p>
                                <a href="#" title="learn more">Learn more <span><i class="fal fa fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-img">
                                <div class="back-img" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/service-img.jpg');"></div>
                                <div class=" service-back" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/serviceback-img.jpg');"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-box">
                <div class="service-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service-info  white-text">
                                <h3 class="h3-title dot-title" title="Commercial & Industrial Painting">Commercial & Industrial Painting</h3>
                                <p>We provide quality asphalt paving and sealcoating for all your commercial or industrial needs, from installation to maintenance. Parking lots, railroad crossings, and much more!</p>
                                <a href="#" title="learn more">Learn more <span><i class="fal fa fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-img">
                                <div class="back-img" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/service-img.jpg');"></div>
                                <div class=" service-back" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/serviceback-img.jpg');"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- service sec end -->