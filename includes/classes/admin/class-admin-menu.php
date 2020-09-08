<?php

// Exit if accessed directly
defined('ABSPATH') || exit;

class Admin_Menu
{

    public function __construct()
    {
        add_action('admin_menu', array($this, 'add_admin_menu'));
    }

    public function add_admin_menu()
    {
        add_menu_page('Home', 'WP-Nutritionist', 'manage_options', 'home', array( $this, 'nutrionist_home_panel' ) );
        add_submenu_page('home', 'Home', 'Home', 'manage_options', 'home', array( $this, 'nutrionist_home_panel' ));
        add_submenu_page('home', 'Patient', 'Patient', 'manage_options', 'patient', array( $this, 'patient_home_panel' ));
        add_submenu_page(null, 'Add Patient', 'Add Patient', 'manage_options', 'add-patient', array( $this, 'add_patient' ));
    }

    public function nutrionist_home_panel()
    {
        require_once WPN_ABSPATH . 'views/admin/home.php';
    }

    public function patient_home_panel()
    {
        require_once WPN_ABSPATH . 'views/admin/patients.php';
    }

    public function add_patient()
    {
        require_once WPN_ABSPATH . 'views/admin/add-patient.php';
    }
}

// end of WCSS_Admin_Menu

new Admin_Menu;
