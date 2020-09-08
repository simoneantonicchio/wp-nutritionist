<?php

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Plugin uninstall class
 * This class is use when plugin activate
 * @author Simone Antonicchio
 */

class WPN_Uninstall
{

    /**
     * Plugin activation method
     * @since 1.0
     */
    public static function uninstall()
    {
        // if uninstall.php is not called by WordPress, die
        if (!defined('WP_UNINSTALL_PLUGIN')) {
            die;
        }
        global $wpdb;
        $table_name = $wpdb->prefix . 'wp_nutritionist_patients';
        $sql = "DROP TABLE IF EXISTS $table_name";
        $wpdb->query($sql);
    } // end class
}
