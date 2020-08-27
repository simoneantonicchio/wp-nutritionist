<?php

/**
 * Plugin Name:       WP-Nutritionist
 * Plugin URI:        https://github.com/simoneantonicchio/wp-nutritionist
 * Description:       Nutritionist plugin 
 * Version:           0.0.1
 * Author:            Simone Filippo Antonicchio
 * Author URI:        https://github.com/simoneantonicchio
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

defined('ABSPATH') or die('Go out');

// Plugin absolute path
define('WPN_ABSPATH', plugin_dir_path(__FILE__));

// Plugin URL
define('WPN_URL', plugin_dir_url(__FILE__));

register_activation_hook(__FILE__, array($wp_nutritionist, 'activate'));
register_deactivation_hook(__FILE__, array($wp_nutritionist, 'deactivate'));

/* Init function */



// Load main class file
require_once WPN_ABSPATH . 'includes/class-init.php';
/**
 * Initilize class function
 * @since 1.0
 */
function wcss_initialize()
{
    $initialize = new Init;
    $initialize->init();
}

//  Hook plugin with plugin loaded
add_action('plugins_loaded', 'wcss_initialize', 20);

function init()
{

    // adding boostrap
    wp_register_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap_css');
    wp_register_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap_js');

    //add fontawesome
    wp_register_style('custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css');
    wp_enqueue_style('custom-fa');
}

add_action('admin_init', 'init');
