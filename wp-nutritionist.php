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

defined('ABSPATH') or die ('Go out');

class WP_Nutritionist{
    function activate(){
        //activate action
    }

    function deactivate(){
        //deactivate action
    }

    function uninstall(){
        //unistall action
    }
}

if (class_exists('WP_Nutritionist')){
    $wp_nutritionist = new WP_Nutritionist();
}

register_activation_hook(__FILE__, array($wp_nutritionist, 'activate'));
register_deactivation_hook(__FILE__, array($wp_nutritionist, 'deactivate'));


/* Add menu voice to WP-Backend*/

function nutrionist_home_panel()
{
    echo '<div class="alert alert-primary" role="alert">
    A simple primary alert—check it out!
  </div>';
}

function wp_nutritionist_menu_pages() {
    add_menu_page('Home', 'WP-Nutritionist', 'manage_options', 'my-menu', 'nutrionist_home_panel');
    add_submenu_page('my-menu', 'Home','Home','manage_options', 'my-menu', 'nutrionist_home_panel');
    add_submenu_page('my-menu', 'Patient', 'Patient','manage_options', 'patient', 'nutrionist_home_panel');

}


add_action('admin_menu', 'wp_nutritionist_menu_pages');



