<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
//
// Your code goes below
//
// jQuery to make active menu item green even if on sub-menu pages
add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script(){
  wp_enqueue_script(
    'navbar_active',
    get_template_directory_uri() . '/../nse-child-theme/js/navbar-active.js'
  );
}
/**
* WordPress Editor add Superscript buttons
*/
add_filter('mce_buttons_2', 'yanco_mce_buttons_2');
function yanco_mce_buttons_2( $buttons ) {
	$buttons[] = 'superscript' ;
	$buttons[] = 'subscript' ;
	return $buttons;
}


