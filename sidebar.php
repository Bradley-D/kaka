<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kaka
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php do_action( 'before_footer' ); ?>

<aside id="secondary" class="widget-area col span_4 clr">

	<?php do_acation( 'before_sidebar_content' ); ?>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<?php do_acation( 'after_sidebar_content' ); ?>

</aside><!-- #secondary -->

<?php do_action( 'after_footer' ); ?>
