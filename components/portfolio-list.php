<div id="portfolio-wrapper" class="<?= $args['class'] ?? '' ?>">

    <?php
    $params = [
        'post_type' => 'portfolio',
    ];

    if (isset($args['per_page'])) {
        $params['numberposts'] = $args['per_page'];
    }

    $posts = get_posts($params);

    foreach ($posts as $post) {
        setup_postdata($post);

        get_template_part('components/portfolio', 'item');
    }

    wp_reset_postdata();

    ?>

</div>