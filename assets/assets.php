<?php

/**
 * Assets
 */

defined('ABSPATH') or die('No script kiddies please!');




function mmwpwa_load_admin_assets()
{
    wp_enqueue_style('mmwpwa-admin-css', plugins_url('css/admin.css', __FILE__));
    wp_enqueue_script('mmwpwa-admin-js', plugins_url('js/admin.js', __FILE__), array('jquery'), '1.0.0', true);
}
add_action('admin_enqueue_scripts', 'mmwpwa_load_admin_assets');




function mmwpwa_load_frontend_assets()
{
    wp_enqueue_style('mmwpwa-frontend-css', plugins_url('css/mmwpwa.css', __FILE__));
    wp_enqueue_script('mmwpwa-frontend-js', plugins_url('js/mmwpwa.js', __FILE__), array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mmwpwa_load_frontend_assets');
