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
                <?php get_template_part('components/portfolio', 'list', ['class' => 'bgrid-halves cf']) ?>
            </div>
        </section>
    </div>
</div>

<?php get_footer() ?>
