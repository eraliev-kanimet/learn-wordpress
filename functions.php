<?php

require_once 'helpers/content.php';
require_once 'actions/common.php';
require_once 'actions/components.php';

add_action('wp_enqueue_scripts', 'sparrow_enqueue_scripts');

add_action('wp_footer', 'sparrow_wp_footer');

add_action('after_setup_theme', 'sparrow_after_setup_theme');

add_action('widgets_init', 'sparrow_widgets_init');

add_filter('document_title_separator', 'sparrow_document_title_separator');
