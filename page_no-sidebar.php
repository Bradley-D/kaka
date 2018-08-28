<?php
/**
 * Template Name: No Sidebar
 * Template Post Type: post, page
 * @package kaka
 * @sine 1.0.3
 */

get_header(); ?>

	<div id="primary" class="content-area col span_12 clr">
			<?php do_action( 'before_page' ); ?>
		<main id="main" class="site-main"><?php

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<?php do_action( 'after_page' ); ?>
	</div><!-- #primary --> <?php

get_footer();
