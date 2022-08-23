<?php
/*
Plugin Name: SS Nano Contact
Plugin URI: https://www.nanomedya.com/
Description: Adding contact, social media, phone, email and other buttons your site.
Version: 1.0.0
Author: sefasungur
Author URI: https://profiles.wordpress.org/sefasungur/
Requires at least: 6.0
Requires PHP: 8.0.0
License: GPLv2 or later
Text Domain: ss-nano-contact
Requires Plugins: font-awesome
GitHub Theme URI: sefasungur/nano-contact
GitHub Theme URI: https://github.com/sefasungur/nano-contact
*/

/*
 * Exit if called directly.
 * PHP version check and exit.
 */
if ( ! defined( 'WPINC' ) ) {
    die;
}

/* Plugin Info */
function sncPluginInfo($data = null){
    $sncPluginInfo = [];
    if ( is_admin() ) {
        if( ! function_exists('get_plugin_data') ){
            require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        }
        $sncPluginInfo = get_plugin_data( __FILE__ );
    }

    if($data != null and !empty($sncPluginInfo[$data])) {
        return $sncPluginInfo[$data];
    } else {
        return null;
    }
}

/* Plugin Dir */
function sncPluginDir(): string {
    return plugin_dir_path(__FILE__);
}

/* Plugin URL */
function sncPluginURL(): string {
    return plugin_dir_url(__FILE__);
}

/* Include WP Plugin Dependencies */
require __DIR__ . "/inc/wp-plugin-dependencies/plugin.php";

/* Plugin Admin Settings Page Include */
require __DIR__ . "/inc/settings-page.php";

/* Plugin Public Style and Scripts */
require __DIR__ . "/inc/public-style-and-scripts.php";

/* Public HTML Code */
function sncHtmlContent(): void {
    $filePath = sncPluginDir() . "inc/snc-public.php";
    require_once $filePath;
}
add_filter('wp_footer', 'sncHtmlContent');