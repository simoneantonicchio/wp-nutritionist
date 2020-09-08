<?php

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Plugin activation class
 * This class is use when plugin activate
 * @author Simone Antonicchio
 */
class WPN_Activation
{

    /**
     * Plugin activation method
     * @since 1.0
     */
    public static function activate()
    {
        // Flush WP rewrite rules
        update_option('rewrite_rules', '');
        flush_rewrite_rules();

        // Add Table
        global $wpdb;

        $charset_collate = $wpdb->get_charset_collate();

        // Add 'cart share' table
        $table = $wpdb->prefix . 'wp_nutritionist_patients';

        //table not in database. Create new table
        $sql = "CREATE TABLE $table 
                            (   id mediumint(9) NOT NULL AUTO_INCREMENT,
                                name tinytext NOT NULL,
                                surname tinytext NOT NULL,
                                PRIMARY KEY  (id)
                            ) $charset_collate";

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        dbDelta($sql);
    } // end class
}
