<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package turner-diesel
 */

?>

<footer id="colophon" class="site-footer">
	<div class="top-footer bg-img" style="background-image: url('<?php the_field('footer_background_image','option'); ?>');">
		<div class="sec-wp">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="footer-info-wp">
							<div class="footer-logo">
								<a href="<?php echo home_url(); ?>" title="TURNER DIESEL-SHOW ME EQPT CO" class="custom-logo-link">
									<img width="481" height="115" src="<?php the_field('footer_logo','option'); ?>" alt="Footer Logo">
								</a>
							</div>
							<div class="footer-text">
								<?php the_field('footer_content','option'); ?>
							</div>
							<div class="footer-social">
								<a href="<?php the_field('facebook','option'); ?>" target="_blank" title="Follow On Facebook">
									<i class="fab fa-facebook-f"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer-contact-info">
							<ul class="contact-link">
								<li>
									<?php
									//Phone number
									$phone = get_field('phone', 'option');
									$val = array("(", ")", " ", "-", ".");
									$replace = array("", "-", "", "", "-");

									//Phone link
									$phone_link = str_replace($val, $replace, $phone);
									?>
									<a href="tel:<?php echo $phone_link; ?>" title="Call <?php echo $phone; ?>" class="phone">
										<span class="icon"> 
											<svg xmlns="http://www.w3.org/2000/svg" width="19.486" height="19.486" viewBox="0 0 19.486 19.486">
												<g transform="translate(-0.492 19.486) rotate(-90)">
													<path d="M18.93,13.776l-4.263-1.827a.913.913,0,0,0-1.066.263l-1.888,2.306A14.107,14.107,0,0,1,4.971,7.774L7.277,5.887A.911.911,0,0,0,7.54,4.821L5.713.558A.92.92,0,0,0,4.666.029L.708.943A.913.913,0,0,0,0,1.833,17.657,17.657,0,0,0,17.659,19.492a.913.913,0,0,0,.891-.708l.913-3.958a.924.924,0,0,0-.533-1.05Z" transform="translate(0 0.486)" fill="#0667b3"/>
												</g>
											</svg>
										</span>	
										<span class="text callus"><?php echo $phone; ?></span>
									</a>
								</li>
								<li>
									<a href="<?php the_field('address_link','option'); ?>" target="_blank" title="<?php echo strip_tags(get_field('footer_address','option')); ?>">
										<span class="icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="14.852" height="19.803" viewBox="0 0 14.852 19.803">
												<path d="M6.663,19.4C1.043,11.257,0,10.42,0,7.426a7.426,7.426,0,0,1,14.852,0c0,2.994-1.043,3.83-6.663,11.977a.929.929,0,0,1-1.526,0Zm.763-8.883A3.094,3.094,0,1,0,4.332,7.426,3.094,3.094,0,0,0,7.426,10.52Z" fill="#0667b3"/>
											</svg>
										</span>
										<span class="text"><?php the_field('footer_address','option'); ?></span>
									</a>
								</li>
								<li>
									<a href="mailto:<?php the_field('email','option'); ?>" title="<?php the_field('email','option'); ?>">
										<span class="icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
												<g transform="translate(0 0)">
													<rect width="23" height="23" transform="translate(0 0)" fill="#0667b3" opacity="0"/>
													<path d="M17.831,4H4.794A2.768,2.768,0,0,0,2,6.742v9.141a2.768,2.768,0,0,0,2.794,2.742H17.831a2.768,2.768,0,0,0,2.794-2.742V6.742A2.768,2.768,0,0,0,17.831,4Zm0,1.828L11.778,9.914a.946.946,0,0,1-.931,0L4.794,5.828Z" transform="translate(0 -0.118)" fill="#0667b3"/>
												</g>
											</svg>
										</span>
										<span class="text"><?php the_field('email','option'); ?></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="copyright">
						<div class="copyright-link">
							<ul>
								<li>&copy; <?php echo date('Y'); ?> Turner Diesel</li>
								<li><a href="<?php echo home_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
								<li><a href="<?php echo home_url(); ?>/terms-of-use" title="Terms of Use">Terms of Use</a></li>
								<li><a href="<?php echo home_url(); ?>/cookies-policy" title="Cookies Policy">Cookies Policy</a></li>
							</ul>
						</div>
						<div class="copyright-text">
							<p>
								Website Design, SEO & Online Marketing by <a href="https://www.dotcomdesign.com/" target="_blank" title="Dotcom Design">Dotcom Design</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<div class="modal common-popup quote-popup" id="request_quote">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close close-popup" data-dismiss="modal"><span></span><span></span></button>
			<div class="modal-body overflow-text">
				<div class="common-popup-overflow">
					<h3 class="h3-title">Request A Quote</h3>
					<div class="common-popup-text" data-simplebar>
						<div class="contact-form">
							<?php echo do_shortcode('[contact-form-7 id="43" title="Request A Quote"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

</html>