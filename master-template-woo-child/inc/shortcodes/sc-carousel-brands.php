<?php

if(!function_exists('carousel_brands_func')){
    function carousel_brands_func($atts){
        $atts = shortcode_atts(
            array(
                'items-show' => 1,
                'images'     => ''
            ), 
            $atts,
            'carousel_brands'
        );

        $images = explode(",", $atts['images']);

        $slickParam = array(
            'slidesToShow' => $atts['items-show'],
            'arrows' => true
        );
    
        $jsonSlick = json_encode($slickParam);

        $string = '<div class="slick-footer-brands slick-theme" data-slick='.$jsonSlick.'>';
        foreach ($images as $img) {
            $string .= '<div class="item">';
            $string .= wp_get_attachment_image($img, 'full', false, array('class' => 'img-fluid'));
            $string .= '</div>';
        }
        $string .= '</div>';

        return $string;

    }

    add_shortcode( 'carousel_brands', 'carousel_brands_func' );
}