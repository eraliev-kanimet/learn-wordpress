<?php get_header(); ?>

<div class="content-outer">
    <div id="page-content" class="row">

        <div id="primary" class="eight columns">
            <?php get_template_part('components/category', 'posts'); ?>
        </div>

        <div id="secondary" class="four columns end">
            <?php get_sidebar() ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>
