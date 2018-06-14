<?php
/**
 * kaka theme functions and definitions.
 *
 * @sine 1.0
 * @package kaka
 */
/**
 * Adds feature image as background in div.
 */
function kaka_full_container_post_thumbnail() {
  if ( is_single() || is_page() ) :
    $featured_img_url = get_the_post_thumbnail_url();
    if ( $featured_img_url ) : ?>
      <section class="feature-image-container-full" style="background-image: url('<?php echo esc_url( $featured_img_url );?> ');"></section><?php
    endif;
  endif;
}
add_action( 'after_header', 'kaka_full_container_post_thumbnail');
