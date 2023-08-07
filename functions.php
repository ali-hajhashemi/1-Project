<?php


function add_resources()
{

    // Add reset.css Style File
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/assets/css/reset.css');

    // Add style.css Style File (Main)
    wp_enqueue_style('style', get_stylesheet_uri());



    // Add Fontawesome Style File
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/fonts/Web/css/all.min.css');


    // ====================================================================

    // Add jquery.js Javascript File
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/jquery.js', array(), '3.7.0', true);

    // Add main.js Javascript File (Main)
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery-js'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'add_resources');





// ======================================================================

// Add Post Type
function register_posts_types()
{


    add_theme_support('post-thumbnails');

    add_theme_support('post-formats', array('aside', 'gallery'));


    register_post_type(
        'showcase',
        array(
            'labels'      => array(
                'name'          => __('Showcase', 'textdomain'),
                'singular_name' => __('Showcase', 'textdomain'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'           => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init', 'register_posts_types');




// ==========================================================================

function theme_setup()
{

    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

    // Add Custom-logo Support
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'theme_setup');
