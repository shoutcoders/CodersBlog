<!--Incuding CSS File with ENQUEUE Function-->

<?php

function includingStyleSheet(){
    wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','includingStyleSheet');

// Navigation Menus

function navigation_menu(){
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' =>__('Secondary Menu'),
));
}
add_action( 'init', 'navigation_menu' );


//Custom Excerpt Link

function custom_excerpt_length(){
    return 30;
}

add_filter('excerpt_length','custom_excerpt_length');

//Setting Up Some WordPress Resources


function addingSupport(){
//Add Featured Image Support
add_theme_support( 'post-thumbnails' ); 
    
}

add_action('init','addingSupport');