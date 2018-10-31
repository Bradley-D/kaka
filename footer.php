<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kaka
 */

?>

	</div><!-- #content -->

	<?php do_action( 'before_footer' ); ?>

	<footer id="colophon" class="site-footer container-full">

		<?php do_action( 'before_footer_content' ); ?>

		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kaka' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'kaka' ), 'WordPress' );
				?>
			</a>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) :
				the_privacy_policy_link( '<span class="sep"> | </span>', '' );
			endif;
			?>
		</div><!-- .site-info -->

		<?php do_action( 'after_footer_content' ); ?>

	</footer><!-- #colophon -->

	<?php do_action( 'after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
