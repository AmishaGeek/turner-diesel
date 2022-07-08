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
										<span class="icon"><img width="20" height="20" src="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/images/phone-alt.svg" alt="Phone Icon"></span>
										<span class="text"><?php echo $phone; ?></span>
									</a>
								</li>
								<li>
									<a href="<?php the_field('address_link','option'); ?>" target="_blank" title="<?php echo strip_tags(get_field('footer_address','option')); ?>">
										<span class="icon"><img width="15" height="20" src="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/images/map-marker-alt.svg" alt="Map Icon"></span>
										<span class="text"><?php the_field('footer_address','option'); ?></span>
									</a>
								</li>
								<li>
									<a href="mailto:<?php the_field('email','option'); ?>" title="<?php the_field('email','option'); ?>">
										<span class="icon"><img width="19" height="15" src="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/images/email.svg" alt="Email"></span>
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