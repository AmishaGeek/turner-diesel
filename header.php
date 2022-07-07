<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package turner-diesel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/fonts/HelveticaNeueBold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/fonts/HelveticaNeueLight.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/fonts/HelveticaNeue-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/fonts/OpenSans-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/fonts/OpenSans-Regular.woff2" as="font" type="font/woff2" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'turner-diesel'); ?></a>

		<header id="masthead" class="site-header">
			<div class="top-header for-des-flex">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="site-branding">
								<?php
								the_custom_logo();
								?>
							</div><!-- .site-branding -->
						</div>
						<div class="col-lg-6">
							<ul class="contact-link">
								<li>
									<a href="tel:4177817302" title="417-781-7302" class="phone">
										<span class="icon"><img width="20" height="20" src="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/images/phone-alt.svg" alt="Phone Alt"></span>
										<span class="text">417-781-7302</span>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);" target="_blank" title="4405 W Energy Lane Joplin, MO 64801">
										<span class="icon"><img width="15" height="20" src="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/images/map-marker-alt.svg" alt="Map Alt"></span>
										<span class="text">4405 W Energy Lane Joplin, MO 64801</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 order-2 order-lg-1">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
									<span></span>
									<span></span>
									<span></span>
								</button>
								<div class="header-menu">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>
								</div>
							</nav><!-- #site-navigation -->
						</div>
						<div class="col-lg-5 order-1 order-lg-2">
							<div class="for-mob">
								<div class="site-branding">
									<?php
									the_custom_logo();
									?>
								</div><!-- .site-branding -->
							</div>
							<div class="header-btn text-right">
								<a href="javascript:void(0);" title="Request A Quote" class="sec-btn lg-btn">Request A Quote</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->