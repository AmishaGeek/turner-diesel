<?php $frontpage_id = get_option( 'page_on_front' ); ?>

<!-- Start of Gallery -->
<div class="gallery-sec">
    <div class="container-fluid">
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Gallery -->