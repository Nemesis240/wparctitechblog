<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/import-style.css', false,'1.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
   wp_register_script('change', get_template_directory_uri() . '/assets/js/sidebar.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'change');
   wp_register_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'scripts');
   wp_register_script('carousel', get_template_directory_uri() . '/assets/js/owl-carousel.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'carousel');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );