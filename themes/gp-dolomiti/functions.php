<?php
/**
 * @package WordPress
 * @subpackage GP Dolomiti
 * @since GP Dolomiti 1.0
 */

update_option('siteurl','http://localhost:8888/gp-dolomiti-new');//'http://192.168.1.13:8888/gp-dolomiti-new');
update_option('home','http://localhost:8888/gp-dolomiti-new');//'http://192.168.1.13:8888/gp-dolomiti-new');

// Load languages
add_action("init", "theme_init");
function theme_init()
{
	load_theme_textdomain("gp-dolomiti" , get_template_directory() . "/languages");
}

// Hide Admin bar while developing
add_filter('show_admin_bar', '__return_false');
// because it sucks

// Remove the head tags that qTranslate inserts. They don't validate
add_action('init', 'remove_header_info');
function remove_header_info()
{
	remove_action('wp_head', 'qtrans_header');
}

// Remove jQuery
// if ( !is_admin() ) add_action('admin_enqueue_scripts', 'remove_jquery');

// function remove_jquery()
// {
// 	wp_deregister_script('jquery');
// }

// Register a custom navigation menu
add_action("init", "register_custom_menu");
function register_custom_menu()
{
	register_nav_menu('nav-main', __( 'Hauptnavigation' ));
}

?>