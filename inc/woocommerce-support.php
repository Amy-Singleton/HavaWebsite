<?php
/**
 * HavaWebsite Theme Support for Woocommerce Settings
 * 
 * @param      object    havawebsite_wrapper_start() havawebsite_wrapper_end() WooCommerce Shop
 * link        https://docs.woothemes.com/document/declare-woocommerce-support-in-third-party-theme/
 *
 * @package    havawebsite
 * @version    1.0.0
**/

//remove woocommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//create new woocommerce wrappers

add_action('woocommerce_before_main_content', 'havawebsite_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'havawebsite_wrapper_end', 10);

//Make sure that the markup matches that of your theme.
//If you’re unsure of which classes or ID’s to use take a look at the theme’s page.php for a guide

function havawebsite_wrapper_start() {
  echo '<main id="main" class="site-main col-sm-9" role="main"><article class="container-fluid">';
}

function havawebsite_wrapper_end() {
  echo '</article></main>';
}

//Declare Woocommerce Support
add_theme_support( 'woocommerce' );

?>