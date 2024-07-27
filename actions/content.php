<?php

function sparrow_register_post_types(): void
{
    register_post_type('portfolio', [
        'label' => null,
        'labels' => [
            'name' => 'Portfolio',
            'singular_name' => 'Portfolio',
            'all_items' => 'All Portfolio',
            'add_new' => 'Add Portfolio',
            'add_new_item' => 'Add Portfolio',
            'edit_item' => 'Edit Portfolio',
            'new_item' => 'New Portfolio',
            'view_item' => 'View Portfolio',
            'search_items' => 'Search Portfolio',
            'not_found' => 'No Portfolio found',
            'not_found_in_trash' => 'No Portfolio found in Trash',
            'parent_item_colon' => '',
            'menu_name' => 'Portfolio',
        ],
        'description' => 'Description',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
        'rest_base' => null,
        'menu_position' => 5,
        'menu_icon' => null,
        'hierarchical' => false,
        'supports' => ['title', 'editor', 'author', 'thumbnail'],
        'taxonomies' => ['skills'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);
}

function sparrow_register_taxonomies(): void
{
    register_taxonomy('skills', ['portfolio'], [
        'label' => null,
        'labels' => [
            'name' => 'Skills',
            'singular_name' => 'Skill',
            'search_items' => 'Search Skills',
            'all_items' => 'All Skills',
            'view_item' => 'View Skill',
            'parent_item' => 'Parent Skill',
            'parent_item_colon' => 'Parent Skill:',
            'edit_item' => 'Edit Skill',
            'update_item' => 'Update Skill',
            'add_new_item' => 'Add Skill',
            'new_item_name' => 'New Skill',
            'menu_name' => 'Skills',
        ],
        'description' => 'Description',
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => false,
        'rewrite' => true,
    ]);
}