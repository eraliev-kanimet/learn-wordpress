<?php
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
        </div>
    </div>
</div>
