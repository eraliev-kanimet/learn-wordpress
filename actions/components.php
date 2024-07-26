<?php

function sparrow_widgets_init(): void
{
    register_sidebar([
        'name' => 'Left Sidebar',
        'id' => 'left_sidebar',
        'description' => 'Left Sidebar Description',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<h5 class="widgettitle">',
        'after_title' => "</h5>\n",
    ]);
}
