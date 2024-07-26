<?php

$url = home_url();
$title = esc_html(get_the_title());
$link = esc_url(get_permalink());
$time = esc_attr(get_the_time('Y-m-d H:i'));

$categories = get_the_category();
$tags = get_the_tags();

$category_links = $categories ? format_taxonomy_links($categories, "$url/category/") : '';
$tag_links = $tags ? format_taxonomy_links($tags, "$url/tag/") : '';

$post_thumbnail = get_the_post_thumbnail();
$excerpt = get_the_excerpt();

?>

<article class='post'>
    <div class='entry-header cf'>
        <h1><a href='<?= $link ?>' title='<?= $title ?>'><?= $title ?></a></h1>
        <p class='post-meta'>
            <time class='date' datetime='<?= $time ?>'><?= $time ?></time>
            <?php if ($category_links) : ?>
                <span>|</span> <span class='categories'><?= $category_links ?></span>
            <?php endif; ?>
            <?php if ($tag_links) : ?>
                <span>|</span> <span class='categories'><?= $tag_links ?></span>
            <?php endif; ?>
        </p>
    </div>
    <?php if ($post_thumbnail) : ?>
        <div class='post-thumb'><a href='<?= $link ?>' title='<?= $title ?>'><?= $post_thumbnail ?></a></div>
    <?php endif; ?>
    <div class='post-content'>
        <p><?= $excerpt ?></p>
    </div>
</article>
