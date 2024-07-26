<?php

get_header();

get_template_part('components/hero', null, [
    'header' => 'Category<span>.</span>',
    'text' => 'Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu.',
])

?>

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

<?php

get_template_part('components/tweets');

get_footer();

?>
