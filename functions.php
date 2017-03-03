<!--Incuding CSS File with ENQUEUE Function-->

<?php

function includingStyleSheet(){
    wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','includingStyleSheet');

//Custom Excerpt Link
function custom_excerpt_length(){
    return 30;
}

add_filter('excerpt_length','custom_excerpt_length');


//Setting Up Some WordPress Resources

function wordPress_resources(){
//Navigation Menu Support
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' =>__('Secondary Menu'),
));
    
//Featured Image Support    
add_theme_support('post-thumbnails'); 
}
add_action('after_setup_theme', 'wordPress_resources' );