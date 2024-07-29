<?php

get_header();

get_template_part('components/hero', null, [
    'header' => get_the_title(),
    'text' => get_the_excerpt(),
])

?>

    <div class="content-outer">

        <div id="page-content" class="row">

            <div id="primary" class="eight columns">

                <article class="post">

                    <div class="entry-header cf">

                        <h1><?php the_title() ?></h1>

                        <p class="post-meta">
                            <time class="date" datetime="2014-01-14T11:24"><?php the_time(); ?></time>
                        </p>

                    </div>

                    <div class="post-thumb">
                        <?php the_post_thumbnail() ?>
                    </div>

                    <div class="post-content">

                        <?php the_content(); ?>

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

                </article>

            </div>

            <div id="secondary" class="four columns end">
                <?php get_sidebar() ?>
            </div>

        </div>

    </div>

<?php

get_template_part('components/tweets');

get_footer()

?>