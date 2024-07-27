<?php

get_header();

get_template_part('components/hero', null, [
    'header' => 'Our Amazing Works<span>.</span>',
    'text' => 'Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu.',
]);

$taxonomy = get_queried_object();

?>

<div class="content-outer">
    <div id="page-content" class="row portfolio">
        <section class="entry cf">
            <div id="secondary" class="four columns entry-details">

                <h1>Skill: <?= $taxonomy->name ?></h1>

            </div>

            <div id="primary" class="eight columns portfolio-list">
                <div id="portfolio-wrapper" class="bgrid-halves cf">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            get_template_part('components/portfolio', 'item');
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer() ?>
