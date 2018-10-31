<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaka
 */

get_header();
?>

	<div id="primary" class="content-area col span_8 clr">
			<?php do_action( 'before_archive' ); ?>
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				do_action( 'before_archive_title' );
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				do_action( 'after_archive_title' );
				do_action( 'before_archive_description' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				do_action( 'after_archive_description' );
				?>
			</header><!-- .page-header -->

			<?php do_action( 'before_archive_content' ); ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		<?php do_action( 'after_archive_content' ); ?>

		</main><!-- #main -->
			<?php do_action( 'after_archive' ); ?>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
