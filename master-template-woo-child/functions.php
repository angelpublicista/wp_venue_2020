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

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 
function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_state']);
    unset($fields['order']['order_comments']);
    return $fields;
}

add_action('woocommerce_after_checkout_billing_form', 'wps_add_select_checkout_field');

function wps_add_select_checkout_field( $checkout ) {

    woocommerce_form_field( 'criteriosustitucion', array(
	'type' => 'select',
	'required' => true,
    'class' => array( 'form-row-wide form-group' ),
    'label' => __( 'Tipo de documento' ),
    'options' => array(
        'blank' => __( 'Seleccione una opción', 'wps' ),
        'Cédula' => __( 'Cédula', 'wps' ),
        'Pasaporte' => __( 'Pasaporte', 'wps' ),
        'Cédula de extranjería' => __( 'Cédula de extranjería', 'wps' )
        )
    ),
    $checkout->get_value( 'criteriosustitucion' ));
}

function claserama_add_select_prefered_contact_method($checkout){
    woocommerce_form_field('contactmethod',array(
        'type' => 'text', //textarea, text,select, radio, checkbox, password
        'required' => true, //este parámetro no valida, solo agrega un "*" al campo
        'class' => array('form-row-wide form-group'), // un array puede ser la clase 'form-row-wide', 'form-row-first', 'form-row-last'
		'label' => 'No de documento',
        ), $checkout->get_value('contactmethod')
    );
}
add_action('woocommerce_after_checkout_billing_form','claserama_add_select_prefered_contact_method');

function claserama_rearrange_checkout_fields($fields){
    //para mover el orden de los elementos del array, debemos asignar una propiedad de prioridad a cada campo, en nuestro ejemplo le dimos una prioridad menor al email, entonces colocará este campo al principio de nuestra forma
    $fields['billing']['billing_email']['priority'] = 10;
    $fields['billing']['billing_first_name']['priority'] = 20;
	$fields['billing']['billing_last_name']['priority'] = 30;
    $fields['billing']['billing_country']['priority'] = 40;
    $fields['billing']['billing_phone']['priority'] = 50;
    return $fields;
}
add_filter('woocommerce_checkout_fields','claserama_rearrange_checkout_fields');

add_filter( 'woocommerce_form_field_args', 'theme_form_field_args', 10, 3 );
function theme_form_field_args( $args, $key, $value ) {
    // your code

    $args['placeholder'] = $args['label'];
    return $args;
};