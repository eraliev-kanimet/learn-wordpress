<?php

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
                <h1><?php the_title() ?></h1>

                <div class="entry-description"></div>

                <ul class="portfolio-meta-list">
                    <li><span>Date: </span><?php the_field('project_time'); ?></li>
                    <li>
                        <span>Skills: </span>
                        <?php the_terms(get_the_ID(), 'skills') ?>
                    </li>
                </ul>
            </div>

            <div id="primary" class="eight columns">

                <div class="entry-media">
                    <?php the_post_thumbnail() ?>
                </div>

                <div class="entry-excerpt">
                    <?php the_content(); ?>
                </div>

            </div>

        </section>

        <ul class="post-nav cf">
            <?php
            $prev_post = get_previous_post();

            if (!empty($prev_post)) {
                $link = get_permalink($prev_post->ID);
                $title = esc_html($prev_post->post_title);

                echo "<li class='prev'>
                        <a href='$link' rel='prev'>
                            <strong>Previous Entry</strong>
                            $title
                        </a>
                      </li>";
            }

            $next_post = get_next_post();

            if (!empty($next_post)) {
                $link = get_permalink($next_post->ID);
                $title = esc_html($next_post->post_title);

                echo "<li class='next'>
                        <a href='$link' rel='next'>
                            <strong>Next Entry</strong>
                            $title
                        </a>
                      </li>";
            }
            ?>
        </ul>

    </div>
</div>

<?php

get_template_part('components/tweets');

get_footer()

?>
