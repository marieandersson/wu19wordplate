<?php
declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );

    add_theme_support('soil-clean-up');
    add_theme_support('soil-disable-asset-versioning');
    add_theme_support('soil-disable-trackbacks');
    add_theme_support('soil-js-to-footer');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');
});

// Hide admin bar on the front end
add_filter('show_admin_bar', '__return_false');

// Enqueue styles and scripts the right way.
add_action('wp_enqueue_scripts', function () {
    // NOTE: Seems like WP Event Manager plugin need jquery loaded in head
    // wp_deregister_script('jquery');
    // wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', '', '', true);
    // wp_enqueue_script('jquery');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('bootstrap');

    // Enque compiled assets
    wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/assets/styles/app.css');
    wp_enqueue_script('script', get_stylesheet_directory_uri().'/assets/scripts/app.js');
});

require get_template_directory().'/post-types/student.php';
require get_template_directory().'/post-types/project.php';
require get_template_directory().'/taxonomies/skill.php';
require get_template_directory().'/taxonomies/tool.php';
require get_template_directory().'/fields/student.php';
require get_template_directory().'/fields/project.php';
require get_template_directory().'/plate.php';
