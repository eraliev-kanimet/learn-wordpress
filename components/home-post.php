<?php

$title = esc_html(get_the_title());
$link = esc_url(get_permalink());

?>

<article class="row entry">
    <div class="entry-header">
        <div class="permalink">
            <a href="<?= $link ?>"><i class="fa fa-link"></i></a>
        </div>

        <div class="ten columns entry-title pull-right">
            <h3><a href="<?= $link ?>"><?= $title ?></a></h3>
        </div>

        <div class="two columns post-meta end">
            <p>
                <time
                        datetime="<?= get_the_time('Y-m-d') ?>"
                        class="post-date"
                ><?= get_the_time('M d, Y') ?></time>
                <span class="dauthor">By <?php the_author(); ?></span>
            </p>
        </div>
    </div>

    <div class="ten columns offset-2 post-content">
        <p>
            <?= get_the_excerpt() ?>
            <a class="more-link" href="<?= $link ?>">
                Read More<i class="fa fa-arrow-circle-o-right"></i>
            </a>
        </p>
    </div>
</article>