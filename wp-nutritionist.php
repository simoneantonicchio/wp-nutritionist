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

/**
* Plugin activation Hook function
* @since 1.0
*/
function wpn_activation() {
    require_once WPN_ABSPATH . 'includes/classes/class-activation.php';
    WPN_Activation::activate();
}
register_activation_hook( __FILE__, 'wpn_activation' );


// /**
// * Plugin deactivation Hook function
// * @since 1.0
// */
// function wpn_deactivation() {
//     require_once WPN_ABSPATH . 'includes/classes/class-deactivation.php';
//     WPN_Deactivation::deactivate();
// }
// register_deactivation_hook(__FILE__,  'wpn_deactivation');

/**
* Plugin uninstall Hook function
* @since 1.0
*/
function wpn_uninstall() {
    require_once WPN_ABSPATH . 'includes/classes/class-uninstall.php';
    WPN_Uninstall::uninstall();
}
register_uninstall_hook(__FILE__,  'wpn_uninstall');

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


