<?php
/*
Plugin Name: Buku Tamu
Plugin URI:  https://wordpress-aqbarid.c9users.io/
Description: Ini adalah buku tamu
Version:     0.0    
Author:      Rosyd Aqbar
Author URI:  http://raqbar.id
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: buku-tamu
*/

// include files
require_once(plugin_dir_path(__FILE__) . '/includes/setupdb.php');
require_once(plugin_dir_path(__FILE__) . '/includes/form.php');
require_once(plugin_dir_path(__FILE__) . '/includes/submit.php');
require_once(plugin_dir_path(__FILE__) . '/includes/dashboard.php');
require_once(plugin_dir_path(__FILE__) . '/includes/delete.php');
require_once(plugin_dir_path(__FILE__) . '/includes/edit-form.php');

// activation hook
register_activation_hook( __FILE__, 'db_bukutamu' );

//menu
function bukutamu_menu(){
        add_menu_page(
            'Buku Tamu',
            'Buku Tamu',
            'manage_options',
            'dash-bukutamu',
            'buku_tamu_admin',
            'dashicons-book', 15);
        add_submenu_page(null,
	        null,
	        'Delete Data',
	        'manage_options',
	        'delete-tamu',
	        'delete_data');
        add_submenu_page(null,
	        null,
	        'Edit Data',
	        'manage_options',
	        'edit-data',
	        'edit_form');
}

add_action('admin_menu', 'bukutamu_menu');

// function shortcode
function buku_tamu_shortcode()
{
    ob_start();
    edit_form();
    delete_data();
    buku_tamu_admin();
    buku_tamu_submit();
    buku_tamu_form();
    return ob_get_clean();
}
add_shortcode( 'buku_tamu', 'buku_tamu_shortcode' );
?>