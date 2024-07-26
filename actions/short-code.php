<?php

function shortcode_youtube_640x350($atts): string
{
    if (empty($atts['src'])) {
        return '<span style="color: red !important;">Attribute src are missing from shortcode “youtube_1200x600”</span>';
    }

    if (empty($atts['title'])) {
        return '<span style="color: red !important;">Attribute title are missing from shortcode “youtube_1200x600”</span>';
    }

    return "<iframe width='640' height='350' src='{$atts['src']}' title='{$atts['title']}' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>";
}
