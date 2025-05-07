<?php
/*
* Plugin Name: Custom Plugin
* Description: This is a sample plugin to learn also its my first custom plugin 
* Plugin URI: 
* Author: Md Shazadur Rahman Prince
* Author URI: https://princethecoder.com
* Version:1.0 
* Requires at last : 7.1.2
* Requires PHP: 7.4
* 

*/
// Calling action hook to add menu

add_action( "admin_menu", "cp_add_admin_menu" );


// Add Menu

function cp_add_admin_menu(){
    add_menu_page("Custom Plugin Menu", "Custom Plugin", "manage_options", "cp-plugin", "cp_handle_admin_menu", "dashicons-plugins-checked", "23");
}


// Menu handle

function cp_handle_admin_menu(){
 echo "<h2>Welcome to Custom plugin menu</h2>";
}