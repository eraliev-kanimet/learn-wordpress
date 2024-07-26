<?php get_header(); ?>

<section id="works">

    <div class="row">

        <div class="twelve columns align-center">
            <h1>Some of our recent works.</h1>
        </div>

        <?php
        get_template_part(
            'components/portfolio',
            'list',
            ['class' => 'bgrid-quarters s-bgrid-halves', 'per_page' => 4]
        )
        ?>

    </div>

</section>

<section id="journal">
    <div class="row">
        <div class="twelve columns align-center">
            <h1>Our latest posts and rants.</h1>
        </div>
    </div>

    <div class="blog-entries">
        <?php get_template_part('components/home', 'posts') ?>
    </div>
</section>

<?php

get_template_part('components/tweets');

get_footer();

?>
