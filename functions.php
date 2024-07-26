<?php

require_once 'helpers/content.php';

require_once 'actions/common.php';
require_once 'actions/components.php';
require_once 'actions/content.php';
require_once 'actions/short-code.php';

add_action('init', 'sparrow_register_post_types');

add_action('after_setup_theme', 'sparrow_after_setup_theme');

add_action('wp_enqueue_scripts', 'sparrow_enqueue_scripts');

add_action('wp_footer', 'sparrow_wp_footer');

add_action('widgets_init', 'sparrow_widgets_init');

add_filter('document_title_separator', 'sparrow_document_title_separator');

add_shortcode('youtube_640x350', 'shortcode_youtube_640x350');

//add_filter('the_content', 'sparrow_test_content');
//add_action('test_action', 'sparrow_test_action');
