<?php

/* The Storefront theme doesn't require any files to be enqueued. */

add_action( 'init', 'custom_remove_storefront_header_search' );
function custom_remove_storefront_header_search() {
remove_action( 'storefront_header', 'storefront_product_search', 	
40 );
}

add_action( 'init', 'custom_remove_storefront_header_cart' );
function custom_remove_storefront_header_cart() {
remove_action( 'storefront_header', 'storefront_header_cart',           
60 );
}

add_action( 'init', 'custom_remove_storefront_primary_navigation_wrapper' );
function custom_remove_storefront_primary_navigation_wrapper() {
remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper',           
42 );
}

add_action( 'init', 'custom_remove_storefront_primary_navigation' );
function custom_remove_storefront_primary_navigation() {
remove_action( 'storefront_header', 'storefront_primary_navigation',           
50 );
}

add_action( 'init', 'custom_remove_storefront_primary_navigation_wrapper_close' );
function custom_remove_storefront_primary_navigation_wrapper_close() {
remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close',           
68 );
}

function custom_add_google_fonts() {
 wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Amatic+SC:700', false );
 }
 add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );

function storefront_credit() {
?>
<div class="site-info">
<?php echo 'Some info.'; ?>
</div><!-- .site-info -->
<?php
}
