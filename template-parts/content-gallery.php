<?php $frontpage_id = get_option( 'page_on_front' ); ?>

<!-- Start of Gallery -->
<div class="gallery-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="gallery-slider">    
                <?php
					$images = get_field('gallery_images',$frontpage_id);
					if ($images) :
                        $i = 1;
						foreach ($images as $image) : ?>
                            <a href="<?php echo esc_url($image['url']); ?>" title="Gallery Image <?php echo $i; ?>" data-fancybox="gallery">
                                <div class="gallery-img bg-img" style="background-image: url('<?php echo esc_url($image['url']); ?>');"></div>
                            </a>
                        <?php 
                        $i++;
						endforeach;
					endif; ?>
                    <!-- <a href="javascript:void(0);">
                        <div class="gallery-img bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/07/galery-img-2.jpg');"></div>
                    </a>
                    <a href="javascript:void(0);">
                        <div class="gallery-img bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/07/galery-img-3.jpg');"></div>
                    </a>
                    <a href="javascript:void(0);">
                        <div class="gallery-img bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/07/galery-img-4.jpg');"></div>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Gallery -->