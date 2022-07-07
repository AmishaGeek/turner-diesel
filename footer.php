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
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'turner-diesel' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'turner-diesel' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'turner-diesel' ), 'turner-diesel', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<div class="modal common-popup quote-popup" id="request_quote">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="popup-title">
				<h3 class="h3-title">Request A Quote</h3>
				<button type="button" class="close close-popup" data-dismiss="modal"></button>
			</div>
			<div class="common-popup-overflow">
				<div class="common-popup-text" data-simplebar>
					<div class="contact-form">
						<?php echo do_shortcode('[contact-form-7 id="43" title="Request A Quote"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
