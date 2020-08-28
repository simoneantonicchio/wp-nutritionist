<?php

// Exit if accessed directly
defined('ABSPATH') || exit;

final class Init
{

    public function init()
    {

        // functions


        // Classes
        
        //  Common Classes

        // Admin classes
        if (is_admin()) {
            require_once WPN_ABSPATH . 'includes/classes/admin/class-admin-menu.php';
        }
    }

}

