<?php

function enqueue_styles_child_theme() {

	$parent_style = 'master-template-woo-style';
	$child_style  = 'master-template-woo-child-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( $child_style, get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
	wp_enqueue_style( 'custom-style-css', get_stylesheet_directory_uri() . '/assets/css/custom-style.css', '1.0' );
	wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/slick/slick.css', '1.8.1' );
	wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/slick/slick-theme.css', '1.8.1' );
	wp_enqueue_script( 'custom-child-js', get_stylesheet_directory_uri() . '/assets/js/custom-child.js', array('jquery', 'slick-js'), '1.0', true);
	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/slick/slick.min.js', array('jquery'), '1.8.1', true);
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );

require_once "inc/shortcodes/sc-carousel-brands.php";