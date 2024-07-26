<?php

add_action('wp_enqueue_scripts', 'sparrow_enqueue_scripts');

add_action('wp_footer', 'sparrow_wp_footer');

add_action('after_setup_theme', 'sparrow_after_setup_theme');

add_action('widgets_init', 'sparrow_widgets_init');

function sparrow_after_setup_theme(): void
{
    register_nav_menu('top', 'Top Menu');
    register_nav_menu('footer', 'Footer Menu');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails', ['post']);

    add_image_size('post-thumbnail', 1300, 500, true);
}

function sparrow_enqueue_scripts(): void
{
    $path = get_template_directory_uri() . '/assets/';

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default', $path . 'css/default.css');
    wp_enqueue_style('layout', $path . 'css/layout.css');
    wp_enqueue_style('media-queries', $path . 'css/media-queries.css');

    wp_enqueue_script('modernizr.js', $path . 'js/modernizr.js');
}

function sparrow_wp_footer(): void
{
    $path = get_template_directory_uri() . '/assets/';

    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery.flexslider', $path . 'js/jquery.flexslider.js', ['jquery']);
    wp_enqueue_script('doubletaptogo', $path . 'js/doubletaptogo.js', ['jquery']);
    wp_enqueue_script('init', $path . 'js/init.js', ['jquery']);
}

function sparrow_widgets_init(): void
{
    register_sidebar([
        'name' => 'Left Sidebar',
        'id' => 'left_sidebar',
        'description' => 'Left Sidebar Description',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<h5 class="widgettitle">',
        'after_title' => "</h5>\n",
    ]);
}