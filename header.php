<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kaka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kaka' ); ?></a>

	<?php do_action( 'before_header' ); ?>

	<header id="masthead" class="site-header">

		<?php do_action( 'before_header_content' ); ?>

		<div class="header-container container row">
			<div class="site-branding col span_4 clr">
				<?php
				the_custom_logo();
				$kaka_header_tag = ( is_front_page() ? 'h1' : 'p'); ?>
				<<?php echo esc_attr ($kaka_header_tag ); ?> class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</<?php echo esc_attr ($kaka_header_tag ); ?> > <?php

				$kaka_description = get_bloginfo( 'description', 'display' );
				if ( $kaka_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo esc_attr( $kaka_description ); ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation col span_8 clr">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="hamburger-text"><?php esc_html_e( 'Menu', 'kaka' ); ?></span><span class="hamburger"></span></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div><!-- #header-container  -->

		<?php do_action( 'after_header_content' ); ?>

	</header><!-- #masthead -->

	<?php do_action( 'after_header' ); ?>

	<div id="content" class="site-content container row gutters">
