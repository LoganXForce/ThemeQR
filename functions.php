<?php
require_once get_template_directory() . '/libs/class-wp-bootstrap-navwalker.php';

function mimapaqr_custom_post(){
    register_post_type('promocion', array(
        'labels' => array(
            'name' => __('Promociones'),
            'singular_name' => __('Promoción')
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title','editor', 'thumbnail'),
        'menu_icon'   => 'dashicons-admin-site',
        'rewrite' => array('slug' => 'promociones'),
    ));

    
    //servicios
    register_taxonomy('giro',array('promocion'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => __('Giros'),
            'singular_name' => __('Giro')
        ),
        'show_in_rest' => true,
        'show_ui' => true
    ));
}















function mimapaqr_setup()
{
    add_theme_support('post-thumbnails');
    //add_image_size('project-thumbnail', 1080, 1080, true);
}

function mimapaqr_menus()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        //'social-menu' => __('Social Menu', 'apame'),
    ));
}


add_action('after_setup_theme', 'mimapaqr_setup');
add_action('init', 'mimapaqr_custom_post');
add_action('after_setup_theme', 'mimapaqr_menus');
