<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Use this as a template for custom post types
 require_once(get_template_directory().'/functions/custom-functions.php');

// require_once(get_template_directory().'/functions/Blogs.php');
function integrate_modules(){

    $modules = glob( get_stylesheet_directory(). '/modules/*', GLOB_ONLYDIR );

    if ( $modules ){
        foreach ( $modules as $module ){
            if ( file_exists ( $module . '/module.php')){
                require_once ( $module . '/module.php');
            }
        }
    }
}
add_action( 'after_setup_theme', 'integrate_modules');