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
  $featured_img_url = get_the_post_thumbnail_url();
  if ( $featured_img_url ) :
    $feature_div_string = '<section class="feature-image-container-full" style="background-image: url(' . esc_url( $featured_img_url ) . ')"></section>';
    echo $feature_div_string;
  endif;

}
add_action( 'after_header', 'kaka_full_container_post_thumbnail', 1 );
