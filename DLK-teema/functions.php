<?php
if ( ! isset( $content_width ) ) $content_width = 1000;


function custom_theme_setup() {
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('custom-background');
	add_theme_support('custom-header', array('width' => 1000, 'height' => 400));
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function rekisteroi_menu(){
	register_nav_menu('reuna', 'Paavalikko');
}

add_action('init', 'rekisteroi_menu');

function lisaa_kirjasto() {
    wp_enqueue_script('jquery' );
    wp_register_script('foundation', get_stylesheet_directory_uri() . '/js/vendor/foundation.min.js');
    wp_register_script('what', get_stylesheet_directory_uri() . '/js/vendor/what-input.js');
    wp_register_script('app', get_stylesheet_directory_uri() . '/js/app.js');
     wp_enqueue_script('foundation' );
     wp_enqueue_script('what' );
     wp_enqueue_script('app' );
}

add_action( 'wp_enqueue_scripts', 'lisaa_kirjasto' );


if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'vimpaimet',
        'id' => 'vimpaimet'
	));
}

?>