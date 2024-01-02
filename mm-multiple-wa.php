<?php

/**
 * Plugin Name: MM WP Multiple WA
 * Plugin URI: https://budiharyono.id/
 * Description: Multiple WA for MM
 * Version: v1.0.0
 * Author: Budi Haryono
 * Author URI: https://budiharyono.id/
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mm-multiple-wa
 * Domain Path: /languages
 */

defined('ABSPATH') or die('No script kiddies please!');

/**
 *=========================
 *NAME: Load Carbon Fields
 *=========================
 */
function mmwpwa_cf_checker()
{
    require_once(plugin_dir_path(__FILE__) . 'vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

/**
 * Load Carbon Fields When Needed
 */
function mmwpwa_load_cf()
{
    if (!function_exists('carbon_fields_boot_plugin')) {
        mmwpwa_cf_checker();
    }
}
add_action('plugins_loaded', 'mmwpwa_load_cf');


require_once(plugin_dir_path(__FILE__) . 'plugin-options.php');
require_once(plugin_dir_path(__FILE__) . 'assets/assets.php');
require_once(plugin_dir_path(__FILE__) . 'mmwpwa-container.php');
