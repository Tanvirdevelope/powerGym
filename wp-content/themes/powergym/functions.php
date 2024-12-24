<?php

if (! function_exists('powergym_setup')) {
    function powergym_setup()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'));
    }

    load_theme_textdomain('powergym', get_template_directory() . '/languages');

    register_nav_menus(array(
        'top_menu' => __("Top Menu", "powergym"),
    ));
}

add_action('after_setup_theme', 'powergym_setup');


if (!function_exists('powergym_service')) {
    function powergym_service()
    {
        register_post_type('service', array(
            'labels' => array(
                'name' => __('Services', 'powergym'),
                'singular_name' => __('Service', 'powergym'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-admin-tools',
        ));
    }
}

add_action('init', 'powergym_service');
