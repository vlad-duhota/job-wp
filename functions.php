<?php 

add_filter('show_admin_bar', '__return_false');


// styles
add_action('wp_enqueue_scripts', 'site_styles');
function site_styles(){  
    $version = '1.0';
    wp_enqueue_style('bvamient', get_template_directory_uri() . '/assets/bvambient.css', [], $version);
    wp_enqueue_style('main-style', get_stylesheet_uri(), [], $version);
    wp_enqueue_script('wow-script', get_template_directory_uri() . '/assets/js/wow.min.js', [], $version, true);
    wp_enqueue_script('particle-script', get_template_directory_uri() . '/assets/js/bvambient.js', [], $version, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', [], $version, true);
}