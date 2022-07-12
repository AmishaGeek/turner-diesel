<!-- Start of Inner Banner -->
<section class="inner-banner">
    <div class="inner-banner-img bg-img" style="background-image: url('<?php the_field('banner_image'); ?>');"></div>
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-banner-content white-text">
                        <h3 class="wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">Services</h3>
                        <h1 class="h1-title wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.4s"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Main Services -->
<section class="main-service-sec">
    <div class="container">
    <?php
		if(have_rows('services')):
			$servces_couter = 1 ;
			while(have_rows('services')):the_row();
				if($servces_couter%2==0):?>
                    <div class="row services-row even">
                        <div class="col-lg-6 order-2 order-lg-1">  
                            <div class="main-service-content">
                                <h2 class="h2-title wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_sub_field('service_title') ?></h2>
                                <div class="main-service-text wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <?php the_sub_field('service_content'); ?>
                                </div>
                                <?php
                                if (have_rows('point_list')) { ?>
                                    <ul class="service-list wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                        <?php
                                            while (have_rows('point_list')) {
                                                the_row(); ?>
                                                    <li><?php the_sub_field('point'); ?></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="main-service-img-wp wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <div class="main-service-img bg-img" style="background-image: url('<?php the_sub_field('service_image'); ?>');"></div>
                            </div>
                        </div>
                    </div>     
                <?php else: ?>
                    <div class="row services-row odd">
                        <div class="col-lg-6">
                            <div class="main-service-img-wp wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <div class="main-service-img bg-img" style="background-image: url('<?php the_sub_field('service_image'); ?>');"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-service-content">
                                <h2 class="h2-title wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_sub_field('service_title') ?></h2>
                                <div class="main-service-text wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <?php the_sub_field('service_content'); ?>
                                </div>
                                <?php
                                if (have_rows('point_list')) { ?>
                                    <ul class="service-list wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                        <?php
                                            while (have_rows('point_list')) {
                                                the_row(); ?>
                                                    <li><?php the_sub_field('point'); ?></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                    </div>              
                    <?php
				endif;
				$servces_couter++;
			endwhile;
		endif;
		?>
    </div>
</section>
<!-- End of Main Services -->

<?php get_template_part( 'template-parts/content', 'gallery' ); ?>