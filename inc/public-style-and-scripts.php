<?php
/*
 * Exit if called directly.
 * PHP version check and exit.
 */
if ( ! defined( 'WPINC' ) ) {
    die;
}

function sncAddStyleAndScript(): void{
    // Style
    wp_enqueue_style('snc-styles', sncPluginURL() . "assets/public/css/style.css",null, "1.0.0");
    // Script
    wp_enqueue_script('snc-scripts', sncPluginURL() . "assets/public/js/script.js", null, "1.0.0", true);
}
add_action('wp_enqueue_scripts','sncAddStyleAndScript');