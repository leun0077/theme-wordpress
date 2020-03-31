<?php
function assg02_enqueue_style() {
  wp_enqueue_style('font-awesome.min',get_stylesheet_directory_uri().'/assets/css/font-awesome.min.css');
  wp_enqueue_style('ie9',get_stylesheet_directory_uri().'/assets/css/ie9.css');
  wp_enqueue_style('main',get_stylesheet_directory_uri().'/assets/css/main.css');
  wp_enqueue_style('main-styles', get_stylesheet_directory_uri().'/style.css', array('main','ie9','font-awesome.min'));
}
function assg02_enqueue_script(){
  wp_enqueue_script('jquery');
  wp_enqueue_script('jquery.min', get_stylesheet_directory_uri().'/assets/js/jquery.min.js');
  wp_enqueue_script('skel.min', get_stylesheet_directory_uri().'/assets/js/skel.min.js');
  wp_enqueue_script('util', get_stylesheet_directory_uri().'/assets/js/util.js');
  wp_enqueue_script('html5shiv', get_stylesheet_directory_uri().'/assets/js/ie/html5shiv.js');
  wp_enqueue_script('respond.min', get_stylesheet_directory_uri().'/assets/js/ie/respond.min.js');
  wp_enqueue_script('main-script', get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery','jquery.min','skel.min','util','html5shiv','respond.min'));
}
add_action( 'wp_enqueue_scripts','assg02_enqueue_style');
add_action( 'wp_enqueue_scripts','assg02_enqueue_script');

function assg02_function(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','assg02_function');



function assg02_register_menu() {
  // registering a nav menu with name Footer Menu and id footer-menu. This ID is used to call the menu in our templates using theme-location
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
// Using the add_action function to call our custom function on WordPress initialization hook called init
add_action( 'init', 'assg02_register_menu' );