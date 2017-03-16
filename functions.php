<?php

function motyw_script_enqueue(){

wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/style.css',array(), '1.0', 'all');

wp_enqueue_style( 'menu_style', get_template_directory_uri() . '/css/menu-style.css',array(), '1.0', 'all');

wp_enqueue_style( 'container_style', get_template_directory_uri() . '/css/container-style.css',array(), '1.0', 'all');

wp_enqueue_style( 'left-menu_style', get_template_directory_uri() . '/css/left-menu-style.css',array(), '1.0', 'all');

    wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery.js', '1.1', true );

    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/scripts.js', '0.01', true );

}

add_action( 'wp_enqueue_scripts', 'motyw_script_enqueue');




function motyw_theme_setup(){

	add_theme_support('menus');
	add_theme_support('html5' ,array('search-form'));

$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

	register_nav_menu( 'main_menu', 'main menu navigation' );
	register_nav_menu( 'left', 'left-bar navigation' );
	register_nav_menu( 'footer', 'footer navigation' );

}


add_action( 'init', 'motyw_theme_setup');




?>