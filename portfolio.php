<?php
/*
 Template Name: Portfolio
 */

get_header();

get_template_part('components/hero', null, [
    'header' => 'Our Amazing Works<span>.</span>',
    'text' => 'Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu.',
])
?>

<div class="content-outer">
    <div id="page-content" class="row portfolio">
        <section class="entry cf">
            <div id="secondary" class="four columns entry-details">

                <h1>Our Portfolio.</h1>

                <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                    auctor,
                    nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.</p>

                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                    nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                    cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                    ornare odio.</p>

            </div>

            <div id="primary" class="eight columns portfolio-list">
                <div id="portfolio-wrapper" class="bgrid-halves cf">

                    <?php
                    $posts = get_posts([
                        'post_type' => 'portfolio',
                    ]);

                    foreach ($posts as $post):
                        setup_postdata($post);

                        $link = get_permalink();
                    ?>

                        <div class='columns portfolio-item'>
                            <div class='item-wrap'>
                                <a href='<?= $link ?>'>
                                    <?php the_post_thumbnail() ?>
                                    <div class='overlay'></div>
                                    <div class='link-icon'><i class='fa fa-link'></i></div>
                                </a>
                                <div class='portfolio-item-meta'>
                                    <h5><a href='<?= $link ?>'><?php the_title() ?></a></h5>
                                    <p><?php the_excerpt() ?></p>
                                </div>
                            </div>
                        </div>

                    <?php
                    endforeach;

                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer() ?>
