<?php

function sparrow_document_title_separator(): string
{
    return ' | ';
}

function sparrow_after_setup_theme(): void
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails', ['post']);

    add_theme_support('post-formats', ['aside', 'gallery',]); // 'link', 'image', 'quote', 'video', 'audio'

    register_nav_menu('top', 'Top Menu');
    register_nav_menu('footer', 'Footer Menu');

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