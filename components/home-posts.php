<?php

$posts = get_posts([
    'numberposts' => 3,
    'post_type' => 'post',
    'suppress_filters' => true,
]);

foreach ($posts as $post) {
    setup_postdata($post);

    get_template_part('components/home', 'post');
}
