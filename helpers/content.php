<?php

function format_taxonomy_links($items, $url_base): string
{
    $links = array_map(function ($item) use ($url_base) {
        $slug = esc_attr($item->slug);
        $name = esc_html($item->name);
        $link = esc_url($url_base . $slug);
        return "<a href='$link' rel='$name'>$name</a>";
    }, $items);

    return implode(' / ', $links);
}
