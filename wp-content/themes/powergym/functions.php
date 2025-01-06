<?php

// Enqueue Styles and Scripts
function theme_enqueue_assets()
{
    wp_enqueue_style('owl-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '2.3.4', 'all');
    // Enqueue Styles
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.3.1', 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap', array(), null);
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap-css'), '1.0', 'all');
    wp_enqueue_style('theme-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array('theme-style'), '1.0', 'all');

    // Enqueue Scripts
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), '3.4.1', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');


// Theme Setup
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


    // Add custom class to <ul>
    if (!function_exists('custom_ul_class_add')) {
        function custom_ul_class_add($args)
        {
            if (isset($args['add_ul_class'])) {
                $args['menu_class'] .= ' ' . $args['add_ul_class']; // Add custom class to <ul>
            }
            return $args;
        }
    }
    add_filter('wp_nav_menu_args', 'custom_ul_class_add');

    // Add custom class to <li> and active class for Home or current page
    if (!function_exists('custom_li_class_add')) {
        function custom_li_class_add($classes, $item, $args)
        {
            if (isset($args->add_li_class)) {
                $classes[] = $args->add_li_class; // Add custom class to <li>
            }

            // Add "active" class to the current menu item
            if (in_array('current-menu-item', $classes) || in_array('current_page_item', $classes)) {
                $classes[] = 'active';
            }

            // Make Home active by default if no page is selected
            if (is_front_page() && $item->url === home_url('/')) {
                $classes[] = 'active';
            }

            return $classes;
        }
    }
    add_filter('nav_menu_css_class', 'custom_li_class_add', 10, 3);

    // Add custom class to <a>
    if (!function_exists('custom_a_class_add')) {
        function custom_a_class_add($atts, $item, $args)
        {
            if (isset($args->add_a_class)) {
                $atts['class'] = $args->add_a_class; // Add custom class to <a>
            }
            return $atts;
        }
    }
    add_filter('nav_menu_link_attributes', 'custom_a_class_add', 10, 3);
}

add_action('after_setup_theme', 'powergym_setup');


// Custom Post Types for Service and Student
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


if (!function_exists('powergym_student')) {
    function powergym_student()
    {
        register_post_type('student', array(
            'labels' => array(
                'name' => __('students', 'powergym'),
                'singular_name' => __('student', 'powergym'),
                'add_new_item' => __('Add New Student', 'powergym'),
                'not_found' => __('No student found', 'powergym'),
                'not_found_in_trash' => __('No student found in Trash', 'powergym'),
                'set_featured_image' => __('Set student image', 'powergym'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-welcome-learn-more',
        ));
    }
}

add_action('init', 'powergym_student');


//Taxonomies for student
if (!function_exists('mystudentdepartment')) {
    function mystudentdepartment()
    {
        $labels = array(
            'name' => __('students', 'powergym'),
            'singular_name' => __('student', 'powergym'),
            'search_items' => __('Search students', 'powergym'),
            'all_items' => __('All students', 'powergym'),
            'parent_item' => __('Parent students', 'powergym'),
            'parent_item_colon' => __('Parent students:', 'powergym'),
            'edit_item' => __('Edit students', 'powergym'),
            'update_item' => __('Update students', 'powergym'),
            'add_new_item' => __('Add New students', 'powergym'),
            'new_item_name' => __('New students Name', 'powergym'),
            'menu_name' => __('student Department', 'powergym'),
        );
        $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'show_admin_column' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'studentdepartment'),
        );

        register_taxonomy('studentdepartment', ['student'], $args);
    }
}

add_action('init', 'mystudentdepartment');



require_once get_theme_file_path() . '/inc/codestar/codestar-framework.php';
require_once get_theme_file_path() . '/inc/codestar/samples/admin-options.php';
