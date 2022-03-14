<?php 

add_filter('show_admin_bar', '__return_false');


// styles
add_action('wp_enqueue_scripts', 'site_styles');
function site_styles(){  
    $version = '1.0';
    wp_enqueue_style('bvamient', get_template_directory_uri() . '/assets/bvambient.css', [], $version);
    wp_enqueue_style('main-style', get_stylesheet_uri(), [], $version);
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', [], $version, true);
    wp_enqueue_script('wow-script', get_template_directory_uri() . '/assets/js/wow.min.js', [], $version, true);
    wp_enqueue_script('particle-script', get_template_directory_uri() . '/assets/js/bvambient.js', [], $version, true);
}

// Carbon Fields
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
  require_once( 'includes/carbon-fields/vendor/autoload.php' );
  \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields () {
    require_once('includes/carbon-fields-options/theme-options.php');
    require_once('includes/carbon-fields-options/post-meta.php');
} 

function disable_content_editor()
{
    if (isset($_GET['post'])) {
        $post_ID = $_GET['post'];
    } else if (isset($_POST['post_ID'])) {
        $post_ID = $_POST['post_ID'];
    }
    if (!isset($post_ID) || empty($post_ID)) {
        return;
    }
    $page_template = get_post_meta($post_ID, '_wp_page_template', true);
    if ($page_template == 'front-page.php') {
        remove_post_type_support('page', 'editor');
    }
}

add_action('admin_init', 'disable_content_editor');
